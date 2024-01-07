<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="zadPraktyczne1.php"> 
        pln <input name="pln" type="number" />
       waluta <input name="waluta" type="text" />
       Wyslij<input value="Wyslij" type="submit" />
    </form>
<?php
    $pln=$_POST['pln'];
    $euro = 4.32;
    $dolar=3.21;
    $frank=3.98;
    $variable =  $_POST['waluta'];
    switch ($variable) {
        case 'euro':
            echo $pln*$euro;
            break;
        case 'dolar':
            echo $pln*$dolar;
            break;

        case 'frank':
            echo $pln*$euro ;
            break;
        default:
            echo $pln*$frank;
            break;
    }
?>
</body>
</html>