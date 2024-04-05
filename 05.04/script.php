<?php
echo "<a href='addPost.php'>dodaj wpisy</a>";
echo "<a href='allWpisy.php'>Wszystkie wpisy</a>";

$host ="localhost";
$user = "root";
$pass = "";
$db = "strona_wpisy";

$mysqli = new mysqli($host , $user , $pass , $db);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$inputLogin = $_POST['inputLogin'];
$inputPass = $_POST['inputPass'];

$sql = "SELECT login , pass  FROM `uzytkownicy`";
$usedLogin;
$usedPass;
if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      if ( $row[0]==$inputLogin && $row[1]==$inputPass ) {
        $usedLogin=$row[0];
        $usedPass=$row[1];

      }
      
    }
    $result -> free_result();
  }

  if ($usedLogin=="")
   {
    printf(" zle haslo lub login ");
   }
   elseif ($usedLogin!="" && $usedPass!="") 
    {
        echo "<h1> Zalogowales sie na konto  </h1><h2> ". $usedLogin. "</h2>";
        
        
        $zapytanie = "SELECT * FROM `wpisy`";
        $showAll = mysqli_query(mysqli_connect($host , $user , $pass , $db) , $zapytanie );
        while ($rowed=mysqli_fetch_row($showAll))    
        {
            if ($rowed[1]=="Dupa") {
                echo "<tr>";
                echo "<td> $rowed[0] </td>";
                echo "<td> $rowed[1] </td>";
                echo "<td> $rowed[2] </td>";
            
            
                echo "</tr>";
            }
        
        }
    }



  $mysqli -> close();

?>