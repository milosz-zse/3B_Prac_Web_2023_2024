
<?php
$dni=365;

if(!isSet($_COOKIE['ileRazy'])){
    $ileRazy=1;}
else
    {$ileRazy= intval($_COOKIE['ileRazy']);
    $ileRazy++;
}
setCookie("ileRazy","$ileRazy",time()+60*60*24*$dni)
?>

<html>
<head>


  <title> [tytuł strony] </title>


</head>
<body>

<?php
    echo("Ta strona została odwiedzona $ileRazy razy.");
?>

</body>
</html>