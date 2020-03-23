<?php

$list_goods = array(
  1 => array(
      'id' => 1,
      'image' => "https://vn-test-11.slatic.net/p/9e93e5daf7778350fd3a6d1cb1ba5f54.jpg_200x200q80.jpg_.webp",
      'title' => 'Đồng hồ đeo tay thông minh',
      'prize' => '$ 799.000'
  )  ,
    2 => array(
      'id' => 2,
      'image' => "https://vn-test-11.slatic.net/p/3cffc02c3ac599ebd91103db967cd43a.jpg_200x200q80.jpg_.webp",
      'title' => 'Đồng hồ đeo tay thông minh',
      'prize' => '$ 799.000'
  )  ,
    3 => array(
      'id' => 3,
      'image' => "https://vn-test-11.slatic.net/p/cbb44eaa93e3f877f5ba06a3cd888fc5.jpg_200x200q80.jpg_.webp",
      'title' => 'Đồng hồ đeo tay thông minh',
      'prize' => '$ 799.000'
  )  ,
    4 => array(
      'id' => 4,
      'image' => "https://vn-test-11.slatic.net/p/e919d798fa14e8736c7983141082632e.jpg_200x200q80.jpg_.webp",
      'title' => 'Đồng hồ đeo tay thông minh',
      'prize' => '$ 799.000'
  )  ,
    5 => array(
      'id' => 5,
      'image' => "https://vn-test-11.slatic.net/p/cbe68a2a365a17b5da6e7a53db78a320.jpg_200x200q80.jpg_.webp",
      'title' => 'Đồng hồ đeo tay thông minh',
      'prize' => '$ 799.000'
  )  ,
);
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lazada</title>
	<style>
		.small-block{
			float: left;
			margin-right: 8px;
		}
	</style>
</head>
<body style="padding: 0;margin: 0; background: #eff0f5;">
    <?php foreach($list_goods as $item){ ?>
	<div class="container" style="width: 990px; margin-left: 50px;">
		<div class="small-block" style="background-color: white; width: 190px; height: 270px; ">
		<a href="" style="text-decoration: none; font-family: tahoma; color: black;">
			<img src=" <?php echo $item['image'] ?>" alt="" class="small-image" style="width: 100%;">
			<p class="title" style="font-size: 12px; padding: 0 5px; margin-top: 6px;">[HÀNG CHÍNH HÃNG - ĐỘC QUYỀN LAZADA] Vòng đeo tay ...</p>
			<p class="prize" style="color: #f57224; font-size: 18px; padding: 0 5px; margin-top: -5px;">$ 799.000</p>

		</a></div>
		
    <?php } ?>	
	</div>
	
</body>
</html>
