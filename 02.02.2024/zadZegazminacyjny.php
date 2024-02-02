<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post"> 
        wzrost w  podawaj 
        <input type="number"   name="wzrost" size="35">
        waga
        <input type="number"   name="waga" size="35">
        wiek 
        <input type="number"   name="wiek" size="35">
        <input type="submit">
    </form>
    <?php
        $waga = $_POST['waga'];
        $wzrost = $_POST['wzrost']/100;
        $bi = $waga/( $wzrost* $wzrost);
        echo $bi;
        if ($bi<18.5) {
            echo "nie do waga";
        }
        elseif ($bi<24.99 ) {
            echo "Git";
        }
        elseif ($bi>24.99 ) {
            echo "nadwaga";
        }
    ?>
</body>
</html>