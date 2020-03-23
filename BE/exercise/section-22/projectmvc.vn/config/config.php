<?php
ob_start();
session_start();
/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */

$config['base_url'] = "http://localhost/unitop/BE/exercise/section-22/projectmvc.vn/";


$config['default_module'] = 'users';
$config['default_controller'] = 'index';
$config['default_action'] = 'paging';












