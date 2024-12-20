<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $allProducts = Product::all();
        $newProducts = Product::orderBy('price', 'desc')->take(10)->get();
        $categories = Category::all();

        return view('user.products.home', compact('allProducts', 'newProducts', 'categories'));
    }

    public function filterByCategory($category_id)
    {
        $categories = Category::all();
        $allProducts = Product::where('category_id', $category_id)->get();
        $newProducts = Product::orderBy('price', 'desc')->take(10)->get();

        return view('user.products.home', compact('allProducts', 'newProducts', 'categories'));
    }
    public function search(Request $request)
    {
        $categories = Category::all();
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")->get();
        
        return view('user.partials.search', ['products' => $products, 'categories' => $categories]);
    }
    
    public function shop()
    {
        $allProducts = Product::paginate(9);
        $newProducts = Product::orderBy('price', 'desc')->take(3)->get();
        $categories = Category::all();
        // $products = Product::orderBy('product_id', 'desc')->take(4)->get();
        $products = Product::paginate(4);
        return view('shop', compact('allProducts', 'newProducts', 'categories', 'products'));
    }
    public function detailProduct($product_id){
        $product = Product::where('product_id', $product_id)->first();
        return view('admin.products.detail-product')->with(['product' => $product]);
    }
}
