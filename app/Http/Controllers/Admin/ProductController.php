<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) 
        {
            $query = Product::with(['user','category']);

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
                        <a class="dropdown-item" href="'. Route('product.edit', $item->id) . '">
                        Edit
                        </a>
                        <form action="'. Route('product.destroy', $item->id) .'" method="POST">
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
            ->editColumn('price', function($item){
                return 'Rp. ' . number_format($item->price, 0);
            })
            ->rawColumns(['action'])
            ->make()
            ;
        }
        return view('pages.admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $categories = Category::all();
        return view('pages.admin.product.create', [
            'user' => $user,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Product::create($data);
        return redirect()->route('product.index')->with('success', 'Success! Product Berhasil Di Tambah');
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
        $user = User::all();
        $categories = Category::all();
        $item = Product::findOrFail($id);
        return view('pages.admin.product.edit', [
            'item' => $item,
            'user' => $user,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {

        $data = $request->all();
       
        $item = Product::findOrFail($id);
        $data['slug'] = Str::slug($request->name);

        $item->update($data);

        return redirect()->route('product.index')->with('success', 'Success! Product Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Product::findOrFail($id);

        $item->delete();
        return redirect()->route('product.index')->with('success', 'Success! Product Berhasil Di Hapus'); 
    }
}
