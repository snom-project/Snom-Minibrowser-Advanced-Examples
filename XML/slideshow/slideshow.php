<?php
	$image = $_REQUEST["img"];
	if ($image == "") $image = 0;
	$dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$location =  $dir . "/images/" . $image . ".jpg";
	if ($image == 8) {
		$image = 0;
	} else {
		$image = $image + 1;
	}
?>
<SnomIPPhoneImageFile>
	<LocationX>0</LocationX>
	<LocationY>0</LocationY>
	<URL><?php echo $location; ?></URL>
	<fetch mil="5000"><?php echo $dir. "/slideshow.php?img=" . $image; ?></fetch>
</SnomIPPhoneImageFile>