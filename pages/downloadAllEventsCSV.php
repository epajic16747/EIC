<?php
	session_start();
	if(isset($_SESSION['username']))
	{

		$xml = simplexml_load_file('pages/AllEvents.xml') or die("Error: Xml dokument je prazan");
		$csvFile = fopen('allEvents.csv', 'w');	
		$arrayList = array();
		$firstRow = array($xml->eventInfo->name->getName(),$xml->eventInfo->date->getName());//,$xml->eventInfo->location->getName(),$xml->eventInfo->type->getName(),
		//$xml->eventInfo->mainInfo->getName());
		array_push($arrayList,$firstRow);	

		foreach ($xml->eventInfo as $event) {
			$row = array($event->name, $event->date);//, $event->location, $event->type, $event->mainInfo);
			array_push($arrayList,$row);	
		}
		foreach ($arrayList as $Row)
	 	{
			fputcsv($csvFile, $Row);
		}

		fclose($csvFile);
		$file = 'allEvents.csv';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
    	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: '.filesize($file));
	    readfile($file);
		exit;

	}

	else
	{
		echo "Only admin can download files!"; //Ne bi trebalo ovo nikad ispisat
	}
?>