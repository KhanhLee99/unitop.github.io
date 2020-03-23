<?php
session_start();
ob_start();
require 'data/user.php';
require 'lib/user.php';
require 'lib/template.php';
require 'lib/validation.php';

?>


<?php

	$page = !empty($_GET['page'])?$_GET['page']:'home';
	$path = "pages/{$page}.php";
	
	if(isset($_COOKIE['is_login'])){
		$_SESSION['is_login'] = true;
		$_SESSION['user_login'] = $_COOKIE['user_login'];
	}

	if(file_exists($path)){
		require $path;
	}
	if(!is_login() && $page != 'login'){
		header('location: ?page=login');
	}

	
	
?>

<div class="container mt-3">
	<hr>
</div>

