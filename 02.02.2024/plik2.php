<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
<td> ID</td>
<td> imie</td>
<td> nazwisko</td>
<td> rok urodzenia</td>
<td> miejsce urodzenia</td>
<td> ip</td>
</tr>
<?php 
$host ="localhost";
$user = "root";
$pass = "";
$db = "baza_filmow";

$poloczenie = mysqli_connect($host , $user , $pass , $db);

$zapytanie = "SELECT *  FROM urzytkownicyy";

$wynik = mysqli_query($poloczenie , $zapytanie );


while ($row=mysqli_fetch_row($wynik)) {
    echo "<tr>";
    echo "<td> $row[1] </td>";
    echo "<td> $row[0] </td>";
    echo "<td> $row[2] </td>";
    echo "<td> $row[3] </td>";
    echo "<td> $row[4] </td>";
    echo "<td> $row[5] </td>";

    echo "</tr>";
}


?>
    </table>
</body>
</html>

<?php 


?>