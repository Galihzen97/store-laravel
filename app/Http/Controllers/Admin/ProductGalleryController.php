<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Admin\ProductGalleryRequest;
use App\Models\Category;
use App\Models\ProductGallery;
use App\Models\User;
use Illuminate\Support\Str;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) 
        {
            $query = ProductGallery::with(['product']);

            return Datatables::of($query)
            ->addColumn('action', function($item) {
                return ' 
               
                        <form action="'. Route('product-gallery.destroy', $item->id) .'" method="POST">
                            '. method_field('delete') . csrf_field().'
                            <button type="submit" class="btn btn-sm btn-danger">
                            Hapus
                            </button>
                        </form>
                
                ';
            })
            ->editColumn('photos', function($item) {
                return $item->photos ?'<img src=" '. Storage::url($item->photos) .' " style="max-height: 80px;"/>' : '';
            })
            ->rawColumns(['action','photos'])
            ->make()
            ;
        }
        return view('pages.admin.product-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('pages.admin.product-gallery.create', [
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductGalleryRequest $request)
    {
        $data = $request->all();

        $data['photos'] = $request->file('photos')->store('assets/product','public');

        ProductGallery::create($data);
        return redirect()->route('product-gallery.index')->with('success', 'Success! Category Berhasil Di Tambah');
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
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductGalleryRequest $request, string $id)
    {

       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ProductGallery::findOrFail($id);

        $item->delete();
        return redirect()->route('product-gallery.index')->with('success', 'Success! Gallery Berhasil Di Hapus'); 
    }
}
