<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    
    function show($id){
        $product = DB::table('products')->where('id', $id) -> first();
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        
        $name = $product->name;
        $content = $product->content;
        $price = $product->price;
        return view('admin.product.show', compact('id', 'name', 'content', 'price'));
    }

    function add(){
        DB::table('products')->insert([
            ['name' => 'Nokia', 'content' => 'Nội dung Nokia', 'price' => 15000, 'user_id' => 2],
            ['name' => 'HTC', 'content' => 'Nội dung HTC', 'price' => 105000, 'user_id' => 4],
            ['name' => 'Asus', 'content' => 'Nội dung ASUS', 'price' => 45000, 'user_id' => 4],
        ]);
        return view('admin.product.add');
    }

    function update($id){
        DB::table('products') -> where('id', $id)->update([
            'name' => 'HTC', 'content' => 'Nội dung HTC'
        ]);
    }

    function delete($id){
        DB::table('products')->where('id', $id)->delete();
    }
        
    

}
