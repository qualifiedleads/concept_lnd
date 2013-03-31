
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<title>הודעתך נשלחה בהצלחה-קונספט מכללה לעיצוב</title>

<body dir="rtl">

<?php
$name = $_POST['name']; 
$phone = $_POST['phone']; 
$email = $_POST['email'];
$details = $_POST['details'];





$subject = 'פנייה מדף נחיתה מכללת קונספט' ; 



$body = '


שם: '.$name.' 
נייד: '.$phone.' 
דוא"ל: '.$email.' 
פרטים: '.$details.' '; 




if($name == '' || $phone == '' ||  email=='' )
 {
        echo("ישנם פרטים חסרים בטופס . ");
		header("Location: failed.html");
 }
elseif ($name == $email || $name == $phone || $phone == $email )
 {
        echo("אין באפשרותך לכתוב בשני שדות טקסט זהה .  ");
		header("Location: failed.html");
 }
else
 {
    
         // mail('', $subject , $body,  "From:".$email);
     mail('info@concept-academy.co.il', $subject , $body,  "From:".$email);
    mail('leadsbackup@conce.pt', $subject , $body,  "From:".$email);
	 mail('test@nachon.co.il', $subject , $body,  "From:".$email);

      
       // echo("הודעתך נשלחה בהצלחה . "); 
		header("Location: success.html");
 }
?>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-23J6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-23J6');</script>
<!-- End Google Tag Manager -->






</body>
