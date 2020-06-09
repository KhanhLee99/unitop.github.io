<?php

session_start();
ob_start();

unset($_SESSION['is_login']);
header('location: login.php');