<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    //
    function index()
    {
        return view('cart.index');
    }
    function add($id)
    {
        // Cart::destroy();
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);

        return redirect('cart');
    }
    function delete($rowId){
        Cart::remove($rowId);
        return redirect('cart');
    }

    function destroy(){
        Cart::destroy();
        return redirect('cart');
    }
    function update(Request $request){
        $data = $request->get('qty');
        foreach($data as $k=>$v){
            Cart::update($k, $v);
        }
        return redirect('cart');
    }
}
