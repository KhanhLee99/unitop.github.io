<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-xs-4">
            <h1>Đăng kí</h1>
            {!! Form::open(['url' => 'user/add', 'method'=>'POST']) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Tên đăng nhập') !!}
                    {!! Form::text('username', '', ['id' => 'username','class' => 'form-control', 'placeholder' => 'Username']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', '', ['id' => 'email' , 'class' => 'form-control', 'placeholder' => 'Email']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Mật khẩu') !!}
                    {!! Form::password('password', ['class' => 'form-control' , 'id' => 'password' , 'placeholder' => 'Password']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('city', 'Thành phố') !!}
                    {!! Form::select('city', [0 => 'Chọn', 1 => 'Hà Nội', 2 => 'Đà Nẵng', 3 => 'TP.HCM'], 2, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('gender', 'Giới tính') !!}
                    <div class="form-check">
                        {!! Form::radio('gender', 'male', 'checked', ['class' => 'form-check-input', 'id' => 'male']) !!}
                        {!! Form::label('male', 'Nam', ['class' => 'form-check-label']) !!}
                    </div> 
                    <div class="form-check">
                        {!! Form::radio('gender', 'female', '', ['class' => 'form-check-input', 'id' => 'female']) !!}
                        {!! Form::label('female', 'Nữ', ['class' => 'form-check-label']) !!}
                    </div> 
                </div>

                <div class="form-group">
                    {!! Form::label('skills', 'Kỹ năng') !!}
                    <div class="form-check">
                        {!! Form::checkbox('skills', 'html', 'checked', ['class' => 'form-check-input', 'id' => 'html']) !!}
                        {!! Form::label('html', 'HTML', ['class' => 'form-check-label']) !!}
                    </div> 
                    <div class="form-check">
                        {!! Form::checkbox('skills', 'css', '', ['class' => 'form-check-input', 'id' => 'css']) !!}
                        {!! Form::label('css', 'CSS', ['class' => 'form-check-label']) !!}
                    </div> 
                    <div class="form-check">
                        {!! Form::checkbox('skills', 'php', 'checked', ['class' => 'form-check-input', 'id' => 'php']) !!}
                        {!! Form::label('php', 'PHP', ['class' => 'form-check-label']) !!}
                    </div> 
                </div>

                <div class="form-group">
                    {!! Form::label('birth', 'Ngày sinh') !!}
                    {!! Form::date('birth', '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label(' intro', 'Giới thiệu bản thân') !!}
                    {!! Form::textarea('intro', '', ['class' => 'form-control', 'id' => 'intro']) !!}
                </div>
               
                <div class="form-group">
                    {!! Form::submit('Đăng kí', ['name' => 'btn-reg' , 'class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

</body>

</html>
