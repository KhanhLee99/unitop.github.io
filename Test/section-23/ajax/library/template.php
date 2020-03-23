<?php

function get_header($module_name = "") {
    if (!empty($module_name)) {
        $path_header = "include/header_{$module_name}.php";
    } else {
        $path_header = "include/header.php";
    }
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "Không tồn tại đường dẫn {$path_header}";
    }
}

;

function get_footer($module_name = "") {
    if (!empty($module_name)) {
        $path_footer = "include/footer_{$module_name}.php";
    } else {
        $path_footer = "include/footer.php";
    }
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "Không tồn tại đường dẫn {$path_footer}";
    }
}

function get_sidebar($module_name = "") {
    if (!empty($module_name)) {
        $path_sidebar = "include/sidebar_{$module_name}.php";
    } else {
        $path_sidebar = "include/sidebar.php";
    }
    if (file_exists($path_sidebar)) {
        require $path_sidebar;
    } else {
        echo "Không tồn tại đường dẫn {$path_sidebar}";
    }
}
