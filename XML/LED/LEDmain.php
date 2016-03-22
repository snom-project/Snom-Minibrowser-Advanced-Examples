<?php
	$dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
?>
<SnomIPPhoneMenu>
<Title>LED Menu</Title>
<MenuItem>
<Name>LEDs ON</Name>
<URL><?php echo $dir. "/LEDON.xml"; ?></URL>
</MenuItem>
<MenuItem>
<Name>LEDs OFF</Name>
<URL><?php echo $dir. "/LEDOFF.xml"; ?></URL>
</MenuItem>
</SnomIPPhoneMenu>

