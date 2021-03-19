<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $requset){
        // $requset->session()->put('username','khanhle');
        // $requset->session()->put('login',true);
        session(['username' => 'khanhle']);
    }

    function add_flash(Request $request){
        $request -> session() -> flash('status', 'Bạn đã thêm sản phẩm thành công');
    }

    function delete(Request $request){
        // $request -> session() -> forget('username');
        $request -> session() -> flush();
    }

    

    function show(Request $requset){
        // return  $requset->session()->all();
        // if($requset -> session() -> has('username')){
        //     return  $requset->session()->get('username');
        // }
        // return $requset -> session()  -> get('status');
        return session('username');
    }
}
