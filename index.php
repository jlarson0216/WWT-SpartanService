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
			<img src="Media/SpartanService.png" alt="Spartan Service Logo"  style="text-align:center" class="img-responsive"height=100%> 
		</div>
		<div class="hidden-xs  hidden-sm  hidden-md col-lg-2">	
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
				if(isset($_COOKIE["DS_UserID"]))
					{
						if ($_COOKIE["DS_UserTypeID"] == 2 || $_COOKIE["DS_UserTypeID"] == 0 )
						{
							print "<li><a href='addevent.php'>Add Event</a></li>";
							
						}
					}
					
				?>
			</ul> 
			<br>
			<ul class="nav nav-pills nav-stacked">
				<?php
					if(isset($_COOKIE["DS_UserID"]))
					{
						print "<li><h4>Welcome ".$_COOKIE["DesmetFirstName"]."</h4></li>";
						print "<form action=\"logoutScript.php\" class=\"form-horizontal\"> <div class=\"col-sm-12 text-center\">
					<button type=\"submit\" class=\"btn btn-default\"><strong>Logout</strong></button>
					
				  </div><br>
				</form><br> ";
					}
					else
					{
						print "<li><a href='login.php'>Login</a></li>";
					}
					
				?>
			</ul> 
			<br>
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				<h1> Welcome to the Spartan Service Homepage!<br></h1>
<div id="myCarousel" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">
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
	
  </ol>
 
			<div class = "carousel-inner">
				<div class = "item active">
				<img height=100 src="Media/IMG_01.jpg" alt= "stuff"  class="img-responsive" class="img-rounded">			
				</div>
				<div class = "item">
				<img height=500 src="Media/img_02.jpg" alt= "stuff"  class="img-responsive"  class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_03.jpg" alt= "stuff"  class="img-responsive" class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_04.jpg" alt= "stuff"  class="img-responsive" class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_05.jpg" alt= "stuff" class="img-responsive"  class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/Img_06.jpg" alt= "stuff"  class="img-responsive" class="img-rounded">			
				</div>
				<div class = "item">
				<img height=600 src="Media/IMG_07.jpg" alt= "stuff"  class="img-responsive" class="img-rounded">			
				</div>
			  
  </center>
  </div>
				
				  
		  
  <br>
				
			</div>
<p>"Today our prime educational objective must be to form men and women for others; men and women who will live not for themselves but for God and his Christ - for the God-man who lived and died for all the world; men and women who cannot even conceive of love of God which does not include love for the least of their neighbors; men and women completely convinced that the love of God which does not issue in justice for men and women is a farce."
<br>
<br>
These words of Father Pedro Arrupe, S.J., former Superior General of the Society of Jesus, give focus to the education that is offered to the young men of De Smet Jesuit High School.
<br>
<br>
Students are led to understand that talents are gifts to be developed, not for self-satisfaction or self-gain, but rather, with the help of God, for the good of the human community. Students are encouraged to use their gifts in the service of others, out of a love for God.
<br>
<br>
To achieve this, De Smet Jesuit offers a four-year, comprehensive service program, which encourages students to become other-centered.
<br>
<br>
Freshmen learn more about the De Smet Jesuit community by giving of their time at school events. Sophomores offer time at school, and are encouraged to help in neighborhoods and church communities. Each Monday juniors leave campus to work at one of more than 120 area service agencies. On Tuesdays they bring these experiences into class and relate them to their readings. Often, as seniors, the students continue their work with these service agencies in other capacities. Many students participate in our service-learning trips to Honduras, Belize, South Dakota, or New Orleans to learn from and help those in need.
		</div>
	</div> 
	
<br>
<footer class="container-fluid text-center">
<div class="row">
	<div class="hidden-xs col-sm-2">
		<img src="Media/CRESTs.png" alt="De Smet Crest"  height=80px align=center>
	</div>
	<div class="col-sm-8">
		<b> <span style="font-size: 20px">De Smet Jesuit High School</span> </b> <hr width=97%>
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