<?php
require 'lib/validation.php';
require 'lib/template.php';
get_header();
?>


<?php
	$page = !empty($_GET['page'])?$_GET['page']:'home';
	$path = "pages/{$page}.php";
	if(file_exists($path)){
		require $path;
	}
	
?>

<div class="container mt-3">
	<hr>
</div>

<?php
get_footer();
?>