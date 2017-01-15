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
						<li><a href="registration.php">Registration</a></li>
						<?php
							if(isset($_SESSION['username']))
				            {
				                print '<li><a href="addEvent.php">Add Event</a></li>
				                	   <li><a href="deleteEventPage.php">Delete Event</a></li>
				                	   <li><a href="editEvent.php">Change Event</a></li>
				                	   <li><a href="downloads.php">Downloads</a></li>
				                	   <li><a href="rate.php">Rate</a></li>';
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
			<div class="contactForm" >

			 <div class="row">
			 <form method ="POST" action = "rate.php" >
				<h2>Rate Event</h2>
			
				<div style="width:170px; float:left;"><p>Event name:</p></div>
				<div style="width:430px; float:right;"><p><input  type="text" name="eventRateName" value="" id="eventRateName" onchange="validirajNazivEventa();" required>
					<input class="submit" type="submit" name="" value="GRESKA" id="A" style="display: none"/></p></div>
				<div style="width:170px; float:left;"><p>Rate:</p></div>
				<div style="width:430px; float:right;"><p><input id="user_lic" type="number" name="rateValue" min="1" max="10" step="1" value ="5"/> 
					<input class="submit" type="submit" name="" value="GRESKA" id="B" style="display: none"/></p></div>

				<br style="clear:both;" />
				<br>
				<input class="submit" type="submit" name="rateEventButton" value="Rate it" id="rateEventDugme"/></p></div>
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
			<a href=index.php >WT project v4.3 Spirala IV </a> 
		</div><!--close footer-->	
	</div>		

</BODY>

</HTML>

<?php
	if(isset($_POST['rateEventButton'])){
		$xml = new  DomDocument("1.0", "UTF-8");
		$xml->load('EventRates.xml');

		$eRateName =  htmlspecialchars($_POST['eventRateName']);
		$eRateValue =  htmlspecialchars($_POST['rateValue']);
		

		$rootTag = $xml->getElementsByTagName("root")->item(0);
		$infoTag = $xml->createElement("eventRate");

			$eventNameTag = $xml->createElement("eventName", $eRateName);
			$rateValueTag = $xml->createElement("rateValue", $eRateValue);


			$infoTag->appendChild($eventNameTag);
			$infoTag->appendChild($rateValueTag);


		$rootTag->appendChild($infoTag);
		$xml->save('EventRates.xml');

	}
?>	







