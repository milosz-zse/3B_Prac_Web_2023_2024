<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $a=0;
        for ($i=10; $i <1000 ; $i++) { 
            if ($a>1000) {
                echo "wynik ";
                echo $a;
                break;
            }
            else {
                $a= $a + $i;
            }
            
        }
    ?>
</body>
</html>