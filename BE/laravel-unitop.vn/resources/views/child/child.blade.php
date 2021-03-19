@extends('layouts.app')

@section('title', 'Trang con')



@section('content')
    <p>Nội dung trang con</p>
    <!-- if else -->
    @if($data %2 ==0)
        <p>{{$data}}: số chẵn</p>
    @else
        <p>{{$data}}: số lẻ</p>
    @endif
    <!-- for -->
    @for($i=0; $i <= $data; $i++)
        <p>Giá trị hiện tại của i là {{$i}}</p>
    @endfor
    <!-- foreach -->
    @foreach($users as $user)
        <p>{{$user['name']}}</p>
    @endforeach
    <!-- nhúng php -->
    @php
        if(!empty($users)){
            foreach($users as $user){
                echo "<p>ten: ".$user['name']."</p>";
            }
        }
    @endphp
    {{-- Goị thêm view vào 1 view có sẵn --}}
    @include('inc.comment', ['noidung'=> 'Đây là nội dung'])

    {{-- isset --}}
    @isset($post_title)
        <p>{{$post_title}}</p>
    @endisset

    {{-- empty --}}
    @empty($product_title)
        <p>empty</p>
    @endempty
@endsection


@section('sidebar')
    @parent
    <p>Sidebar trang con</p>
@endsection