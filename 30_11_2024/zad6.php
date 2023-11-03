<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
   $a=10
   $b=20
   $c=30
    if ($a==$b && $b==$c) {
        echo "równoboczny "
    }
    elseif ($a==$b || $b==$c  || $a==$c) {
         echo "równoramieny "

    }
    elseif ($a*$a + $b*$b == $c*$c ||  $a*$a + $c*$c == $b*$b ||  $b*$b + $c*$c == $a*$a) {
        echo "prostokątny"
    }

?>
</body>
</html>