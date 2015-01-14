<?php 
require_once 'Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
?>
<!DOCTYPE html dir="rtl" lang="he">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <?php if($detect->isMobile() || $detect->isTablet()):?>
        <link rel="stylesheet" href="css/main-mobile.css">
        <?php else:?>
        <link rel="stylesheet" href="css/main.css">
		<?php endif;?>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
   		<link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>
       <div class="header parallax parallax-1">
            <div class="container">
                <div class="header-nav">
                    <div class="header-logo">
                        <img src="img/concept-logo.png">
                    </div>
                </div>
                <div class="header-row">
                    <div class="header-content">
                        <h1>לימודי עיצוב פנים עם השמה מקצועית</h1>
                        <p>מכללת קונספט מתחייבת להגשים לכם את החלום ולהפוך אתכם למעצבים מצליחים.
בכיתות קטנות ויחס אישי, עם מרצים מהשורה הראשונה בארץ, תקבלו את כל הידע הדרוש 
במרוכז וכולל התמחות מעשית במהלך הלימודים!</p>
                        <div class="header-video">
                            <iframe src="https://player.vimeo.com/video/115902396?portrait=0&amp;wmode=opaque" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="videohead"></iframe>
                        </div>
                    </div>
                    <div class="header-form">
                        <h1>לקבלת תאריכי פתיחה ותכנית לימוד מלאה, הרשמו כאן:</h1>
                        <div id="error_display"></div>
                        <form method="post" id="contact-form" autocomplete="off">
                            <div class="form-field">
                                <label for="contact-name">שם מלא *</label>
                                <input type="text" name="name" id="contact-name" class="text">
                                <span id="name-error"></span>
                            </div>
                            <div class="form-field">
                                <label for="contact-email">אימייל *</label>
                                <input type="text" name="email" id="contact-email" class="text">
                                <span id="email-error"></span>
                            </div>
                            <div class="form-field">
                                <label for="contact-phone">טלפון סלולארי*</label>
                                <input type="text" name="phone" id="contact-phone" class="text">
                                <span id="phone-error"></span>
                            </div>
                            <div class="form-field">
                                <input type="checkbox" name="newsletter" id="newsletter" checked >
                                <label for="newsletter">Subscribe to Newsletter</label>                                
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn button" name="contact-form-btn">
                                  <p>שלחו לי עכשיו</p>
                                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
                                M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
                                  </svg>
                                </button>
                                <!--<input type="submit" value="Submit Your Information" class="btn button" name="contact-form-btn">-->
                            </div>
							<p>מתנה מיוחדת בשווי 600 ש' לפונים מדף זה</p>
                        </form>
                    </div>
               </div>
            </div>    
        </div>
        <div class="features" style="background:rgba(238,238,238,1);">
            <div class="container">
                <div class="fitem-row">
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/guarantee.png)"></div>
                        <h2>התמחות מעשית במהלך הלימודים</h2>
                        <p>לימודים ממוקדים הכוללים סטזי'ם כבר במהלך הלימודים.
מסיימים עם נסיון!</p>
                    </div>
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/lamp.png)"></div>
                        <h2>יזמות עיסקית למעצבים</h2>
                        <p>תוכנית ייחודית למעצבים יזמים 
אשר מעוניינם להקים ולנהל מותג אישי</p>
                    </div>
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/dollar.png)"></div>
                        <h2>עבודה בעיצוב</h2>
                        <p>השמה תעסוקתית לבוגרי קונספט להשתלבות מהירה כמעצבים</p>
                    </div>
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/mortar.png)"></div>
                        <h2>תואר בינלאומי בעיצוב</h2>
                        <p>אפשרות להשלים לתואר בינלאומי בעיצוב (בתוך כשנתיים)* בלעדי לבוגרי קונספט</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="products">
            <div class="container">
                <div class="pitem-heading">הסטודנטים שלנו מצליחים!</div>
                <div class="pitem-subheading">93% מבוגרי קונספט משתלבים בתחום העיצוב מיד עם תום הלימודים</div>
                 <?php if(!($detect->isMobile() || $detect->isTablet())):?>
                <div class="pitem-row">
                    <div class="pitem">
                        <img src="img/1.jpg">
                        <h2>עיצוב חדרי רחצה במלון, אילת 2014</h2>
                        <p>לילך הוד, בוגרת קונספט המכללה לעיצוב</p>
                    </div>
                    <div class="pitem">
                        <img src="img/2.jpg">
                        <h2>עיצוב חדרי שינה, לונדון 2014</h2>
                        <p>ניר מלך, בוגר קונספט המכללה לעיצוב</p>
                    </div>
                    <div class="pitem">
                        <img src="img/3.jpg">
                        <h2>עיצוב לופט, תל אביב 2012</h2>
                        <p>רעות גושן, בוגרת קונספט המכללה לעיצוב</p>
                    </div>
                </div>
                <?php endif;?>
                <div class="pitem-row">
                    <div class="pitem">
                        <img src="img/4.jpg">
                        <h2>עיצוב חדר לתינוק, חיפה 2013</h2>
                        <p>גלית שם טוב, בוגרת קונספט המכללה לעיצוב</p>
                    </div>
                    <div class="pitem">
                        <img src="img/5.jpg">
                        <h2>עיצוב מטבח וחדר אוכל, כפר ויתקין 2014</h2>
                        <p>מירי מסיקה, בוגרת קונספט המכללה לעיצוב</p>
                    </div>
                    <div class="pitem">
                        <img src="img/6.jpg">
                        <h2>עיצוב חללים מסחריים (מספרה), רמת השרון 2015</h2>
                        <p>רונן גבע, בוגר קונספט המכללה לעיצוב</p>
                        <!--<div class="pitem-btns">
                            <div class="btn-one">40 m<sup>2</sup></div>
                            <div class="btn-two">Total Price: $15,000</div>
                        </div>-->
                    </div>
                </div>                
            </div>
        </div>
        <div class="testimonials">
            <div class="container">
                <div class="testimonials-heading">בוגרי המסלול לעיצוב פנים ממליצים:</div>
                <div class="testimonials-row" id="t1">
                    <div class="testimonial">
                        <div class="tinr">
                            <div class="timg" style="background-image:url(img/meirav.jpg)"></div>
                            <p>הלימודים בקונספט הם ההשקעה הכי טובה שעשיתי בחיים שלי, כבר במהלך הלימודים התחלתי לעבוד בתחום, כך שההסבה המקצועית שתכננתי קרתה הרבה יותר מהר ממה שדמיינתי.
בזכות התוכנית ליזמים של קונספט, הצלחתי לקבל עבודות ופרוייקטים גדולים<span style="color:#66cc33;">&nbsp;</span><span style="color:#66cc33;"> </span><br><span style="color:#0099ff;">מירב גרוסמן</span></p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="tinr">
                            <div class="timg" style="background-image:url(img/shirli.jpg)"></div>
                            <p>מתוך אהבה גדולה לעיצוב פנים נרשמתי ללימודים בקונספט, שמכל הסילבוסים היו הכי מעשיים וממוקדים בעיני. במסלול עצמו גיליתי" עד כמה תכני הלימודים פרקטיים ומכינים אותנו למציאות, כך שבקלות התקבלתי לעבודה כמעצבת פנים."<br><span style="color:#66cc33;">&nbsp;</span><span style="color:#66cc33;">&nbsp;שירלי חיון</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features">
            <div class="container">
                <div class="fitem-row">
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/heart.png)"></div>    
                        <h2>ליווי אישי וקרוב</h2>
                        <p>מרצים מהשורה הראשונה בתעשייה ילוו אותך באופן אישי, יהיו זמינים עבורך בכל עת גם לאחר סיום הלימודים…</p>
                    </div>
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/map.png)"></div>
                        <h2>איפה לומדים</h2>
                        <p>במכללת קונספט בתל אביב, 2 דקות הליכה מעזריאלי. *מגיעים בקלות עם כל תחבורה</p>
                    </div>
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/startup.png)"></div>
                        <h2>הצלחה מוכחת</h2>
                        <p>87% מבוגרנו כבר פתחו עסקים או השתלבו בתעשייה כמעצבים </p>
                    </div>
                    <div class="fitem">
                        <div class="fitem-img" style="background-image:url(img/icons/giftbox.png)"></div>
                        <h2>הטבה לנרשמים</h2>
                        <p>מלגה של 3000 ש' לנרשמים מדף זה</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="testimonials">
            <div class="container">
                <div class="testimonials-heading">בוגרי המסלול לעיצוב פנים ממליצים:</div>
                <div class="testimonials-row">
                    <div class="testimonial">
                        <div class="tinr">
                            <p>הלימודים בקונספט הם ההשקעה הכי טובה שעשיתי בחיים שלי, כבר במהלך הלימודים התחלתי לעבוד בתחום, כך שההסבה המקצועית שתכננתי קרתה הרבה יותר מהר ממה שדמיינתי.
בזכות התוכנית ליזמים של קונספט, הצלחתי לקבל עבודות ופרוייקטים גדולים<span style="color:#66cc33;">&nbsp;</span><span style="color:#66cc33;"> </span><br><span style="color:#0099ff;">מירב גרוסמן</span></p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="tinr">
                            <!--<div class="timg" style="background-image:url(img/shirli.jpg)"></div>-->
                            <p>מתוך אהבה גדולה לעיצוב פנים נרשמתי ללימודים בקונספט, שמכל הסילבוסים היו הכי מעשיים וממוקדים בעיני. במסלול עצמו גיליתי" עד כמה תכני הלימודים פרקטיים ומכינים אותנו למציאות, כך שבקלות התקבלתי לעבודה כמעצבת פנים."<br><span style="color:#66cc33;">&nbsp;</span><span style="color:#66cc33;">&nbsp;שירלי חיון</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="plogos parallax parallax-2">
            <div class="container">
                <img src="img/logos_interior.png">
            </div>
        </div>
        <div class="tfooter">
            <div class="container">
                <h1>אז למה את מחכה?</h1>
                <p>אם חשוב לך ללמוד במקום מוכר ע"י משרד המסחר והתעסוקה, משרד הקליטה, ביטוח לאומי, משרד הביטחון ועוד,
אם חשוב לך ללמוד במקום שמתחייב להצלחה שלך, צרי איתנו קשר כעת לתאום פגישת ייעוץ והכוונה אישית, ללא תשלום.
</p>
                <div class="btn-class"><button class="btn">גם אני רוצה להצליח בעיצוב!</button></div>
            </div>
        </div>
        <div class="lfooter">
            <div class="container">

                <div class="copyright">
                   <p><span>Made with</span>
                    <img src="img/icons/heart-small.png" alt=""><span>in Tel Aviv | All rights reserved Copyright © 2014 Concept Academy</span><p>
                </div>
            </div>
        </div>
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<!-- Google Code for Call Conversion Page
		In your html page, add the snippet and call
		goog_report_conversion when someone clicks on the
		phone number link or button. -->
		<script type="text/javascript">
		  /* <![CDATA[ */
		  goog_snippet_vars = function() {
			var w = window;
			w.google_conversion_id = 999761620;
			w.google_conversion_label = "D6lgCKrt5FgQ1M3c3AM";
			w.google_remarketing_only = false;
		  }
		  // DO NOT CHANGE THE CODE BELOW.
		  goog_report_conversion = function(url) {
			goog_snippet_vars();
			window.google_conversion_format = "3";
			window.google_is_call = true;
			var opt = new Object();
			opt.onload_callback = function() {
			if (typeof(url) != 'undefined') {
			  window.location = url;
			}
		  }
		  var conv_handler = window['google_trackConversion'];
		  if (typeof(conv_handler) == 'function') {
			conv_handler(opt);
		  }
		}
		/* ]]> */
		</script>
		<script type="text/javascript"
		  src="//www.googleadservices.com/pagead/conversion_async.js">
		</script>

    </body>
</html>