<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $year ;
    $year=2023;
    if($year % 4 == 0) {
        echo "Liczba jest przestepny";
    }
    $something =$year/100;
    $wiek=round($something);
    $wiek= $wiek+1;
    echo $wiek;
    ?>
</body>
</html>