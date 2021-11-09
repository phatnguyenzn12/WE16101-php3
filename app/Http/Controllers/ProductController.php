<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('price', '>', 5000)->get();
        // select * from products where price > 5000
        return view('products.index', compact('products'));
    }

    public function remove($id){
        Product::destroy($id);
        return redirect(route('product.index'));
    }
}
