<!DOCTYPE html>
<html>
<body>

<?php
$array[0] = 5;
$array[1] = 2;
$array[2] = 4;
$storage;

if($array[0] < $array[1] && $array[0] < $array[2])
    echo "Liczba ".$array[0]." to liczba namniejsza";
else if($array[1] < $array[0] && $array[1] < $array[2])
    echo "Liczba ".$array[1]." to liczba namniejsza";
else if($array[2] < $array[0] && $array[2] < $array[1])
    echo "Liczba ".$array[2]." to liczba namniejsza";

?>
</body>
</html>