<?php 
session_start();
$_SESSION['callclick']=1;
echo $_SESSION['callclick'];
header("Location: stylist-cig.php");
die();
?>

