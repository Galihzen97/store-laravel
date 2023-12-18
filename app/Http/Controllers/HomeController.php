<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $categories = Category::take(8)->get();
        $products = Product::with(['galleries'])
        ->whereHas('user', function ($query) {
        $query->where('status', '!=', 0)
        ->whereNotNull('status'); })
        ->take(8)
        ->latest()
        ->get();
        return view('pages.home',[
            'categories' => $categories,
            'products' => $products

        ]);
    }
}
