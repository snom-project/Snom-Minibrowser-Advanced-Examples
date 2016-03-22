<?php
	$image = $_REQUEST["img"];
	if ($image == "") $image = 0;
	$dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$location =  $dir . "/images/" . $image . ".jpg";

		$image = $image + 1;
	
	# loop
	$location_check =  $dir . "/images/" . $image . ".jpg";
	$file_headers = @get_headers($location_check);
	if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
		$image = 0;
	}
	
?>
<SnomIPPhoneImageFile track="no">
	<LocationX>0</LocationX>
	<LocationY>0</LocationY>
	<URL><?php echo $location; ?></URL>
	<fetch mil="3000"><?php echo $dir. "/slideshow2.php?img=" . $image;?></fetch>
</SnomIPPhoneImageFile>
