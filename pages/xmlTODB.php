<?php
	session_start();
	if(isset($_SESSION['username'])) 
	{


		try{
			$veza = new PDO ("mysql:dbname=eic;host=localhost;charset=utf8", "admin" ,"admin");
			$veza->exec("set names utf8");
			$xml = simplexml_load_file('AllUsers.xml') or die("Error: Xml dokument je prazan");


			foreach ($xml->userInfo as $user) {
	        	$name = $user->username;
	        	$email = $user->email;
	        	$password = $user->password;

				$rezultat = $veza->query("SELECT username, email, password FROM korisnik WHERE username='$name' AND email='$email' AND password='$password' ");

				if($rezultat ->rowCount() == 0){

					$veza->exec("INSERT INTO korisnik (username,email,password) VALUES ('$name','$email','$password') ");
					echo "User added to database!<br>";	

				}
				else{
					echo "User already in database!<br>";	
				}
			}

				        //Prebacujemo sve evente u bazu 
	        $xmlEvent = simplexml_load_file('AllEvents.xml') or die("Error: Xml dokument je prazan");
	        	//echo "Bio sam unutar forach za event!<br>";
	        foreach ($xmlEvent->eventInfo as $event) {
	        	$eventUser = 1;
	        	$eventName = $event->name;
	        	$eventDate = $event->date;
	        	$eventLocation = $event->location;
	        	$eventType = $event->type;
	        	$eventMainInfo = $event ->mainInfo;
	        	$eventDetailInfo = $event->detailInfo;
	        	$eImage = $event ->eventImage;
	        	//	echo "Bio sam unutar forach za event!<br>";
	        	//Provjeravamo da li u bazi postoji ovaj event za odredjenog korisnika(ovde treba drugaciji query koji ce se povezati na 2 tabele i onda testirari sada sve ide za jednom korisnika, tj svi eventi su na jedom korisniku)
	        	$rezultat = $veza->query("SELECT korisnik,eventName,date,location,type,mainEventInfo,detailEventInfo,image 
	        							  FROM event  
	        							  WHERE korisnik = '$eventUser' AND eventName = '$eventName' AND date = '$eventDate' AND location = '$eventLocation' 
	        											  AND type = '$eventType' AND mainEventInfo = '$eventMainInfo' AND detailEventInfo= '$eventDetailInfo' 
	        											  AND 	image = '$eImage' ");
	        
	        	if($rezultat ->rowCount() == 0){
	        		$veza->exec("INSERT INTO event (korisnik,eventName,date,location,type,mainEventInfo,detailEventInfo,image) 
	        		                 VALUES('$eventUser','$eventName','$eventDate','$eventLocation','$eventType','$eventMainInfo','$eventDetailInfo','$eImage')");

	        		echo "Event added to database!<br>";	
	        		
	        	}
        		else{
        			echo "Event already in database!<br>";	
        		}	        	
	        }

	        $xmlEventRate = simplexml_load_file('EventRates.xml') or die("Error: Xml dokument je prazan");     


	        foreach ($xmlEventRate->eventRate as $rate) {
	        	$event4Rate = 1;
	        	//$eventRateName = $rate->eventName;
	        	$eventRateValue = $rate->rateValue;

	        	//Potrebno je provjeriti da li postoji event, a postoji zato sto smo stavili 1 tako nije potrebno obaviti potrebe
	        	//Treba samon neka logika da provjeri postoji li ovaj event
	        	$rezultat = $veza->query("SELECT eventID, rateValue 
	        							  FROM rate");

	        	if($rezultat ->rowCount() == 0){
	        		$veza->exec("INSERT INTO rate (eventID,	rateValue) VALUES('$event4Rate','$eventRateValue')");

	        		echo "Rate added to database!<br>";	
	        	}
	        	
        		else{
        			echo "Rate already in database!<br>";	
        		}
	        	
	    	}

			 print '
	         <script>
	         var timeOut = setTimeout(povratnaFunckija, 2000);

	         function povratnaFunckija()
	         {
	                window.history.back();
	         }
	         </script>';


	         $veza = null;
		}
		catch(PDOException $e){
			echo $rezultat . "<br>" . $e->getMessage();
			 print '
	         <script>
	         var timeOut = setTimeout(povratnaFunckija, 2000);

	         function povratnaFunckija()
	         {
	                window.history.back();
	         }
	         </script>';

		}

	}
?>













<!--<?php/*       NE RADI IZ NEKOG RAZLOGA

	        $servername = "localhost";
	        $username = "root";
	        $password = "";
	        $dbname = "eic";
	        $vat = false;
	        $connection = mysqli_connect($servername, $username, $password, $dbname) or die("Connection with database failed: " .mysqli_connect_error());
	        //Prvo cemo prebacit sve usere u bazu 
	        $xml = simplexml_load_file('AllUsers.xml') or die("Error: Xml dokument je prazan");

	        foreach ($xml->userInfo as $user) {
	        	$name = $user->username;
	        	$email = $user->email;
	        	$password = $user->password;

	        	//Provjeravamo da li u bazi postoji ovaj korisnik, posto se samo novi trebaju dodati 
	        	$test = "SELECT username, email, password FROM korisnik WHERE username = '$name' AND email = '$email' AND password = '$password' ";
	        	$testResult = $connection->query($test);

	        	if($testResult ->num_rows < 1){
	        		$errorDB = "INSERT INTO korisnik (username,email,password) VALUES ('$name','$email','$password') ";
	        		
	        		if(mysqli_query($connection,$vat)){
	        			echo "User added to database!";	
	        		}
	        		else{
	        			echo "Error: " .$errorDB. "<br> <br> MySql error :"  . mysqli_error($connection);
	        		}
	        	}
	        }
	        //Prebacujemo sve evente u bazu 
	        $xmlEvent = simplexml_load_file('AllEvents.xml') or die("Error: Xml dokument je prazan");

	        foreach ($xmlEvent->userInfo as $event) {
	        	$eventUser = 1;
	        	$eventName = $event->name;
	        	$eventDate = $event->date;
	        	$eventLocation = $event->location;
	        	$eventType = $event->type;
	        	$eventMainInfo = $event ->mainInfo;
	        	$eventDetailInfo = $event->detailInfo;
	        	$eImage = $event -> $eventImage;

	        	//Provjeravamo da li u bazi postoji ovaj event za odredjenog korisnika(ovde treba drugaciji query koji ce se povezati na 2 tabele i onda testirari sada sve ide za jednom korisnika, tj svi eventi su na jedom korisniku)
	        	$testEvent  = "SELECT * FROM event  WHERE korisnik = '$eventUser' AND eventName = '$eventName' AND date = '$eventDate' AND location = '$eventLocation' 
	        											  AND type = '$eventType' AND mainEventInfo = '$eventMainInfo' AND detailEventInfo= '$eventDetailInfo' 
	        											  AND 	image = '$eImage' ";
	        	$testResultEvent = $connection->query($testEvent);

	        	if($testResultEvent->num_rows == 0){
	        		$errorDBevent = "INSERT INTO event (korisnik,eventName,date,location,type,mainEventInfo,detailEventInfo,image) 
	        		                 VALUES('$eventUser','$eventName','$eventDate','$eventLocation','$eventType','$eventMainInfo','$eventDetailInfo','$eImage')";

	        		if(mysqli_query($connection,$vat)){
	        			echo "Event added to database!";	
	        		}
	        		else{
	        			echo "Error: " .$errorDBevent. "<br><br> MySql error :"  . mysqli_error($connection);
	        		}
	        	}
	        }

	        $xmlEventRate = simplexml_load_file('EventRates.xml') or die("Error: Xml dokument je prazan");     


	        foreach ($xmlEventRate->eventRate as $rate) {
	        	$event4Rate = 1;
	        	$eventRateName = $rate->eventName;
	        	$eventRateValue = $rate->rateValue;

	        	//Potrebno je provjeriti da li postoji event, a postoji zato sto smo stavili 1 tako nije potrebno obaviti potrebe
	        	//Treba samon neka logika da provjeri postoji li ovaj event
	        	$testEventRate  = "SELECT * FROM event  WHERE  AND eventName = '$eventRateName' ";
	        	$testResultEventRate = $connection->query($testEventRate);

	        	if($testResultEventRate->num_rows == 0){
	        		$errorDBeventRate = "INSERT INTO rate (eventID,	rateValue) 
	        								VALUES('$event4Rate','$eventRateValue')";

	        		if(mysqli_query($connection, $vat)){
	        			echo "Rate added to database!";	
	        		}
	        		else{
	        			echo "Error: " .$errorDBeventRate. "<br><br> MySql error :"  . mysqli_error($connection);
	        		}
	        	}
	        }
	}
    */
?>-->
