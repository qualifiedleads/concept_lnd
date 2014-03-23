<?php 
session_start();
$_SESSION['callclick']=1;
echo $_SESSION['callclick'];
header("Location: stylist-cig.php");
die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<img height="1" width="1" border="0" style="display: none;" src="http://trk.conce.pt/tracking202/static/gpx.php?amount=&cid=2" />
</body>
</html>


