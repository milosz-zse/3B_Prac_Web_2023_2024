<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $liczba1 = 4;
    $liczba2 = -13;
    if ($liczba1 > $liczba2)
    {
        echo($liczba1);
        echo( " Jest wieksza od liczby ");
        echo($liczba2);
    }
    else if ($liczba2 > $liczba1)
    {
        echo($liczba2);
        echo( " Jest wieksza od liczby ");
        echo($liczba1);
    }
    else if ($liczba1 == $liczba2)
    {
        echo($liczba1);
        echo( " jest równe ");
        echo($liczba2);
       
    }
        
?>
</body>
</html>