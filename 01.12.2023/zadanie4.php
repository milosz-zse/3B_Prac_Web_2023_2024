<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
  for ($i=0; $i < 10; $i++) { 
    echo "<br>";
    echo "Liczba ";
    echo $i ;
    echo "<br>";
    echo "jej pierwisatek kwadratowy  ";
    echo sqrt($i);;
  }
  $a=0;
  while ($a <= 9) {
    $a++;
    echo "<br>";
    echo "Liczba ";
    echo $a ;
    echo "<br>";
    echo "jej pierwisatek kwadratowy  ";
    echo sqrt($a);;
  }
  $z= 0 ;
  do {
    $z++;
    echo "<br>";
    echo "Liczba ";
    echo $z ;
    echo "<br>";
    echo "jej pierwisatek kwadratowy  ";
    echo sqrt($z);;
  } while ($z <= 9);
   ?>
</body>
</html>