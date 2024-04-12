<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <input type="submit"  value="dodaj" name="licznik">
    </form>
</body>
</html>
<?php
if (isset($_POST['licznik'])){
   if (isset($_COOKIE['licznik'])) {
        $licznik = (int)$_COOKIE['licznik'];
        echo $licznik;
        $licznik++;
        setcookie("licznik","$licznik",time() + 86400 * 30);
    }
    else {
        $licznik = 0;
        echo $licznik;
        $licznik++;
        setcookie("licznik","$licznik",time() + 86400 * 30);
    }   
}


?>