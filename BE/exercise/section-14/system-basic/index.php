<?php
require 'config/email.php';
require 'data/sendmail.php';
require 'lib/template.php';
require 'data/news.php';
require 'data/product.php';
get_header();
?>
		<?php
		$page = isset($_GET['page']) ? $_GET['page'] : 'home';
		$path = "pages/{$page}.php";
		if (file_exists($path)) {
			require $path;
		}
		else{
			require 'inc/404.php';
		}

		?>
		
<?php
get_footer();
?>