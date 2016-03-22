<SnomIPPhoneText track="no">
	<Title>Menu</Title>
	<Text><?php echo date("l, F d, Y h:i:s" ,time()); ?></Text>
	<fetch mil="1000">http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]; ?></fetch>
</SnomIPPhoneText>