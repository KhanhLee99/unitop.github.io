<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCat;

class AdminProductController extends Controller
{
    //
    function index(){
        return view('admin.product.index');
    }

    function add(){
        $cats = ProductCat::all();
        $total_cats = $cats ->count();
        return view('admin.product.add', compact('cats', 'total_cats'));
    }

    function store(Request $request){
        if($request->input('btn-add')){
           return redirect('admin/products')->with('status', 'Bạn đã thêm sản phẩm mới thành công');
        }
    }
}
