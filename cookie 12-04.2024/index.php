<?php
$cookie_name = "user1";
$cookie_value = "Jan Kowalski";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

$work_name = "user2";
$work_value = "Jan Kowalski2";
setcookie($work_name, $work_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$work_name])) {
    echo "Cookie named '" . $work_name . "' is not set!";
  } else {
    echo "Cookie '" . $work_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$work_name];
  }
  
// deleting cooki
//setcookie("user1","",-1)



?>

</body>
</html> 