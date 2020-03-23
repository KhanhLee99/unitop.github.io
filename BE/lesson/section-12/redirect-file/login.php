<?php 
require 'lib/validation.php';

if(isset($_POST['btn_Re'])){
	$error = array();

	if(empty($_POST['username'])){
		$error['username'] = "Ko dc de username trong";
	}	
	else{
		$username = $_POST['username'];
	}

	if(empty($_POST['password'])){
		$error['password'] = "Ko dc de password trong";
	}	
	else{
		$password = $_POST['password'];
	}

	$info = array('username' => 'admin123' , 'password' => 'Admin123' );

	if ($username == $info['username'] && $password == $info['password']) {
		header("location: index.php");
	}
	else{
		echo "Ko ton tai";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOG IN</title>
</head>
<body>
	<h1 style="font-weight: bold;">WELCOME !!!</h1>
	<form action="" method="POST">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo get_value('username') ?>">
<br><p style="color: red;"><?php echo error_form('username') ?></p> <br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="">
<br><p style="color: red;"><?php echo error_form('password') ?> </p><br>
		<input type="submit" name="btn_Re" value="Dang Nhap">
	</form>
</body>
</html>