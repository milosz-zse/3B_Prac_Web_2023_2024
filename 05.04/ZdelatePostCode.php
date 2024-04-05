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

$yourLogin = $_POST['yourLogin'];
$yourPass = $_POST['yourPass'];
$tresccccc = $_POST['tresccccc'];
$sql = "SELECT login , pass  FROM `uzytkownicy`";
$useLogin;
$usePass;
if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      if ( $row[0]==$yourLogin && $row[1]==$yourPass ) {
        $useLogin=$row[0];
        $usePass=$row[1];

      }
      
    }
    $result -> free_result();
  }
  if ($useLogin=="")
  {
   printf(" zle haslo lub login ");
  }
  else 
   {
       echo "<h1>Usuwamy  post</h1><h2> ". $useLogin. "</h2>";
       
       
       $sql = 'DELETE FROM wpisy WHERE `tresc`="$tresccccc"';
       if ($mysqli->query($sql) == TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
      }
   }
