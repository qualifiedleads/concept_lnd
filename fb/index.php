<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" class="no-js" itemscope="" itemtype="http://schema.org/Product" dir="rtl" lang="he"> 
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <title>Concept</title>
    <link rel="stylesheet" href="stylesheets/reset.css" media="Screen" type="text/css" />
    <link rel="stylesheet" href="stylesheets/base.css" media="Screen" type="text/css" />
    <link rel="stylesheet" href="stylesheets/mobile.css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" type="text/css" />

    <!--[if IEMobile]>
    <link rel="stylesheet" href="mobile.css" media="screen" type="text/css"  />
    <![endif]-->
    <meta property="og:title" content="Concept ac LP" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://apps.facebook.com/conceptac_lp/" />
    <meta property="og:image" content="https://limitless-fortress-6366.herokuapp.com/logo.png" />
    <meta property="og:site_name" content= "בצלאל"/>
    <meta property="og:description" content="בצלאל" />
    <meta property="fb:app_id" content="621963677837780" />
</head>
  <body>
    <div class="maincontent"><div class="row">
    <div class="content">
    	<div class="header-top">
        <!-- Left Side-->
        <section class="leftsidecol">
        	<div class="ten columns">
            <div class="leftside">
            <!--Post-->
            <div class="post">

<h1> להתקבל בכייף ללימודי עיצוב באקדמיה</h1>
<!--Contactform-->
<div class="contactform">
<?php if (isset($_GET['contactErr']) && (int)$_GET['contactErr'] === 1): ?>
      <p style="color:red;font-weight:bold">Failed to send email, check your input and try again</p>
    <?php endif; ?>
<span class="header"><h3>מעוניין ללמוד ב:</h3></span>
    <form name="contact_form" method="post" action="/mail.php">
      <div class="form-row">
      <fieldset>
        <select name="uni" id="uni" class="icon-menu">
            <option value='bezalel'>בצלאל</option>
            <option value='shenkar'>שנקר</option>
            <option value='HIT'>HIT</option>
            <option value='technion'>טכניון</option>
            <option value='TAV-university'>אונ' ת"א</option>
        </select>
      </div>
      <div class="form-row">
        <input type="text" name="name" placeholder="שם:"/>
      </div>
      <div class="form-row">
        <input type="tel" name="phone" pattern="^[0-9]+[\- ]*[0-9]+$" placeholder="טלפון:"/>
      </div>
      <div class="form-row">
        <input type="email" name="email" placeholder="דואייל:"/>
      </div>
      
      <input type="submit" value="שלח"/>
    </form>

</div>
<!--End Contactform-->
            <img src="http://lnd.commondatastorage.googleapis.com/bez_cert.jpg" alt="image">
            
<h2>  <strong> המכינה המומלצת להכנת תיקי עבודות!</strong ><br> </h2>
<h3>   ברוכים הבאים למכינה היחידה בישראל המתחייבת לקבלה שלך לאקדמיה ללימודי עיצוב! </h3>
                   הלימודים במכינה מהנים, חוויתיים ומכינים אותך ליום הגדול :  
                <p>
                <ul>
                 <li>מילגה של 1000 ש' לפונים מעמוד זה!</li>
                <li>אנו מתחייבים לקבלתכם לשנקר, בצלאל, HIT, אונ' ת"א, הטכניון, ויצ"ו חיפה או מכללה למנהל</li>
                <li>המכינה המעשית ביותר, פחות תאוריות יותר התנסות חוויתית! </li>
                <li>אצלנו משלמים רק פעם אחת עד שמתקבלים!<br>
                </li>
                <li>שיטה ייחודית ללימודי רישום, גם מי שלא יודע להחזיק עפרון, יהיה מופתע מהתוצאות!!!</li>
                <li>מפגשים אישיים אחד על אחד להכנת תיק העבודות</li>
                <li>אבחון והתאמה מקצועית אישית </li>
                <li><strong>מוכר למענק חיילים משוחררים</strong></li>
              </ul>
              </p>

        		</div>
                </div>
                </div>
                </div>
                </div>
                </div>
        	</div>
        </section>
      </body>
</html>