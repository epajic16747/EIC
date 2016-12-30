<!DOCTYPE html>
<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>EIC</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</HEAD>
<BODY onload="loadEvent()">
	<div class="main">
		<?php
			session_start();
		?>	
		<div class="site_content">
			<div class="site_heading">
			<img src="../images/login.png" id="loginImage" alt="Login image" align="right" height="3%" width="8.5%">
			<h1>EIC</h1>
			<h2>Event Information Center</h2>
			</div><!--Close site heading-->
			<div class="header">
				<div class="menubar">
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="allEvents.php">All Events</a></li>
						
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php
							if(isset($_SESSION['username']))
				            {
				                
				                print '<li><a href="addEvent.php">Add Event</a></li>
				                	   <li><a href="deleteEventPage.php">Delete Event</a></li>
				                	   <li><a href="editEvent.php">Change Event</a></li>
				                	   <li><a href="downloads.php">Downloads</a></li>';
				            }
						?>
					</ul>
				</div><!--Close menubar-->
			</div><!--Close header-->
			<div class="banner_img">
					<div class="hamo">
					<img id="slide" src="../images/carousel/img1.jpg"  alt="banner">
					</div>
					<div id="left_arrow"><img onClick="Carousel(-1)" class="left" src="../images/left-arrow-gray-hi.png"/></div>
					<div id="right_arrow"><img  onClick="Carousel(1)" class="right" src="../images/left-arrow-right-hi.png"/></div>
			</div><!--Close banner image(slider)-->
      <div id="popupWindowID" class="popupWindow">
	      <div class="popupWindowContent">
	        <p class="close">&times;</p>
	        <?php 
		        if(isset($_SESSION['username']))
		            {
		                
		                print '<center><h2>You are already logged in.You can only logout at this moment.</h1><br><h2>Do you want to <a href="logout.php">logout</a> ?</h1></center>'; 

		            }
	            else
		            {
		                
			            print '
					        <center>
								<form method="POST" action="login.php" style="background-color:#5b5e63" id="loginID">
								  <div class="imgcontainer">
								    <img src="../images/loginFormImage.png" alt="Avatar" class="loginImage">
								  </div>

								  <div class="container">
								    <label><b>Username:</b></label>
								    <input type="text" placeholder="Enter Username" name="username" id="userName" required>
								    <br><br>
								    <label><b>Password:</b></label>
								    <input type="password" placeholder="Enter Password" name="password" id="passWord" required>
								        
								    <button type="submit" id="loginButton">Login</button>
								    
								</form>        

					        </center>';
		    		}
	        ?>


	      	</div>

    	</div>		
			<div class="contactForm">

			 <div class="row">
			 <form method ="POST" action = "addEvent.php">
				<h2>Adding new event</h2>
			
				<div style="width:170px; float:left;"><p>Event name:</p></div>
				<div style="width:430px; float:right;"><p><input  type="text" name="eventName" value="" id="nazivEventa" onchange="validirajNazivEventa(); konacnaValidacija();" required/>
					<input class="submit" type="submit" name="" value="GRESKA" id="A" style="display: none"/></p></div>
				<div style="width:170px; float:left; padding: 10px 0 0 0;"><p>Event date:</p></div>
				<div style="width:430px; float:right;"><p><input id="datum" name="eventDate" type="date" value="" onchange="validirajDatum();konacnaValidacija();" required/>
					<input class="submit" type="submit" name="" value="GRESKA" id="B" style="display: none"/></p></div>

				<div style="width:170px; float:left;"><p>Event location:</p></div>
				<div style="width:430px; float:right;"><p><input  type="text" name="eventLocation" value="" id="lokacijaEventa" onchange="validirajLokacijuEventa(); konacnaValidacija(); required"/>
					<input class="submit" type="submit" name="" value="GRESKA" id="E" style="display: none"/></p></div>

				<div style="width:170px; float:left;"><p>Event type:</p></div>
				<div style="width:430px; float:right;"><p><input  type="text" name="eventType" value="" id="tipEventa" onchange="validirajTipEventa();
				konacnaValidacija();" required/>
					<input class="submit" type="submit" name="" value="GRESKA" id="F" style="display: none"/></p></div>
															
				<div style="width:170px; float:left; padding: 20px 0 0 0;"><p>Main information of event:</p></div>
				<div style="width:430px; float:right;"><p><textarea rows="3" cols="50" name="mainEventInf" id="mainEventInfo" onchange="validirajMainEventInfo(); konacnaValidacija(); required"></textarea>
					<input class="submit" type="submit" name="" value="GRESKA" id="C" style="display: none"/></p></div>

				<div style="width:170px; float:left; padding: 60px 0 0 0;"><p>Detail event informaion:</p></div>
				<div style="width:430px; float:right;"><p><textarea rows="12" cols="60" name="eventInf" id="eventInfo" onchange="validirajEventInfo(); konacnaValidacija(); "></textarea>
					<input class="submit" type="submit" name="" value="GRESKA" id="D" style="display: none"/></p></div>

				<br style="clear:both;" />
				<div style="width:170px; float:left;"><p> Select a file:</p> </div>
				<div style="width:430px; float:right;"><p><input type="file" name="img" id="eventImage"/></p></div>
				<div style="width:430px; float:right;"><p style="padding-top: 15px">
				<br>
				<input class="submit" type="submit" name="addEventButton" value="Add" onclick="saveEvent()" id="addDugme"/></p></div>
				</form>
			 </div>
			</div>
			<!--<script type="text/javascript" src="../js/ajaxPageLoad.js"></script>-->
			<script type="text/javascript" src="../js/slider.js"></script>
			<script type="text/javascript" src="../js/addEventLocalStorage.js"></script>
			<script type="text/javascript" src="../js/contactLocalStorage.js"></script>
			<script type="text/javascript" src="../js/validacijaAddEvent.js"></script>
			<script type="text/javascript" src="../js/contactValidacijaForme.js"></script>
			<script type="text/javascript" src="../js/login.js"></script>

			
		</div>
		<div class="footer">  
			<a href=index.html >WT project v3.0 Spirala I </a> 
		</div><!--close footer-->	
	</div>		

</BODY>

</HTML>

<?php
	if(isset($_POST['addEventButton'])){
		$xml = new  DomDocument("1.0", "UTF-8");
		$xml->load('AllEvents.xml');

		$eName =  htmlspecialchars($_POST['eventName']);
		$eDate =  htmlspecialchars($_POST['eventDate']);
		$eLocation =  htmlspecialchars($_POST['eventLocation']);
		$eType = htmlspecialchars ($_POST['eventType']);
		$eMainInfo = htmlspecialchars ($_POST['mainEventInf']);
		$eDetailInfo =  htmlspecialchars($_POST['eventInf']);
		$eImg = htmlspecialchars($_POST['img']);

		$rootTag = $xml->getElementsByTagName("root")->item(0);
		$infoTag = $xml->createElement("eventInfo");

			$nameTag = $xml->createElement("name", $eName);
			$dateTag = $xml->createElement("date", $eDate);
			$locationTag = $xml->createElement("location", $eLocation);
			$typeTag = $xml->createElement("type", $eType);
			$mainInfoTag = $xml->createElement("mainInfo", $eMainInfo);
			$detailInfoTag = $xml->createElement("detailInfo", $eDetailInfo);
			$eventImageTag = $xml->createElement("eventImage", $eImg);

			$infoTag->appendChild($nameTag);
			$infoTag->appendChild($dateTag);
			$infoTag->appendChild($locationTag);
			$infoTag->appendChild($typeTag);
			$infoTag->appendChild($mainInfoTag);
			$infoTag->appendChild($detailInfoTag);
			$infoTag->appendChild($eventImageTag);

		$rootTag->appendChild($infoTag);
		$xml->save('AllEvents.xml');

	}
?>	







