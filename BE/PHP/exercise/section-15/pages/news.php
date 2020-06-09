<?php
if (isset($_POST['btn_post'])) {
	$error =  array();
	if (empty($_POST['title_post'])) {
		$error['title_post'] = 'Không được để trống tiêu đề bài viết';
	} else {
		$title_post = $_POST['title_post'];
	}
	if (empty($_POST['short_post'])) {
		$error['short_post'] = 'Không được để trống mô tả ngắn';
	} else {
		$short_post = $_POST['short_post'];
	}
	if (empty($_POST['detail_post'])) {
		$error['detail_post'] = 'Không được để trống chi tiết bài viết';
	} else {
		$detail_post = $_POST['detail_post'];
	}

	//Kiem tra file anh
	if (isset($_FILES['image'])) {
		$error_image = array();

		$upload_dir_1 = 'public/images/';
		$upload_file_1 = $upload_dir_1 . $_FILES['image']['name'];

		$type_allow = array('png', 'jpg', 'gif', 'jpeg');

		$type = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		if (!in_array(strtolower($type), $type_allow)) {
			$error_image['type'] = "Anh phai co duoi la png, jpg, gif, jpeg";
		} elseif ($_FILES['image']['size'] > 29000000) {
			$error_image['size'] = "Size qua tai";
		}

		if (file_exists($upload_file_1)) {
			$file_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
			$file_name_new = $file_name.' - Copy.';
			$upload_file_1 = $upload_dir_1 . $file_name_new . $type;
	
			$k = 1;
			while (file_exists($upload_file_1)) {
				$file_name_new = $file_name.' - Copy';
				$k++;
				$file_name_new .= "({$k}).";
				$upload_file_1 = $upload_dir_1 . $file_name_new . $type;
			}
		//	echo $upload_file;
		}

		if (empty($error_image) && empty($error)) {
			if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_file_1)) {
				$image = $upload_file_1;
			} else {
				$image = '';
			}
		}
	}

	//Kiem tra file avatar
	if (isset($_FILES['file'])) {
		$error_file = array();

		$upload_dir_2 = 'uploads/';
		$upload_file_2 = $upload_dir_2 . $_FILES['file']['name'];

		$type_allow = array('png', 'jpg', 'gif', 'jpeg');

		$type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		if (!in_array(strtolower($type), $type_allow)) {
			$error_file['type'] = "Anh phai co duoi la png, jpg, gif, jpeg";
		} elseif ($_FILES['file']['size'] > 29000000) {
			$error_file['size'] = "Size qua tai";
		}

		if (file_exists($upload_file_2)) {
			$file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
			$file_name_new = $file_name.' - Copy.';
			$upload_file_2 = $upload_dir_2 . $file_name_new . $type;
	
			$k = 1;
			while (file_exists($upload_file_2)) {
				$file_name_new = $file_name.' - Copy';
				$k++;
				$file_name_new .= "({$k}).";
				$upload_file_2 = $upload_dir_2 . $file_name_new . $type;
			}
		//	echo $upload_file;
		}

		if (empty($error_file) && empty($error)) {
			if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file_2)) {
				$avatar = $upload_file_2;
			} else {
				$avatar = '';
			}
		}
	}


	if (!empty($error)) {
		show_array($error);
	} 
	if (!empty($error_image)) {
		show_array($error_image);
	}
	if (!empty($error_file)) {
		show_array($error_file);
	}
}
?>
<div class='content'>
	<div class='container _1'>
		<form action='' method='POST' enctype='multipart/form-data'>
			<div class='row'>
				<div class='col-xs-12  text-xs-center mb-3'>
					<h1 class='display-3'>THIS IS NEWS</h1>
					<strong>Đăng thông tin bài viết</strong>
				</div>
				<div class='col-xs-3'>
					<label for='image' class='pt-3'>Ảnh bài viết</label>
					<input type='file' name='image'> <br> <br>
					<?php  ?>

					<label for='title_post'>Tiêu đề bài viết(*)</label> <br>
					<input type='text' id='title_post' name='title_post' value='<?php if(isset($_POST['btn_post'])){get_value('title_post');}  ?>'> <br>
					<p style='color: red;'><?php check_empty('title_post') ?></p>

					<label for='short_post' class='mt-2'>Mô tả ngắn</label> <br>
					<textarea name='short_post' id='short_post' cols='30' rows='10'></textarea> <br>
					<p style='color: red;'><?php check_empty('short_post') ?></p>

					<label for='avatar' class='pt-3'>Ảnh đại diện</label>
					<input type='file' name='file'> <br> <br>
					

				</div>
				<div class='col-xs-9'>
					<label for='detail_post'>Chi tiết bài viết(*)</label> <br>
					<textarea name='detail_post' id='detail_post' cols='30' rows='10' class='ckeditor'></textarea>
					<p style='color: red;'><?php check_empty('detail_post') ?></p>
				</div>
				<div class='col-xs-3 push-xs-5'>
					<!-- <button class=' btn btn-warning btn-block btn-lg' type='submit' name='btn_post'>Đăng bài</button> -->
					<input type='submit' name='btn_post' value='Đăng bài' class='btn btn-warning btn-block btn-lg'>
				</div>
			</div> <!-- het row -->
		</form> <!-- het form -->
	</div> <!-- het container -->

	<!-- ------------------------------------ -->
	<?php
	if (isset($_POST['btn_post'])) {
		if (empty($error)) {

			echo "<div class='row mt-3'>";
			echo "<div class='col-xs-5 push-xs-2'>";
			echo "<div class='card-deck'>";
			echo "<div class='card'>";
			if (empty($error_image)) {
				echo "<img class='card-img-top img-fluid mb-1' src= '{$image}'>";
			}
			
			if (empty($error_file)) {				
				echo "<div class='row mb-2'>";
				echo "<div class = 'col-xs-1' style = 'height: 48px; padding: 0; margin-left: 20px;'><img class='card-img-top img-fluid' src= '{$avatar}' style = 'width: 100%; height: 100%; border-radius: 50%;' ></div>";
				echo "<div class = 'col-xs-3 author_name' style = 'display: flex; align-items: center;'><b style = ''>Thu Hằng</b></div>";
				echo "</div>";
			}

			echo "<div class='card-body'>";
			echo "<h4 class='card-title'> {$title_post} </h4>";
			echo "<p class='card-text'> {$short_post} </p>";

			echo "<p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";

			echo "<button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#exampleModalLong'>Xem chi tiết</button>";

			echo "<div class='modal fade' id='exampleModalLong' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>";
			echo "<div class='modal-dialog modal-dialog-centered modal-lg' role='document'>";
			echo "<div class='modal-content'>";
			echo "<div class='modal-header'>";
			echo "<h5 class='modal-title' id='exampleModalLongTitle'>{$title_post}  </h5>";
			echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		";
			echo "</div>";
			echo "<div class='modal-body'>";
			echo " {$detail_post}";
			echo "</div>";
			echo "<div class='modal-footer'>";
			echo "<button type='button' class='btn btn-warning' data-dismiss='modal'>Close</button>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div> <!-- het row -->";

		}
	}
	?>
</div> <!-- het content -->