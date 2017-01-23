<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Spartan Service</title>
  <link rel="icon" type="image/x-icon" href="Media/favicon.ico" alt="A picture of the De Smet Crest" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/BS.css">
  <link rel="stylesheet" href="css/SpartanCSS.css">
  <style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {height: 600px ;}
  </style>
</head>

<body>
<div class="container-fluid">

	<div class="row banner">
		<div class="hidden-xs hidden-sm col-lg-2">
			<img src="Media/DSJH80.png" alt="De Smet Logo" align=left  height=100%>
		</div>
		<div class="col-lg-8">
			<img src="Media/SpartanService.png" alt="Spartan Service Logo"  style="text-align:center" height=100%> 
		</div>
		<div class="hidden-xs col-lg-2">	
			<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right  height=100%> 
		</div>
	</div>	
<br>	

	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="Service.php">Service Projects</a></li>
				<li><a href="MyProfile.php">My Profile</a></li>
				<?php
					if ($_COOKIE["DS_UserTypeID"] == 2 or $_COOKIE["DS_UserTypeID"] == 0)
					print "<li><a href='addevent.php'>Add Event</a></li>";
				?>
			</ul> 
			<br>
		<br>
			
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				<h1> Welcome to the Spartan Service HomePage! Be a "Man For Others" by signing up for a number of Service opertunities with Spartan Service!<br></h1>
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
<center> 
 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
	
  </ol>
 
			<div class = "carousel-inner">
				<div class = "item active">
				<img height=100 src="Media/IMG_01.jpg" alt= "stuff"  class="img-responsive" class="img-rounded" >			
				</div>
				<div class = "item">
				<img height=500 src="Media/IMG_02.jpg" alt= "stuff"  class="img-responsive"  class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_03.jpg" alt= "stuff"  class="img-responsive" class="img-rounded" >			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_04.jpg" alt= "stuff"  class="img-responsive" class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_05.jpg" alt= "stuff" class="img-responsive"  class="img-rounded" >			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_06.jpg" alt= "stuff"  class="img-responsive" class="img-rounded" >			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_07.jpg" alt= "stuff"  class="img-responsive" class="img-rounded" >			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_08.jpg" alt= "stuff"   class="img-responsive" class="img-rounded" >			
				</div>
  
  </center>
  </div>
				
				  
		  
  <br>
				
			</div>
		</div>
	</div> 
	
<br>
<footer class="container-fluid text-center">
<div class="row">
	<div class="hidden-xs col-sm-2">
		<img src="Media/CRESTs.png" alt="De Smet Crest"  height=80px align=center>
	</div>
	<div class="col-sm-8">
		<b> <span style="font-size: 20px">De Smet Jesuit High School</span> </b> <hr width=90%>
233 North New Ballas Rd. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; St. Louis, MO 63141 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us: <a href="mailto:SpartanService@desmet.org"> SpartanService@desmet.org </a>
	</div>
	<div class="hidden-xs col-sm-2">
		<img src="Media/SHs.png" alt="De Smet Logo" height=80px align=center>
	</div>	
</div>
</footer>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>
