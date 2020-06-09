<?php
	require 'lib/validation.php';
	require 'inc/header.php';
?>
		<div class="content">
			<p>CONTENT</p>

			<p><?php 
			$data = array(1,2,3 );
			show_Array($data);
			?></p>
		</div>
<?php
	require 'inc/footer.php';
?>