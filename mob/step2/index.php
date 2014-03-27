<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="he" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Form</title>
</head>
<body class="bg-linen">
<div class="gforms spaced">
<div class="golden-forms wrapper">
<form action="mail.php" method="post">
<div class="form-title"> <img src="concept-logo.png" height="50" width="170" style="float:left"/>
<h2>Start your Styling Career</h2>
</div>
<div class="form-enclose">
<div class="form-section">
			<section>
            <a href="tel:03-771-3015"/>
            <input type="tel" value="התקשרי עכשיו &#9742;" class="button red" /> 
            </a>
            </section>
<section>
<section style="overflow:hidden;margin-bottom:10px">
<section style="float:left;margin-top:10px;color:#ff4444">
  <?php session_start(); if(isset($_SESSION['error'])){ if($_SESSION['error']=="success"){?>
  תודה לך על התעניינותך. אנחנו ניצור איתך קשר בקרוב מאוד!<img height="1" width="1" border="0" style="display: none;" src="http://trk.conce.pt/tracking202/static/gpx.php?amount=" /> <img src="http://clickserv.sitescout.com/conv/201ce00e7ef9aebe" border="0">
  <?php }else{?>
  סליחה שאנחנו לא יכולים להשלים requeat שלך באותו הרגע. אנא נסה שוב!
  <?php }unset($_SESSION['errmsg']);}?>
</section>
<section>
<section>
<label for="names" class="lbl-text">שם</label>
<label class="lbl-ui">
<input type="text" name="names" id="names" class="input" autofocus required />
</label>                              
</section>
<section>
<label for="tele" class="lbl-text">טלפון נייד:</label>
<label class="lbl-ui">
<input type="tel" name="tele" id="tele" class="input" required />
</label>                            
</section>
<section>
<label for="email" class="lbl-text">דואייל:</label>
<label class="lbl-ui">
<input type="email" name="email" id="email" class="input" />
</label>                          
<div class="email-suggestion">האם התכוונת <a href="#" class="apply"><span>user</span>@<b>domain.com</b></a><a href="#" class="close">✖</a></div> 
</section> 
</div>
</div>
<div class="form-buttons">
<section>
<input type="submit" value="שלח" class="button blue"/>
</section>
</div>
</form>
</div>
</div>
<script src="render.js" async type="text/javascript"></script>
</body>
</html>
<link type="text/css" rel="stylesheet" href="css/golden-forms.css"/>