<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardProductController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = Product::with(['galleries', 'category'])
                ->where('users_id', Auth::user()->id)
                ->get();
        return view('pages.dashboard-products', [
            'products' => $products,
            'user' => $user
        ]);
    }

    public function details(Request $request, $id)
    {
        $products = Product::with(['galleries','user', 'category'])->where('id', $id )->firstOrFail();
        $categories = Category::all();
        return view('pages.dashboard-products-details',[
            'products' => $products,
            'categories' => $categories, 
            
        ]);
    }

    public function create()
    {
        $user = Auth::user();
        $categories = Category::all();
        return view('pages.dashboard-products-create', [
            'categories' => $categories,
            'user' => $user
        ]);
    }

    public function store(ProductRequest $request) {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $product = Product::create($data);
        $gallery = [
            'products_id' => $product->id,
            'photos' => $request->file('photos')->store('assets/product','public'),
        ];

        ProductGallery::create($gallery);
        return redirect()->route('dashboard-products')->with('success', 'Success! Product Berhasil Di Tambah');
    }

    public function uploadGallery(Request $request) {
        $data = $request->all();

        $data['photos'] = $request->file('photos')->store('assets/product','public');

        ProductGallery::create($data);
        return redirect()->route('dashboard-products-details', $request->products_id)->with('success', 'Success! Category Berhasil Di Tambah');
    }

    public function deleteGallery(Request $request, $id) {
        $item = ProductGallery::findOrFail($id);

        $item->delete();
        return redirect()->route('dashboard-products-details', $item->products_id)->with('success', 'Success! Category Berhasil Di Tambah');
    }

    public function update(Request $request, $id) {
        $data = $request->all();
       
        $item = Product::findOrFail($id);
        $data['slug'] = Str::slug($request->name);

        $item->update($data);

        return redirect()->route('dashboard-products')->with('success', 'Success! Product Berhasil Di Edit!');
    }
}
