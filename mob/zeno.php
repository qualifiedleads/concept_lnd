<?php
$passed_adid = $_GET['passed_adid'];
$landers = array(
    "378823" => "5192", //corresponding t202id for cig
    "378830" => "5192",
    "380272" => "5192",
    "380279" => "5192",
    "378824" => "7213", //corresponding t202id for diamond
    "378831" => "7213",
    "380273" => "7213",
    "380280" => "7213",
    "378825" => "9222", //corresponding t202id for eye
    "378832" => "9222",
    "380274" => "9222",
    "380281" => "9222",
    "378826" => "2236", //corresponding t202id for green
    "378833" => "2236",
    "380275" => "2236",
    "380282" => "2236",
    "378827" => "2245", //corresponding t202id for hairbob
    "378834" => "2245",
    "380276" => "2245",
    "380283" => "2245",
    "378828" => "1254", //corresponding t202id for hat
    "378835" => "1254",
    "380277" => "1254",
    "380284" => "1254",
    "378829" => "2263", //corresponding t202id for pilot
    "378836" => "2263",
    "380278" => "2263",
    "380285" => "2263",
    "380307" => "8273", //corresponding t202id for f, http://www.concept-academy.co.il/lnd/mob/stylist_f.php
    "380310" => "8273",
    "380308" => "2283", //corresponding t202id for f2, http://www.concept-academy.co.il/lnd/mob/stylist_f2.php
    "380311" => "2283",
    "380309" => "5294",//corresponding t202id for m , http://www.concept-academy.co.il/lnd/mob/stylist_m.php
    "380913" => "5294",
);

header('Location: http://trk.conce.pt/tracking202/redirect/tracker.php?t202id='.$landers[$passed_adid].'&'.$_SERVER['QUERY_STRING']);
//header('Location: http://trk.conce.pt/tracking202/redirect/trackere.php?'.$landers[$passed_adid].'&'.$_SERVER['QUERY_STRING']);

?>
