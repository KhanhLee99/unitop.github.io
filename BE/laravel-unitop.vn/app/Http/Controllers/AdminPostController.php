<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPostController extends Controller
{
    //
    function add(){
        // return view('admin.post.add');
        DB::table('posts') -> insert([
            ['title' => 'post2', 'content' => 'content2', 'user_id' => 2],
            ['title' => 'post3', 'content' => 'content3', 'user_id' => 2]
        ]);
    }

    function show(){
        // return view('admin.post.show');
        $posts1 = DB::table('posts') -> get();
        foreach($posts1 as $post){
            echo $post->title;
            echo '<br>';
        }
        $post = DB::table('posts') -> select('title', 'content') -> first();
        echo $post->content;

        $post_1 = DB::table('posts') -> where('id', 2) -> first();
        echo "<pre>";
        print_r($post_1);
        echo "</pre>";

        $post_2 = DB::table('posts') -> find(3);
        echo "<pre>";
        print_r($post_2);
        echo "</pre>";

        $num_post = DB::table('posts')->count();
        echo $num_post. "<br>";

        $num_post_1 = DB::table('posts')->where('title','post1')->count();
        echo $num_post_1. "<br>";

        echo DB::table('posts')->max('id') . '<br>';
        echo DB::table('posts')->min('id') . '<br>';
        echo DB::table('posts')->avg('id') . '<br>';

        $post_join = DB::table('posts') -> join('users','users.id','=','posts.user_id') ->select('users.name','posts.title')->get();
        echo "<pre>";
        print_r($post_join);
        echo "</pre>";

        $posts = DB::table('posts')->where('title','Like',"%iphone%")->get();
        echo "<pre>";
        print_r($posts);
        echo "</pre>";

        $post_3 = DB::table('posts') -> where('id','<' ,4) -> get();
        echo "<pre>";
        print_r($post_3);
        echo "</pre>";

        //AND
        $post_and = DB::table('posts')->where([
            ['title','LIKE','%iphone%'],
            ['content','LIKE','%content%'],
        ])->get();
        echo "<pre>";
        print_r($post_and);
        echo "</pre>";

        //OR
        $post_or = DB::table('posts')->where('id','<', 3)->orWhere('title','LIKE','%iphone%')->get();
        echo "<pre>";
        print_r($post_or);
        echo "</pre>";

        //GROUP BY, ORDER BY
        $posts_group_by = DB::table('posts')->selectRaw("COUNT('id') as number_posts, user_id")->groupBy('user_id')->orderBy('number_posts','desc')->get();
        echo "<pre>";
        print_r($posts_group_by);
        echo "</pre>";

        //LIMIT, OFFSET
        $posts_limit = DB::table('posts')->limit(3)->get();
        echo "<pre>";
        print_r($posts_limit);
        echo "</pre>";

        $posts_limit_offset = DB::table('posts')->offset(2)->limit(3)->get();
        echo "<pre>";
        print_r($posts_limit_offset);
        echo "</pre>";
    }

    function update($id){
        DB::table('posts')->where('id', $id)->update([
            'title' => 'Samsung 11 Pro MAX',
            'content'=>  'Giới thiệu SS11 Pro MAX'
        ]);
    }

    function delete($id){
        DB::table('posts')->where('id', $id)->delete();
    }
}
