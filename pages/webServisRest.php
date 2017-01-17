<?php
header('Content-type: text/javascript');

	$veza = new PDO ("mysql:dbname=eic;host=localhost;charset=utf8", "admin" ,"admin");
	$rezultat = $veza->query("SELECT korisnik,eventName,date,location,type,mainEventInfo,detailEventInfo,image FROM event");

	$upit= $_GET['query'];
	$jasonSviPodaci=array();

    foreach ($rezultat as $red) {
		$korisnik=$red['korisnik'];
		$eventName= array($red['eventName']);
		$date= array($red['date']);
		$location = $red['location'];
		$type= array($red['type']);
		$mainEventInfo= array($red['mainEventInfo']);
		$detailEventInfo= array($red['detailEventInfo']);
		$image= array($red['image']);
		
		if($upit == ''){
			array_push($jasonSviPodaci,$korisnik,$eventName,$date,$location,$type,$mainEventInfo,$detailEventInfo,$image);
		}
		
		elseif(strpos(strtolower($location), strtolower($upit))!== false){
			array_push($jasonSviPodaci,$korisnik,$eventName,$date,$location,$type,$mainEventInfo,$detailEventInfo,$image);
		}

	}
	if(empty($jasonSviPodaci)){

		echo 'Nema podataka';
	}
	else{
		echo json_encode($jasonSviPodaci);
	}
?>
