<?php
$menu = '';
# send minibrowser to simple http if this file accessed through https
# by delete port number in http_host index on _server variable
$HTTP_HOST = $_SERVER['HTTP_HOST'];
$HTTP_HOST = str_replace(':443','',$HTTP_HOST);
# for debugging
#print "<!--";
#print_r($_SERVER);
#print "-->";
#Variable for dynamic linking
$APP_URL  = "http://".$HTTP_HOST.dirname($_SERVER['PHP_SELF']);
$THIS_URL = "http://".$HTTP_HOST.$_SERVER['PHP_SELF'];
if (isset($_GET['xml_file'])){#if xml filename given, echo the xml with some change.
	$xml_file = getcwd().'/'.$_GET['xml_file'];
	$xml_data = file_get_contents($xml_file);
	#replace the url for dynamic linking
	#10.110.22.8 is old url.
	$xml_data = str_replace('http://10.110.22.8/minibrowser/regression',$APP_URL,$xml_data);
	##
	#ADD YOUR OWN XML VARIABLE HERE
	##
	echo $xml_data;
} else {
	foreach( glob('*',GLOB_ONLYDIR) as $fn){
		$fn_name = ucfirst(str_replace('_',' ',$fn)).' Test';#Name to show in menuitem
		$fn_url = '';#set url as empty 
		foreach (scandir(getcwd()."/".$fn) as $sub_fn){#check every file
			$fn_match = $fn.'main';#filename to match: foldername+'main'
			if($sub_fn == $fn_match.'.php'){
				$fn_url =  $APP_URL."/".$fn.'/'.$sub_fn;
				break;#first priority to find inside subfolder
			} elseif($sub_fn == $fn_match.'.xml') {
				$fn_url =  $THIS_URL.'?xml_file='.urlencode($fn.'/'.$sub_fn);
				break;#second priority to find inside subfolder
			}
		}	
		if($fn_url != ''){#check if url still empty
			$menu .= '<MenuItem><br/>
			<Name>'.$fn_name.'</Name>
			<URL>'.$fn_url.'</URL>
			</MenuItem>';#add to menu object
		}
	
	}
	#print the Menu
	$title = 'Regression Menu'; 
	echo '<?xml version="1.0" encoding="UTF-8"?>
	<SnomIPPhoneMenu track="no">
	<Title>'.$title.'</Title>
	'.$menu.'
	</SnomIPPhoneMenu>';
}
?>
