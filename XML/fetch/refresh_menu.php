<SnomIPPhoneMenu track="no">
	<Title>Menu</Title>
	<MenuItem>
		<Name><?php echo date("h:i:s" ,time()); ?></Name>
		<URL>http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]; ?></URL>
	</MenuItem>
	<fetch mil="1000">http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]; ?></fetch>
</SnomIPPhoneMenu>