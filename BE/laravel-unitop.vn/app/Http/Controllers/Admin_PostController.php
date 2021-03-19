<?php

namespace App\Http\Controllers;

use App\FeatureImages;
use App\Post;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class Admin_PostController extends Controller
{
    //
    // function index(){
    //     echo "Đây là trang danh sách bài viết";
    // }

    // function add(){
    //     echo "Đây là trang thêm bài viết";
    // }

    // function delete($id){
    //     echo "Đây là xóa bài viết: ".$id;
    // }

    // function update($id){
    //     echo "Đây là cập nhật bài viết: ".$id;
    // }

    function create(){
        Post::create([
            'title' => 'Create',
            'content' => 'Content create',
            'user_id' => 2
        ]);
    }

    function add(){
        // save()
        $post = new Post;
        $post->title="Laravel Pro-2";
        $post->content="Content LRVPOR-2";
        $post->user_id= 4;
        $post->save();

    }

    function update($id){
        //save()
        // $post = Post::find($id);
        // $post->title = "Laravel Pro-3";
        // $post->save();

        //update()
        $post = Post::where('id', $id) -> update([
            'title' => 'Update',
        ]);
    }

    function delete($id){
        $post = Post::find($id);
        $post->delete();

        // Post::where('title', 'post3')->delete();
    }

    function restore($id){
        Post::onlyTrashed()->where('id',$id)->restore();
    }

    function permanentlyDelete($id){
        Post::onlyTrashed()->where('id', $id) -> forceDelete();
    }

    function read(){
        //all
        // $posts = Post::all();
        // echo $posts . "<br>". "<br>";

        // //where
        // $posts_iphone = Post::where('title','like','%samsung%')->get();
        // echo $posts_iphone . "<br>". "<br>";
        
        // //first
        // $post = Post::where('user_id', 2) -> first();
        // echo $post->content . "<br>". "<br>";

        // //find
        // $post_find = Post::find(6);
        // echo $post_find . "<br>". "<br>";

        // //lấy ds bản ghi theo id
        // $posts_find = Post::find([3,5]);
        // echo $posts_find . "<br>". "<br>";

        // //OrderBy
        // $products_orderBy = Product::orderBy('price', 'desc') -> get();
        // echo $products_orderBy . "<br>". "<br>";

        // //GroupBy
        // $posts_group_by = Post::selectRaw("COUNT('id') as number_posts, user_id")->groupBy('user_id')->get();
        // echo $posts_group_by . "<br>". "<br>";

        // //limit, offset
        // $posts_limit_offset = Post::offset(1)-> limit(3)->get();
        // echo $posts_limit_offset . "<br>". "<br>";

        // //withTrashed
        // $posts_withTrashed = Post::withTrashed()->get();
        // echo $posts_withTrashed . "<br>". "<br>";

        // //onlyTrashed
        // $posts_onlyTrashed = Post::onlyTrashed()->get();
        // echo $posts_onlyTrashed . "<br>". "<br>";

        $img = Post::find(8) -> FeatureImages;
        echo $img . "<br>". "<br>";

        $post = FeatureImages::find(2)->Post;
        echo $post . "<br>". "<br>";

        $posts = User::find(4) -> Posts;
        echo $posts . "<br>". "<br>";

        $user = Post::find(6) -> User;
        echo $user . "<br>". "<br>";
    }
}
