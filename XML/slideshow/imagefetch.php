<?php
	$dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
?>
<SnomIPPhoneImageFile track="no">
	<LocationX>0</LocationX>
	<LocationY>0</LocationY>
	<URL>http://172.18.200.127/tmpfs/auto.jpg</URL>
	<fetch mil="500"><?php echo $dir. "/imagefetch.php"; ?></fetch>
</SnomIPPhoneImageFile>