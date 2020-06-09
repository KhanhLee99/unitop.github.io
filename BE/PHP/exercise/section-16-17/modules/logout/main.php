<?php

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
setcookie('is_login', true, time() - 3600);
setcookie('user_login', $username, time() - 3600);

header('location: ?mod=login&act=main');