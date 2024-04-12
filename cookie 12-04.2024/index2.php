<?php
if (!isset($_COOKIE["visited"])) {
    setcookie("visited","yes");
    $str =" cos sie nie dziaala";
}
else {
    $str="jest ustawiony";
    $str="jest ustawiony {$_COOKIE['visited']}";
}
?>
<html>
<body>

<?php
    echo $str;  

?>

</body>
</html> 