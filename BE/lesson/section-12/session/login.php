<?php
    session_start();
    ob_start();

    $_SESSION['is_login'] = true;

    header('location: index.php');