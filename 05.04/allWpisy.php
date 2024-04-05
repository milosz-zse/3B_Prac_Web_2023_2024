<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href='addPost.php'>dodaj wpisy</a>";
    <a href="allWpisy.php">Wszystkie wpisy</a>
<h1>
        Login
    </h1>
    <form method="post" action="script.php">
        <input type="text" name="inputLogin">
        <p>haslo</p>
        <input type="text" name="inputPass">
        <p>haslo</p>
        <input type="submit" value="Wyślij" name="send">
    </form>
<?php 
    $host ="localhost";
    $user = "root";
    $pass = "";
    $db = "strona_wpisy";

    $poloczenie = mysqli_connect($host , $user , $pass , $db);

    $zapytanie = "SELECT * FROM `wpisy`";



    
    $wynik = mysqli_query($poloczenie , $zapytanie );
  /* 
    while ($row=mysqli_fetch_row($wynik)) {
        echo "<tr>";
        echo "<td> $row[0] </td>";
        echo "<td> $row[1] </td>";
        echo "<td> $row[2] </td>";
    
    
        echo "</tr>";
    }

    */
?>
</body>
</html>