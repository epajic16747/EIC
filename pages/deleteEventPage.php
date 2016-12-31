<!DOCTYPE html>
<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>EIC</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</HEAD>
<BODY>	
	<div class="main">
		<?php
			session_start();
		?>
		<div class="site_content">
			<div class="site_heading">
			<p id="loginImage"><img src="../images/login.png" alt="Login image" align="right" height="3%" width="8.5%"></p>
			<h1>EIC</h1>
			<h2>Event Information Center</h2>
			

			</div><!--Close site heading-->
			<div class="header">
				<div class="menubar">
	
					<ul class="menu">
						<li><a href="../index.php">Home</a></li>
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
		<div class="row">
            <p>Search event that you want to delete: </p>
            <input type="text" size="30" onkeyup="showResult()" id="searchField">
            <div id="searchButton"> <button onclick="showResult()">Search</button></div>
            <div id="searchButton1"> <button >Delete</button></div>
            <div id="searchResults"></div>
		</div>		
				<!--<script type="text/javascript" src="../js/ajaxPageLoad.js"></script>-->
				<script type="text/javascript" src="../js/slider.js"></script>
				<script type="text/javascript" src="../js/addEventLocalStorage.js"></script>
				<script type="text/javascript" src="../js/contactLocalStorage.js"></script>
				<script type="text/javascript" src="../js/validacijaAddEvent.js"></script>
				<script type="text/javascript" src="../js/contactValidacijaForme.js"></script>
				<script type="text/javascript" src="../js/login.js"></script>
				<script type="text/javascript" src="../js/ajaxSearch.js"></script>


			</div><!--close siteContent-->
		</div>
		<div class="footer">  
			<a href=index.html >WT project v3.0 Spirala I </a> 
		</div><!--close footer-->	
	</div>		

</BODY>

</HTML>
