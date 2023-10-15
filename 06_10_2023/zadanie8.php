<!DOCTYPE html>
<html>
<body>

<?php
$array[0] = 5;
$array[1] = 2;
$array[2] = 4;

if($array[0]==$array[1] || $array[1] == $array[2] || $array[0] == $array[2])
    echo "Przynajmniej dwie liczby są takie same";
else
    echo "Każda liczba jest inna"

?>
</body>
</html>