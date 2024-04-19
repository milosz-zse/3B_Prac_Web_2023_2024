<?php
if(!isSet($_COOKIE["howManyTimesVisited"]) ){
    $howManyTimesVisited=1;}
else
{
    $howManyTimesVisited= intval($_COOKIE["howManyTimesVisited"]);
    $howManyTimesVisited++;
}
setCookie("howManyTimesVisited",$howManyTimesVisited,3600);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotow</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="baner1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div id="baner2">
        <img src="zad6.png" alt="logotyp">
    </div>
    <div id="mainDiv">
        <table>
            <h4> tabela odlotow</h4>
        <tr>
            <th>lp.</th>
            <th>Numer rejsu</th>
            <th>czas</th>
            <th>kierunek</th>
            <th>status</th>
        </tr>
            <?php
                $host ="localhost";
                $user = "root";
                $pass = "";
                $db = "egzamin";
                
                $mysqli = new mysqli($host , $user , $pass , $db);
                $zapytanie = "SELECT id, nr_rejsu , czas,kierunek , status_lotu FROM `odloty` ORDER BY `odloty`.`czas` DESC";

                $wynik = mysqli_query($mysqli , $zapytanie );


                while ($row=mysqli_fetch_row($wynik)) {
                echo "<tr>";
                echo "<td> $row[0] </td>";
                echo "<td> $row[1] </td>";
                echo "<td> $row[2] </td>";
                echo "<td> $row[3] </td>";
                echo "<td> $row[4] </td>";
                echo "</tr>";
            }
            mysqli_close($mysqli);
            ?>
        

        </table>
        
        
    </div>
    <div id="footer1">
        <a href="kw1.png">Pobierz obraz</a>
    </div>
    <div id="footer2">
        <?php 
            if ( intval($_COOKIE["howManyTimesVisited"])==1 )   
            {
                echo "dzien dobry! sprawdz regulamin naszej storny";
            }
            else {
                echo "Milo nam , że  nas znowu odwiedziłes";
            }

        ?>
    </div>
    <div id="footer3">
        <p>Autor: 420MiloszMichta06315673</p>
    </div>

</body>
</html>