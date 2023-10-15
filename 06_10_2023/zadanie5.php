<!DOCTYPE html>
<html>
<body>

<?php
$age = 15;

switch($age) {
    case $age < 11:
        echo "Dziecko";
        break;
    case ($age >= 11 && $age <= 17):
        echo "Nastolatek";
        break;
    case $age > 17:
        echo "Dorosły";
        break;
}
?>

</body>
</html>