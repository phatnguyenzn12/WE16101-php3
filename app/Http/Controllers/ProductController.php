<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        
        $column_names = [
            'name' => 'Tên sản phẩm',
            'price' => 'Giá',
            'star' => "Đánh giá",
            'views' => 'Lượt xem'
        ];

        $order_by = [
            'asc' => 'Tăng dần',
            'desc' => 'Giảm dần'
        ];


        $keyword = $request->has('keyword') ? $request->keyword : "";
        $cate_id = $request->has('cate_id') ? $request->cate_id : "";
        $rq_order_by = $request->has('order_by') ? $request->order_by : 'asc';
        $rq_column_names = $request->has('column_names') ? $request->column_names : "name";

        // dd($keyword, $cate_id, $rq_column_names, $rq_order_by);
        $query = Product::where('name', 'like', "%$keyword%");
        if($rq_order_by == 'asc'){
            $query->orderBy($rq_column_names);
        }else{
            $query->orderByDesc($rq_column_names);
        }

        if(!empty($cate_id)){
            $query->where('cate_id', $cate_id);
        }
        $products = $query->get();
        $categories = Category::all();
        $searchData = $request->input();
        return view('products.index', compact('products', 'categories', 'column_names', 'order_by', 'searchData'));
    }

    public function remove($id){
        Product::destroy($id);
        return redirect(route('product.index'));
    }
}
