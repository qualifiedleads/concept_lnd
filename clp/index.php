<?php 
require_once 'Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$flag = 0;
if ( $detect->isMobile() || $detect->isTablet()) {
	$flag = 1;
}
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
        <?php if($flag):?>
        <link rel="stylesheet" href="css/main-mobile.css">
        <?php else:?>
        <link rel="stylesheet" href="css/main.css">
		<?php endif;?>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
       <div class="header parallax parallax-1">
            <div class="container">
                <div class="header-nav">
                    <div class="header-logo">
                        <p>MASTER<span>.</span></p>
                        <p class="tagline">Real-Estate Template</p>
                    </div>
                </div>
                <div class="header-row">
                    <?php if($flag):?>
        			<div class="header-content">
                        <h1>Design Just Blows My Mind</h1>
                        <p>We have listed examples of the types of templates you may consider to submit in these categories however. </p>
                        <div class="header-video">
                            <iframe src="https://player.vimeo.com/video/17882714?portrait=0&amp;wmode=opaque" width="300" height="169" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="videohead"></iframe>
                        </div>
                    </div>
                    <div class="header-form">
                        <h1>Apply Now For a Home!</h1>
                        <p>The Best Unbounce templates that are considered to be within these categories.</p>
                        <div id="error_display"></div>
                        <form method="post" id="contact-form" autocomplete="off">
                            <div class="form-field">
                                <label for="contact-name">Full Name *</label>
                                <input type="text" name="name" id="contact-name" class="text">
                                <span id="name-error"></span>
                            </div>
                            <div class="form-field">
                                <label for="contact-email">Email *</label>
                                <input type="text" name="email" id="contact-email" class="text">
                                <span id="email-error"></span>
                            </div>
                            <div class="form-field">
                                <label for="contact-phone">Phone Number *</label>
                                <input type="text" name="phone" id="contact-phone" class="text">
                                <span id="phone-error"></span>
                            </div>
                            <div class="form-btn">
                                <input type="submit" value="Submit Your Information" class="btn" name="contact-form-btn">
                            </div>
                        </form>
                    </div>
					<?php else:?>
                    <div class="header-form">
                        <h1>Apply Now For a Home!</h1>
                        <p>The Best Unbounce templates that are considered to be within these categories.</p>
                        <div id="error_display"></div>
                        <form method="post" id="contact-form" autocomplete="off">
                            <div class="form-field">
                                <label for="contact-name">Full Name *</label>
                                <input type="text" name="name" id="contact-name" class="text">
                                <span id="name-error"></span>
                            </div>
                            <div class="form-field">
                                <label for="contact-email">Email *</label>
                                <input type="text" name="email" id="contact-email" class="text">
                                <span id="email-error"></span>
                            </div>
                            <div class="form-field">
                                <label for="contact-phone">Phone Number</label>
                                <input type="text" name="phone" id="contact-phone" class="text">
                                <span id="phone-error"></span>
                            </div>
                            <div class="form-btn">
                                <input type="submit" value="Submit Your Information" class="btn" name="contact-form-btn">
                            </div>
                        </form>
                    </div>
                    <div class="header-content">
                        <h1>Design Just Blows My Mind</h1>
                        <p>We have listed examples of the types of templates you may consider to submit in these categories however. </p>
                        <div class="header-video">
                            <iframe src="https://player.vimeo.com/video/17882714?portrait=0&amp;wmode=opaque" width="536" height="302" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="videohead"></iframe>
                        </div>
                    </div>
                  	<?php endif;?>
               </div>
            </div>    
        </div>
        <div class="features" style="background:rgba(238,238,238,1);">
            <div class="container">
                <div class="fitem-row">
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390857_basic2-170_box_gift-128.png)"></a>
                        <h2>המסלול המותאם לצורכי התעשייה</h2>
                        <p>לימודים ממוקדים הכוללים סטז'ים כבר במהלך הלימודים- מסיימים עם ניסיון!</p>
                    </div>
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390854_map_orientation-128.png)"></a>
                        <h2>להיות מעצב עצמאי</h2>
                        <p>ערכת יזמות עסקית למעצבים עצמאיים( כולל בנייה וניהול מותג אישי)</p>
                    </div>
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390865_user_group_users_like_love_favorite_friend-128.png)"></a>
                        <h2>עבודה בעיצוב</h2>
                        <p>השמה תעסוקתית לבוגרי בקונספט להשתלבות מהירה כמעצבים</p>
                    </div>
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390864_Brainstorming-128.png)"></a>
                        <h2>תואר בינלאומי בעיצוב</h2>
                        <p>אפשרות להשלים לתואר בינלאומי בעיצוב (בתוך כשנתיים)* בלעדי לבוגרי קונספט</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="products">
            <div class="container">
                <div class="pitem-heading">The Beauty of Contrast</div>
                <div class="pitem-subheading">We turn you on to pro lighting strategies to highlight the most of indoor and outdoor rooms</div>
                 <?php if(!$flag):?>
                <div class="pitem-row">
                    <div class="pitem">
                        <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/craftsman-kitchen.original.jpg">
                        <h2>Beautiful New Kitchen</h2>
                        <p>great deal with awesome new features it is realy incredible design and price.</p>
                    </div>
                    <div class="pitem">
                        <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/craftsman-kitchen.original.jpg">
                        <h2>Beautiful New Kitchen</h2>
                        <p>great deal with awesome new features it is realy incredible design and price.</p>
                    </div>
                    <div class="pitem">
                        <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/craftsman-kitchen.original.jpg">
                        <h2>Beautiful New Kitchen</h2>
                        <p>great deal with awesome new features it is realy incredible design and price.</p>
                    </div>
                </div>
                <?php endif;?>
                <div class="pitem-row">
                    <div class="pitem">
                        <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/craftsman-kitchen.original.jpg">
                        <h2>Beautiful New Kitchen</h2>
                        <p>great deal with awesome new features it is realy incredible design and price.</p>
                    </div>
                    <div class="pitem">
                        <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/craftsman-kitchen.original.jpg">
                        <h2>Beautiful New Kitchen</h2>
                        <p>great deal with awesome new features it is realy incredible design and price.</p>
                    </div>
                    <div class="pitem">
                        <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/craftsman-kitchen.original.jpg">
                        <h2>Beautiful New Kitchen</h2>
                        <p>great deal with awesome new features it is realy incredible design and price.</p>
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
                <div class="testimonials-heading">Our Awesome Clients</div>
                <div class="testimonials-subheading">We turn you on to pro lighting strategies to highlight the most of indoor and outdoor rooms</div>
                <div class="testimonials-row">
                    <div class="testimonial">
                        <div class="tinr">
                            <div class="timg" style="background-image:url(img/unboune-logo.original.png)"></div>
                            <p>Im a web designer, you guys are very inspiring I wish to see more work from you maybe more freebies.</p>
                            <div class="via">
                                <span style="color:#66cc33;">&nbsp;</span><span style="color:#d3d3d3;">via</span><span style="color:#66cc33;"> </span><span style="color:#0099ff;">unbounce.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="tinr">
                            <div class="timg" style="background-image:url(img/envato-logo.original.png)"></div>
                            <p>Im a web designer, you guys are very inspiring I wish to see more work from you maybe more freebies.</p>
                            <div class="via">
                                <span style="color:#66cc33;">&nbsp;</span>
                                <span style="color:#d3d3d3;">via</span>
                                <span style="color:#66cc33;">&nbsp;envato.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features">
            <div class="container">
                <div class="fitem-row">
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390858_relations-128.png)"></a>    
                        <h2>ליווי אישי וקרוב</h2>
                        <p>מרצים מהשורה הראשונה בתעשייה ילוו אותך באופן אישי, יהיו זמינים עבורך בכל עת גם לאחר סיום הלימודים…</p>
                    </div>
                    <div class="fitem">
                        
                        <a href="#" style="background-image:url(img/icons/1420390863_startup-128.png)"></a>
                        <h2>איפה לומדים</h2>
                        <p>במכללת קונספט בתל אביב, 2 דקות הליכה מעזריאלי. *מגיעים בקלות עם כל תחבורה</p>
                    </div>
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390866_earnings-128.png)"></a>
                        <h2>הצלחה מוכחת</h2>
                        <p>87% מבוגרנו כבר פתחו עסקים או השתלבו בתעשייה כמעצבים </p>
                    </div>
                    <div class="fitem">
                        <a href="#" style="background-image:url(img/icons/1420390866_earnings-128.png)"></a>
                        <h2>הטבה לנרשמים</h2>
                        <p>מלגה של 3000 ש' לנרשמים מדף זה</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="plogos parallax parallax-2">
            <div class="container">
                <img src="img/plogos.png">
            </div>
        </div>
        <div class="tfooter">
            <div class="container">
                <h1>What are you waiting for?</h1>
                <p>We turn you on to pro lighting strategies to highlight features create intrigue and make the most of indoor and outdoor rooms</p>
                <div class="btn-class"><button class="btn">Submit Your Information</button></div>
            </div>
        </div>
        <div class="lfooter">
            <div class="container">
                <div class="social"> 
                    <div class="twitter_container"></div>
                    <div class="google_container"></div>
                    <div class="facebook_container"></div>
                </div>
                <div class="copyright">
                   <p><span>Made with</span>
                    <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/master-desktop/1kvyvol-heart-small.png" alt=""><span>in Earth | All rights reserved Copyright © 2014 MYFLAT</span><p>
                </div>
            </div>
        </div>
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>