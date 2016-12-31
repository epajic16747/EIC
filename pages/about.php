<!DOCTYPE html>
<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>EIC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>
<BODY>
	<div class="main">
		<?php
			session_start();
		?>	
		<div class="site_content">
			<div class="site_heading">
			<img src="images/login.png" id="loginImage" alt="Login image" align="right" height="3%" width="8.5%">
			<h1>EIC</h1>
			<h2>Event Information Center</h2>
			</div><!--Close site heading-->
			<div class="header">
				<div class="menubar">
					<ul class="menu">
						<li><a href="pages/index.php">Home</a></li>
						<li><a href="pages/allEvents.php">All Events</a></li>
						<li><a href="pages/about.php">About</a></li>
						<li><a href="pages/contact.php">Contact</a></li>
						
						<?php
							if(isset($_SESSION['username']))
				            {
				                
				                print '<li><a href="pages/addEvent.php">Add Event</a></li>
				                	   <li><a href="pages/deleteEventPage.php">Delete Event</a></li>
				                	   <li><a href="pages/editEvent.php">Change Event</a></li>
				                	   <li><a href="pages/downloads.php">Downloads</a></li>';
				            }
						?>
					</ul>
				</div><!--Close menubar-->
			</div><!--Close header-->
			<div class="banner_img">
					<div class="hamo">
					<img id="slide" src="images/carousel/img1.jpg"  alt="banner">
					</div>
					<div id="left_arrow"><img onClick="Carousel(-1)" class="left" src="images/left-arrow-gray-hi.png"/></div>
					<div id="right_arrow"><img  onClick="Carousel(1)" class="right" src="images/left-arrow-right-hi.png"/></div>
			</div><!--Close banner image(slider)-->
			      <div id="popupWindowID" class="popupWindow">
	      <div class="popupWindowContent">
	        <p class="close">&times;</p>
	        <?php 
		        if(isset($_SESSION['username']))
		            { 
		                
		                print '<center><h2>You are already logged in.You can only logout at this moment.</h1><br><h2>Do you want to <a href="pages/logout.php">logout</a> ?</h1></center>'; 

		            }
	            else
		            {
		                
			            print '
					        <center>
								<form method="POST" action="pages/login.php" style="background-color:#5b5e63" id="loginID">
								  <div class="imgcontainer">
								    <img src="images/loginFormImage.png" alt="Avatar" class="loginImage">
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
			<h1>About</h1>
			<p>
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate placerat dolor, non fringilla nisi vulputate vel. Aenean semper commodo elit quis porta. Vivamus elit libero, ultricies ut urna quis, vestibulum viverra lectus. Suspendisse potenti. Vestibulum eros massa, maximus id est a, dignissim blandit turpis. Maecenas ut aliquam augue, vel tristique lectus. Phasellus ut malesuada ipsum. Nunc purus elit, posuere eu rhoncus et, sollicitudin vel libero. Donec in varius nisi. Phasellus gravida urna sit amet orci pretium ornare. Quisque eleifend pretium lorem, a rhoncus mi feugiat nec. Fusce blandit velit et velit efficitur feugiat. Nulla non ex in metus ullamcorper sollicitudin.
				<br>
				Suspendisse aliquam vehicula turpis, nec ultricies purus sollicitudin ut. Curabitur eleifend varius quam, nec sodales odio ullamcorper vel. Aliquam erat volutpat. Donec sagittis sodales tellus, nec sodales neque porttitor vel. Ut eu egestas risus, ac tristique erat. Ut vel faucibus orci. Donec lobortis iaculis commodo.
				<br>
				Praesent congue lectus semper ante vehicula accumsan. Integer id cursus ligula. Nullam ornare molestie tellus euismod scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tincidunt elit mi. Vestibulum accumsan ornare nunc, nec semper ante vulputate in. Donec mi elit, imperdiet quis augue sed, porta efficitur ipsum. Donec cursus augue eu venenatis auctor. Nullam lobortis ultricies dui, quis dignissim ligula viverra eu.
			</p>
			</div>
				<script type="text/javascript" src="js/slider.js"></script>
				<script type="text/javascript" src="js/addEventLocalStorage.js"></script>
				<script type="text/javascript" src="js/contactLocalStorage.js"></script>
				<script type="text/javascript" src="js/validacijaAddEvent.js"></script>
				<script type="text/javascript" src="js/contactValidacijaForme.js"></script>
				<script type="text/javascript" src="js/login.js"></script>		

			
		</div>
		<div class="footer">  
			<a href=pages/index.php>WT project v3.0 Spirala I </a> 
		</div><!--close footer-->	
	</div>		

</BODY>

</HTML>

	






