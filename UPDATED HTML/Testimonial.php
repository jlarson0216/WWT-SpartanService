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
<?php
if(!isset($_COOKIE["DS_UserID"]))
{
	header( 'Location: login.php' ) ;
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sparta";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="container-fluid">

	<div class="well well-sm">
		<div class="container-fluid">
			<div class="row">
				<div class="hidden-sm col-md-2">
					<img src="Media/DSJH80.png" alt="De Smet Logo" align=left class="img-responsive" height=80px>
				</div>
				<div class="hidden-sm col-md-8">
					<img src="Media/SpartanService.png" alt="Spartan Service Logo"  align=center class="img-responsive" height=80px> 
				</div>
				<div class="hidden-sm col-md-2">	
					<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right class="img-responsive" height=80px> 
				</div>
			</div>			
		</div>
	</div>


	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="Service.php">Service Projects</a></li>
				<li><a href="MyProfile.php">My Profile</a></li>
			</ul>
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
		</div>
	</div> 
	
<br>
<footer class="container-fluid text-center">
<div class="row">
	<div class="col-sm-2">
		<img src="Media/CRESTs.png" alt="De Smet Crest" class="img-responsive" height=80px align=center>
	</div>
	<div class="col-sm-8">
		<b> <span style="font-size: 20px">De Smet Jesuit High School</span> </b> <hr width=90%>
233 North New Ballas Rd. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; St. Louis, MO 63141 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us: <a href="mailto:SpartanService@desmet.org"> SpartanService@desmet.org 
	</div>
	<div class="col-sm-2">
		<img src="Media/SHs.png" alt="De Smet Logo" class="img-responsive" height=80px align=center>
	</div>
</div>
</footer>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>