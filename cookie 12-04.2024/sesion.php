<?php
session_start();

$_SESSION["color"]="blue";
 echo $_SESSION["color"];



 //usuwanie wszyskich z pam
session_unset();


//zamkiniecie sesji
session_destroy();


//szyfrowania hasla

$password=sha1("haslo")

//blad
//echo $password;


?>