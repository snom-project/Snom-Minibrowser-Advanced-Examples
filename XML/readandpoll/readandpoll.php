<?php
	$dir = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
?>
<SnomIPPhoneText>
  <Title>User Login</Title>
  <Text>Login OK</Text>
<?php
if ($_GET['settingTocheck'] == "changed") {
echo "<fetch mil=\"0\">https://127.0.0.1/minibrowser.htm?url=192.168.2.193/snom/browser/readandpoll.php&settings=save&user_idle_text1=not%20changed&timer=0</fetch>";
} else {
	echo "<fetch mil=\"0\">https://127.0.0.1/command.htm?key=CANCEL</fetch>";
}
?>
</SnomIPPhoneText>

