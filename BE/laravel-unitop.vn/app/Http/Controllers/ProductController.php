<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    function show($id)
    {
        $price = 400000;
        $color = ['red', 'green'];
        //Cách 1:
        // $data = array(
        //     'id' => $id,
        //     'price' => $price,
        //     'color' => $color
        // );
        // return view('product.show', $data);

        //Cách 2:
        return view('product.show', compact('id', 'price', 'color'));
    }
    function add()
    {
        return view('product.add');
    }
    function update($id)
    {
        return "Cập nhật sản phẩm id: " . $id;
    }
    function delete($id)
    {
        return "Xóa sản phẩm id: " . $id;
    }
}
