<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) 
        {
            $query = User::query();

            return Datatables::of($query)
            ->addColumn('action', function($item) {
                return ' 
                <div class="btn-group">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                        type="button" 
                        data-toggle="dropdown">
                        Aksi
                        </button>
                        <div class="dropdown-menu" >
                        <a class="dropdown-item" href="'. Route('user.edit', $item->id) . '">
                        Edit
                        </a>
                        <form action="'. Route('user.destroy', $item->id) .'" method="POST">
                            '. method_field('delete') . csrf_field().'
                            <button type="submit" class="dropdown-item text-danger">
                            Hapus
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
                
                ';
            })
            ->rawColumns(['action'])
            ->make()
            ;
        }
        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);
        return redirect()->route('user.index')->with('success', 'Success! User Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::findOrFail($id);
        return view('pages.admin.user.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {

        $data = $request->all();
       
        $item = User::findOrFail($id);
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        else {
            unset($data['password']);
        }
        if ($request->has('email')) {
            // Update email
            $rules = [
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($item->id),
                ],
            ];
            $this->validate($request, $rules);
        }
        $item->update($data);

        return redirect()->route('user.index')->with('success', 'Success! User Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrFail($id);

        $item->delete();
        return redirect()->route('user.index')->with('success', 'Success! User Berhasil Di Hapus'); 
    }
}
