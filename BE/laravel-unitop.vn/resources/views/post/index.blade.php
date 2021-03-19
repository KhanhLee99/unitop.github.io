<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Danh sách bài viết</title>
</head>

<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <h1>Danh sách bài viết</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <b>Tiêu đề: </b><span>{{ $post->title }}</span> <br>
                <b>Nội dung: </b><span>{!! $post->content !!}</span> <br>
                <img src="{{ $post->thumbnail }}" alt=""> <br>
            </li>
        @endforeach
    </ul>
    {{-- {{$posts->links()}} --}}
    {{$posts->appends(['sort' => 'votes'])->links()}}
</body>

</html>
