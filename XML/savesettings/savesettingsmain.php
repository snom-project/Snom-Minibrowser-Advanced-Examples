<?php
	$dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
?>
<SnomIPPhoneMenu>
<Title>Settings</Title>
<MenuItem>
<Name>Settings change 127.0.0.1</Name>
<URL>http://127.0.0.1/dummy.htm?settings=save&user_idle_text1=aaaa</URL>
</MenuItem>
<MenuItem>
<Name>Settings change https://127.0.0.1</Name>
<URL>https://127.0.0.1/dummy.htm?settings=save&user_idle_text1=httpsaaaa</URL>
</MenuItem>
<MenuItem>
<Name>Settings Change Confirmation</Name>
<URL>http://127.0.0.1/minibrowser.htm?url=<?php echo $dir. "/hello.xmlsettings=save&user_idle_text2=8888";?></URL>
</MenuItem>
<MenuItem>
<Name>Settings Change phoneIP</Name>
<URL>http://127.0.0.1/minibrowser.htm?url=<?php echo $dir. "/hello.xmlsettings=save&user_idle_text2=9999";?></URL>
</MenuItem>
<MenuItem>
<Name>Hello</Name>
<URL><?php echo $dir. "/hello.xml";?></URL>
</MenuItem>
</SnomIPPhoneMenu>
