<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php



   for ($i=100; $i >0 ; $i-- )
   { 
        echo $i;
        echo " ";
   }
   echo "<br>";
   echo  " while  zwykle";
   $a= 101;
   while ($a >0) {
        $a--;
        echo $a;
        echo "<br>";
   }
   $z=100;
   do {
    $z--;
    echo $z;
    echo "  ";
   } while ($z >0);
   ?>
</body>
</html>