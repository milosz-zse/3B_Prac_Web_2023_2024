<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=100;
$wynik =0 ;
while ($a <= 200) {
    if ($a%2==0) {
        $wynik=  $wynik + $a ;
        echo $wynik ;
        }
    $a++;
}
echo "<br>"; 
echo "koncowy wynik";
echo $wynik;

?>
</body>
</html>