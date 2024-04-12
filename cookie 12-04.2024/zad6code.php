<?php

$urodziny =$_POST["dataaaa"];
$cookie_name = "urodziny";
$cookie_value = $urodziny ;
setcookie($cookie_name, $cookie_value, time() + (86400 * 366), "/"); // 86400 = 1 day
if ($_COOKIE[$cookie_name]==date("Y-m-d")) {
    echo "sto lat";
    echo $_COOKIE[$cookie_name];
}
echo $_COOKIE[$cookie_name];



?>