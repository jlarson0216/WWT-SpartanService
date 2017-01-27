<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Spartan Service</title>
  <link rel="icon" type="image/x-icon" href="Media/favicon.ico" alt="A picture of the De Smet Crest" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/BS.css">
  <link rel="stylesheet" href="css/SpartanCSS.css">
	 
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
		<div class="hidden-xs  hidden-sm col-lg-2">	
			<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right  height=100%> 
		</div>
	</div><br>


	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
				<li><a href="Service.php">Service Projects</a></li>
				<li><a href="MyProfile.php">My Profile</a></li>
				<?php
				if(isset($_COOKIE["DS_UserID"]))
					{
						if ($_COOKIE["DS_UserTypeID"] == 2 || $_COOKIE["DS_UserTypeID"] == 0 )
						{
							print "<li class=\"active\"><a href='addevent.php'>Add Event</a></li>";
							
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
			<br>
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				<h1> Give Feedback:</h1>
				
				<?php
					echo "Max Character Length: 255";
					$mySet=$_GET["set"];
					echo "<form action='AddTest.php?set=".$mySet."' method='post'>";
				?>
				
				<textarea type="text" rows="4" cols="40" name="Test" placeholder="Write Comments Here"></textarea><br>
				<input type="submit" value="Submit"></input>
				</form>
				<br>
				
</div>
</strong>
				
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
