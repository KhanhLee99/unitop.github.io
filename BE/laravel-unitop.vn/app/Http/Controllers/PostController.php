<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query Builder
        // $posts = DB::table('posts')->simplePaginate(4);
        //ORM
        // $posts = Post::paginate(3);
        // $posts = Post::orderby('id', 'desc')->paginate(3);
        $posts = Post::where('id', '>', 9) -> orderby('id', 'desc') -> paginate(3);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Cách1
        // return redirect('post');

        //Cách2
        return redirect()->route('post.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'title' => 'required | max: 100 | min: 5',
                'content' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'max' => ':attribute có độ dài dài nhất :max ký tự',
                'min' => ':attribute có độ dài ít nhất :min ký tự'
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );

        // echo $request->input();

        $input = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            echo "Tên File: " . $file->getClientOriginalName() . "<br>";
            echo "Đuôi File: " . $file->getClientOriginalExtension() . "<br>";
            echo "Size File: " . $file->getSize() . "<br>";
            $file->move('public/uploads/images', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/images/' . $filename;
        }

        $input['user_id'] = 2;
        $input['thumbnail'] = $thumbnail;

        Post::create($input);

        // return redirect('post/');
        return redirect()->route('post.show')->with('status', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        // return "Hiển hị bài viết có id: " . $id;
        return redirect()->away('http://unitop.vn');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function  add()
    {
        return view('post.add');
    }
}
