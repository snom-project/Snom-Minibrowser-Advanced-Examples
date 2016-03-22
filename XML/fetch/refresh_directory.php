<SnomIPPhoneDirectory track="no">
	<Title>Menu</Title>
	<DirectoryEntry>
		<Name><?php echo date("h:i:s" ,time()); ?></Name>
		<Telephone>http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]; ?></Telephone>
	</DirectoryEntry>
	<fetch mil="1000">http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"]; ?></fetch>
</SnomIPPhoneDirectory>