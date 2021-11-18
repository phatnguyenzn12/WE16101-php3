<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($id){
        $cate = Category::find($id);
        $cate->load('products');
        return view('categories.detail', compact('cate'));
    }
}
