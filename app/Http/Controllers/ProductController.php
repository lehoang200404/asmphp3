<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        // Lấy tất cả sản phẩm
        $allProducts = Product::all();
    
        // Lấy 10 sản phẩm mới nhất
        $newProducts = Product::orderBy('created_at', 'desc')->take(10)->get();
    
        return view('user.products.home', compact('allProducts', 'newProducts'));
    } 
}

