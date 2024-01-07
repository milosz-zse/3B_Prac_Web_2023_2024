<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="zadpraktyczne2.php"> 
    jezyk <input name="jezyk" type="text" />
       Wyslij<input value="Wyslij" type="submit" />
    </form>
<?php
$jezyk=$_POST['jezyk'];
   if ($jezyk == "a") {
    echo "angielski";
} elseif ($jezyk == "n") {
    echo "niemiecki";
} elseif ($jezyk == "h") {
    echo "hiszpanski";
} 
else {
   echo "polski";
}
?>
</body>
</html>