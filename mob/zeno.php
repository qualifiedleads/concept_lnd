<?php
$passed_adid = $_GET['passed_adid'];
$landers = array(
    "378823" => "t202id=864", //corresponding t202id for cig
    "378830" => "t202id=864",
    "380272" => "t202id=864",
    "380279" => "t202id=864",
    "378824" => "t202id=774", //corresponding t202id for diamond
    "378831" => "t202id=774",
    "380273" => "t202id=774",
    "380280" => "t202id=774",
    "378825" => "t202id=983", //corresponding t202id for eye
    "378832" => "t202id=983",
    "380274" => "t202id=983",
    "380281" => "t202id=983",
    "378826" => "t202id=5104", //corresponding t202id for green
    "378833" => "t202id=5104",
    "380275" => "t202id=5104",
    "380282" => "t202id=5104",
    "378827" => "t202id=864", //corresponding t202id for hairbob
    "378834" => "t202id=864",
    "380276" => "t202id=864",
    "380283" => "t202id=864",
    "378828" => "t202id=3112", //corresponding t202id for hat
    "378835" => "t202id=3112",
    "380277" => "t202id=3112",
    "380284" => "t202id=3112",
    "378829" => "t202id=5124", //corresponding t202id for pilot
    "378836" => "t202id=5124",
    "380278" => "t202id=5124",
    "380285" => "t202id=5124",
    "380307" => "t202id=9135", //corresponding t202id for f, http://www.concept-academy.co.il/lnd/mob/stylist_f.php
    "380310" => "t202id=9135",
    "380308" => "t202id=6141", //corresponding t202id for f2, http://www.concept-academy.co.il/lnd/mob/stylist_f2.php
    "380311" => "t202id=6141",
    "380309" => "t202id=7153",//corresponding t202id for m , http://www.concept-academy.co.il/lnd/mob/stylist_m.php
    "380913" => "t202id=7153",
);

header('Location: http://trk.conce.pt/tracking202/redirect/tracker.php?t202id='.$landers[$passed_adid].'&'.$_SERVER['QUERY_STRING']);
?>