<!DOCTYPE html>
<html lang="en">

<head>
	<title> Example kenh14 </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="public/css/style.css">
</head>

<body>
	<div class="bo">
		<div class="header mb-3">
			<div class="container">
				<div class="row">
					<div class="col-xs-3"></div>
					<div class="col-xs-5 text-xs-center">
						<h3 class="kenh14" style="font-size: 50px; padding: 15px 0; color: #9F1D21;">KENH14</h3>
					</div>

					<div class="col-xs-4 text-xs-right" style="padding-top:30px;">
						<?php
						if (is_login()) {
							$user_fullname = get_info_user('fullname');
							echo "<p class=''>Xin chào <b>{$user_fullname}</b>(<a href='?page=logout'>Thoát</a>)</p>";
						}
						?>
					</div>

				</div>
			</div>

			<nav class="navbar navbar-light bg-faded">
				<div class="container">
					<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
					</button>
					<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
						<a class="navbar-brand logo" href="#"><img src="https://kenh14cdn.com/web_images/kenh14-wc-2019-yellow.gif" alt=""></a>
						<ul class="nav navbar-nav menuphai float-xs-right">
							<li class="nav-item">
								<a class="nav-link" href="?page=home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=product">Product</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=admin">Admin</a>
							</li>
						</ul>
					</div>
				</div> <!-- het container -->

			</nav>
		</div> <!-- het header -->