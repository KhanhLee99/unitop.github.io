<?php
//    echo "<pre>";
//    print_r($_SERVER);
//    echo "</pre>";
    
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "{$_POST['username']} - {$_POST['password']}";
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
                <div class="col-xs-6">
                    <form action="login.php" method="POST">
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput">User</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="username">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
                        </fieldset>
                        <input type="submit" class="btn btn-info" name="btn_login" value="Logine">
                        <button type="submit" class="btn btn-info" name="btn_login" value="Login">Login</button>
                    </form>


                </div>
                
                 <div class="col-xs-6">
                    <form action="" method="POST">
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput">User</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="username">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
                        </fieldset>
                        <input type="submit" class="btn btn-danger" name="btn_login" value="Logine">
                        <button type="submit" class="btn btn-danger" name="btn_login" value="Login">Login</button>
                    </form>


                </div>
            </div>
        </div>
    </body>
