<?php
	$url="";  
	$array = array(
		"378823"=> "http://www.concept-academy.co.il/lnd/mob/stylist-cig.php",
		"378830"=> "http://www.concept-academy.co.il/lnd/mob/stylist-cig.php",
		"380272"=> "http://www.concept-academy.co.il/lnd/mob/stylist-cig.php",
		"380279"=> "http://www.concept-academy.co.il/lnd/mob/stylist-cig.php",
		"378824"=> "http://www.concept-academy.co.il/lnd/mob/stylist-diamond.php",
		"378831"=> "http://www.concept-academy.co.il/lnd/mob/stylist-diamond.php",
		"380273"=> "http://www.concept-academy.co.il/lnd/mob/stylist-diamond.php",
		"380280"=> "http://www.concept-academy.co.il/lnd/mob/stylist-diamond.php",
		"378825"=> "http://www.concept-academy.co.il/lnd/mob/stylist-eye.php",
		"378832"=> "http://www.concept-academy.co.il/lnd/mob/stylist-eye.php",
		"380274"=> "http://www.concept-academy.co.il/lnd/mob/stylist-eye.php",
		"380281"=> "http://www.concept-academy.co.il/lnd/mob/stylist-eye.php",
		"378826"=> "http://www.concept-academy.co.il/lnd/mob/stylist-green.php",
		"378833"=> "http://www.concept-academy.co.il/lnd/mob/stylist-green.php",
		"380275"=> "http://www.concept-academy.co.il/lnd/mob/stylist-green.php",
		"380282"=> "http://www.concept-academy.co.il/lnd/mob/stylist-green.php",
		"378827"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hairbob.php",
		"378834"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hairbob.php",														
		"380276"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hairbob.php",
		"380283"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hairbob.php",
		"378828"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hat.php",
		"378835"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hat.php",
		"380277"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hat.php",
		"380284"=>"http://www.concept-academy.co.il/lnd/mob/stylist-hat.php",
		"378829"=>"http://www.concept-academy.co.il/lnd/mob/stylist-pilot.php",
		"378836"=>"http://www.concept-academy.co.il/lnd/mob/stylist-pilot.php",
		"380278"=>"http://www.concept-academy.co.il/lnd/mob/stylist-pilot.php",
		"380285"=>"http://www.concept-academy.co.il/lnd/mob/stylist-pilot.php",
		"380307"=>"http://www.concept-academy.co.il/lnd/mob/stylist_f.php",
		"380310"=>"http://www.concept-academy.co.il/lnd/mob/stylist_f.php",
		"380308"=>"http://www.concept-academy.co.il/lnd/mob/stylist_f2.php",
		"380311"=>"http://www.concept-academy.co.il/lnd/mob/stylist_f2.php",
		"380309"=>"http://www.concept-academy.co.il/lnd/mob/stylist_m.php",
		"380913"=>"http://www.concept-academy.co.il/lnd/mob/stylist_m.php"
	);
	if(isset($_GET['c2'])){
		if (array_key_exists($_GET['c2'], $array)) {
			$url=$array[$_GET['c2']]."?".$_SERVER['QUERY_STRING'];
		}else{
			if($_SERVER['QUERY_STRING']){
				$url="http://www.concept-academy.co.il/lnd/maplander/"."?".$_SERVER['QUERY_STRING'];
			}else{
				$url="http://www.concept-academy.co.il/lnd/maplander/";
			}
		}	
	}else{
		$url="http://www.concept-academy.co.il/lnd/mob/index.php";	
	}
	header( 'Location:'.$url );
	die();
?>