<?php
$APP_URL = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$THIS_URL = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if(isset($_GET['p'])){
	echo '<?xml version="1.0" encoding="UTF-8"?>
	<SnomIPPhoneImageFile>
	<LocationX>0</LocationX>
	<LocationY>0</LocationY>
	<URL>'.$APP_URL.'/'.$_GET['p'].'</URL>
	</SnomIPPhoneImageFile>';
} else {
	$pics = glob('*.jpeg');
	$menu = '';
	foreach($pics as $p){
		$menu .= '<MenuItem><br/>
		<Name>'.$p.'</Name>
		<URL>'.$THIS_URL.'?p='.$p.'</URL>
		</MenuItem>';
	}
	echo '<?xml version="1.0" encoding="UTF-8"?>
	<SnomIPPhoneMenu>
	<Title>Menu</Title>
	'.$menu.'
	</SnomIPPhoneMenu>';
}


?>
