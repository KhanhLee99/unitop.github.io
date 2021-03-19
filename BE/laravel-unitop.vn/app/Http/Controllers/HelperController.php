<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    function url(){
        // 1. Tạo đường dẫn cơ bản
        $url = url('login');

        // 2. Tạo url theo tên route
        $url = route('post.show');

        // 3. Tạo đường dẫn qua action
        $url = action('PostController@store');

        // 4. Lấy đường dẫn của trang hiện tại
        $url = url() -> current();
        echo $url;
    }

    function string(){
        $str_1 = 'Unitop.vn Laravel Pro';

        // 1. Tính độ dài của chuỗi
            // echo Str::length($str_1); //21

        // 2. In thường, in hoa một chuỗi
            // echo Str::lower($str_1); //unitop.vn laravel pro
            // echo Str::upper($str_1); //UNITOP.VN LARAVEL PRO

        // 3.Tạo một chuỗi ngẫu nhiên
            // echo Str::random(10);

        // 4. Loại bỏ khoảng trắng dư thừa
            // $str_2 = '       Le          Viet            Khanh       ';
            // echo Str::of($str_2)->trim();  //Le Viet Khanh

        // 5. Lấy chuỗi con trong 1 chuỗi
            // echo Str::of($str_1)->substr(9); //Laravel Pro
            // echo Str::of($str_1)->substr(9,8); //Laravel

        // 6. Tạo slug làm link thân thiện
            // echo Str::slug($str_1); //unitopvn-laravel-pro

        // 7. Nỗi chuỗi vào cuối chuỗi cho trước
            // $str_3 = ' Học lập trình web đi làm';
            // echo Str::of($str_1)->append($str_3); //Unitop.vn Laravel Pro Học lập trình web đi làm

        // 8. Tìm kiếm và thay thế trong chuỗi
            // echo Str::of($str_1)->replace('Laravel Pro','PHP Master');

        // 9. Cắt 1 chuỗi vs số kí tự cho trc
            // echo Str::of($str_1) -> limit(19); //Unitop.vn Laravel P...

        // 10. Ktra chứa chuỗi con
            echo Str::contains($str_1, 'Unitop'); //true
            echo Str::contains($str_1, 'unitop'); //false
    }
}
