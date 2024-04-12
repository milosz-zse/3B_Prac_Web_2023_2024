<?php
$cookie_name = "username";
$cookie_value = "MIlosz MIchta ";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

echo  $_COOKIE[$cookie_name];


setcookie($cookie_name,"zmieniam" , time() + (86400 * 30), );
setcookie($cookie_name,"usuwam" , -1 );

?>