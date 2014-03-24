<img height="1" width="1" border="0" style="display:none;" src="http://trk.conce.pt/tracking202/static/gpx.php?amount=&amp;cid=2">
<?php 
sleep(1);
session_start();
$_SESSION['callclick']=1;
echo $_SESSION['callclick'];
header("Location: stylist-cig.php");
die();
?>