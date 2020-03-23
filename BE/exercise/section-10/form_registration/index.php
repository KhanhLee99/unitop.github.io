<?php
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "<b>Please enter infomation</b>";
    } else if (empty($_POST['password'])) {
        echo "<b>Please enter infomation</b>";
    }
    else if (empty($_POST['fullname'])) {
        echo "<b>Please enter infomation</b>";
    }
    else if (empty($_POST['mail'])) {
        echo "<b>Please enter infomation</b>";
    }
    else if (empty($_POST['phone'])) {
        echo "<b>Please enter infomation</b>";
    }
    else if (empty($_POST['gender'])) {
        echo "<b>Please enter infomation</b>";
    }
    else{
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        
        echo $fullname."<br>";
        echo $username."<br>";
        echo $password."<br>";
        echo $mail."<br>";
        echo $phone."<br>";
        echo $gender."<br>";
        

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
                    <h1 class="text-xs-center display-3" style="padding: 20px 0px;"> Registration </h1> 
                    <form action="" method="POST">
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput0">Fullname</label>
                            <input type="text" class="form-control" id="formGroupExampleInput0" placeholder="fullname" name="fullname">
                        </fieldset>
                        <fieldset class="form-group1">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="username" name="username">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput3">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="mail" name="mail">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput4">Phone</label>
                            <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="phone" name="phone">
                        </fieldset>
                        <p>Gender</p>
                        <fieldset class="form-group">
                            <input type="radio" name="gender" id="formGroupExampleInput5" value="male">
                            <label for="formGroupExampleInput5">Male</label>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <input type="radio" name="gender" id="formGroupExampleInput6" value="female">
                            <label for="formGroupExampleInput6">Female</label>
                        </fieldset>


                        <div class="col-xs-6 push-xs-3">
                            <input type="submit" class="btn btn-outline-info btn-block btn-lg " name="btn_login" value="Register"><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

