<?php
$account = array(
    'user' => 'admin',
    'password' => 'admin123'
);
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "<b>Please enter infomation</b>";
    } else if (empty($_POST['password'])) {
        echo "<b>Please enter infomation</b>";
    }
    else if($_POST['username'] == $account['user'] && $_POST['password'] == $account['password']){
        foreach ($account as $key => $item){
            echo $key." : ".$item."<br>";
        }
    }
    else{
        echo "Nhập sai tài khoản";
    }
}
?>

<html lang="en"><head>
        <title> Form </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <script type="text/javascript" src="vendor/bootstrap.js"></script>
        <script type="text/javascript" src="1.js"></script>
        <link rel="stylesheet" href="vendor/bootstrap.css">
        <link rel="stylesheet" href="vendor/font-awesome.css">
        <link rel="stylesheet" href="1.css">
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-xs-6 push-xs-3">
                    <form action="" method="POST">
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="username">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
                        </fieldset>
                        <input type="submit" class="btn btn-info" name="btn_login" value="Login">                     
                    </form>
                </div>
            </div>
        </div>
    </body>