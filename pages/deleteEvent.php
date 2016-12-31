<?php
	if(isset($_POST['addEventButton'])){
		$xml = new  DomDocument("1.0", "UTF-8");
		$xml->load('AllEvents.xml');

		$eName =  $_POST['eventName'];

		$xPath = new DOMXPATH($xml);
		foreach ($xPath->query("/root/info[name = '$eName']") as $node) {
			$node->parentNode->removeChild($node);
		}
		$xml->formatoutput = true;
		$xml->save('AllEvents.xml');
	}
?>	
