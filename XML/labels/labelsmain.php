<SnomIPPhoneMenu>
<Title>Faults Menu</Title>
<MenuItem>
<Name>Label::<?php echo $_REQUEST["text"]; ?></Name>
<URL>http://10.110.22.8/minibrowser/regression/labels/labelsmain.xml</URL>
</MenuItem>
<MenuItem>
<Name>only 1st line changes</Name>
</MenuItem>
<SoftKeyItem>                            
<Name>F1</Name>
<Label>fone</Label>
<URL>http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?text=F1%20pressed"; ?></URL>
</SoftKeyItem>
<SoftKeyItem> 
<Name>F2</Name>
<Label>ftwo</Label>
<URL>http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?text=F2%20pressed"; ?></URL>
</SoftKeyItem>
<SoftKeyItem> 
<Name>F3</Name>
<Label>fthree</Label>
<URL>http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?text=F3%20pressed"; ?></URL>
</SoftKeyItem>
<SoftKeyItem>  
<Name>F4</Name>
<Label>ffour</Label>
<URL>http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?text=F4%20pressed"; ?></URL>
</SoftKeyItem>
<SoftKeyItem>
<Name>#</Name>
<URL>http://10.110.22.8/minibrowser/label.xml</URL>
</SoftKeyItem>
<SoftKeyItem>
<Name>*</Name>
<URL>http://10.110.22.8/minibrowser/start.xml</URL>
</SoftKeyItem>
</SnomIPPhoneMenu>

