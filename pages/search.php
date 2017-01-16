<?php
	/*if(isset($_SESSION['username']))
	{*/
		$searchResult = $_GET['searchInput'];
		$searchResultLower  = strtolower($searchResult);
		$searchResultArray = explode(" ", $searchResultLower);  //Razbijamo na niz koji se sastoji od kljucnih rijeci

			//$xml = simplexml_load_file('AllEvents.xml') or die("Error: Xml dokument je prazan");
			$veza = new PDO ("mysql:dbname=eic;host=localhost;charset=utf8", "admin" ,"admin");
			$veza->exec("set names utf8");
            $rezultat = $veza->query("SELECT korisnik,eventName,date,location,type,mainEventInfo,detailEventInfo,image FROM event");
			$brojac = 0;
			foreach ($rezultat as $event) {
				
				$nadjenaRijec = false;
				$rijecKojaSePoredi = strtolower($event['eventName']) ." ". strtolower($event['location']); 			//Pretrazujemo po poljima Naziv eventa i lokacija eventa
				foreach ($searchResultArray as $singleWord) {
						if($singleWord == ''){
							continue;
						}

						if(strpos($rijecKojaSePoredi, $singleWord) !== false){
							$nadjenaRijec = true;
						}
				}
				if($nadjenaRijec == true){
						$brojac = $brojac + 1;
						echo '<div class="event">
								<h2>'.$event['eventName'].'</h2>
									<div class="row">
									<div class="image-eventInfo">

										<div class="event_image">
										<div class="column one">
											<img src="../images/eventImages/'.$event['image'].'"/>
										</div>
										</div>
										<div class="main_info">
										<div class="column three">
											<p>'.$event['mainEventInfo'].'</p>
											<br>
											<p> Event date: '.$event['date'].' </p>
											<br>
											<p> Event location: '.$event['location'].' </p>
											<br>
											<p> Event type:  '.$event['type'].'</p>
										</div>
										</div>
									</div>
									</div>
								</div>';
				}
			}
			if($brojac == 0){
				echo 'No results';
			}
	
		

/*	}/*
	else{
		echo 'Only admin have this option';
	}*/
?>