<?php 
	session_start();
	$clickThruLink614 = 'http://trk.conce.pt/tracking202/redirect/off.php?acip=614&'.$_SERVER['QUERY_STRING'];
	$clickThruLink512 = 'http://trk.conce.pt/tracking202/redirect/off.php?acip=521&'.$_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<title>קריירה בסטיילינג מתחילה פה</title>
<style>h1{font-size:1.5rem;font-family:Arial,Helvetica,sans-serif}h2{font-size:1.2rem;font-family:Arial,Helvetica,sans-serif}html{font-size:12pt;font-family:Arial,Helvetica,sans-serif}li{text-align:right}.image{width:80%;max-width:80%}body{background-color:#EEF0F7}.container{background-color:#eee;border:thin red dotted;margin:0 auto;width:96%;text-align:center}.css3button,.css4button{font-family:Arial,Helvetica,sans-serif;font-size:1.1rem;color:#fff;padding:2% 5%;background:-moz-linear-gradient(top,#53fc53 0,#007311);background:-webkit-gradient(linear,left top,left bottom,from(#efb73d),to(#a5750d));-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;border:1px solid #00b80c;-moz-box-shadow:0 1px 3px rgba(000,000,000,.5),inset 0 0 1px rgba(255,255,255,.6);-webkit-box-shadow:0 1px 3px rgba(000,000,000,.5),inset 0 0 1px rgba(255,255,255,.6);box-shadow:0 1px 3px rgba(000,000,000,.5),inset 0 0 1px rgba(255,255,255,.6);text-shadow:0 -1px 0 rgba(0,0,0,1),0 1px 0 rgba(255,255,255,.2)}</style>
</head>
<body <?php if(isset($_SESSION['callclick'])){ ?> onload="location.href='tel:03-771-3015';"<?php } ?>>
<div class="container">
  <h1>קריירה בסטיילינג מתחילה פה</h1>
  <img src="http://commondatastorage.googleapis.com/lnd/mob/cig.jpg" class="image">
  <h2>בלעדי לסטייליסטים בוגרי קונספט-
    תעודה של אגודת הסטייליסטים בישראל</h2>
  <p style="text-align: center">
  <section> <a <?php if(!isset($_SESSION['callclick'])){?> href="<?php echo $clickThruLink512; ?>" <?php }else{?>href="tel:03-771-3015"<?php }?> id="calllink"/>
    <input type="tel" value="&#9742; אני רוצה להיות סטייליסטית " class="css4button"/>
    <?php if(isset($_SESSION['callclick'])){?>
    <img height="1" width="1" border="0" style="display:none;" src="http://trk.conce.pt/tracking202/static/gpx.php?amount=&amp;cid=2">
    <?php unset($_SESSION['callclick']);session_destroy();}?>
    </a> </section>
  <p style="text-align:right">
  <ul>
    <li>אהבה עמוקה לסטיילינג ואופנה</li>
    <li>תשוקה לקניות, טרנדים, תסרוקות וכל מה שהולך...</li>
    <li>הבטחה לא לסרב להצעות העבודה שאקבל במהלך הלימודים או בסיומם</li>
    <li>לא לקבל " רגליים קרות" כשאצטרך לעשות הפקת אופנה בעצמי </li>
    <li>חברותיות ויכולת עבודה בקבוצה לצד עבודה אישית</li>
    <li>פתיחות לקבלת רעיונות חדשים</li>
    <li>מרפקים להראות מי את באמת!</li>
  </ul>
  </p>
  <a href="<?php echo $clickThruLink614 ?>" class="css3button" align="center">אני רוצה להיות סטייליסטית</a>
  <h3>תנאים להצלחה כסטייליסטית:</h3>
</div>
</body>
</html>