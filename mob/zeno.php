<?php
$passed_adid = $_GET['passed_adid'];
$landers = array(
    "378823" => "864", //corresponding t202id for cig
    "378830" => "864",
    "380272" => "864",
    "380279" => "864",
    "378824" => "774", //corresponding t202id for diamond
    "378831" => "774",
    "380273" => "774",
    "380280" => "774",
    "378825" => "983", //corresponding t202id for eye
    "378832" => "983",
    "380274" => "983",
    "380281" => "983",
    "378826" => "5104", //corresponding t202id for green
    "378833" => "5104",
    "380275" => "5104",
    "380282" => "5104",
    "378827" => "864", //corresponding t202id for hairbob
    "378834" => "864",
    "380276" => "864",
    "380283" => "864",
    "378828" => "3112", //corresponding t202id for hat
    "378835" => "3112",
    "380277" => "3112",
    "380284" => "3112",
    "378829" => "5124", //corresponding t202id for pilot
    "378836" => "5124",
    "380278" => "5124",
    "380285" => "5124",
    "380307" => "9135", //corresponding t202id for f, http://www.concept-academy.co.il/lnd/mob/stylist_f.php
    "380310" => "9135",
    "380308" => "6141", //corresponding t202id for f2, http://www.concept-academy.co.il/lnd/mob/stylist_f2.php
    "380311" => "6141",
    "380309" => "7153",//corresponding t202id for m , http://www.concept-academy.co.il/lnd/mob/stylist_m.php
    "380913" => "7153",
);

header('Location: http://trk.conce.pt/tracking202/redirect/tracker.php?t202id='.$landers[$passed_adid].'&'.$_SERVER['QUERY_STRING']);
//header('Location: http://trk.conce.pt/tracking202/redirect/trackere.php?'.$landers[$passed_adid].'&'.$_SERVER['QUERY_STRING']);

?>
