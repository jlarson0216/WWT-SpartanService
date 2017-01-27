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
			</ul> 
			<br>
			
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				<br> <br>
			<ul class="nav nav-pills nav-stacked">
			
			<h1> Please Login First</h1>
				<form action="loginScript.php" method="post" class="form-horizontal">
				  <div class="form-group">
					<label for="userName" class="control-label col-sm-2">Username:</label>
					<div class="col-sm-9">
						<input type="userName" class="form-control" name="userName" id="userName">
					</div>	
				  </div>
				  <div class="form-group">
					<label for="password" class="control-label col-sm-2">Password:</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password" id="password">
					</div>
				  </div>
				  <?php
				  if(isset($_GET["error"]))
				  {
					  if($_GET["error"]==1)
					  {
						  echo "<center><div class=\"col-sm-offset-4 col-sm-4 alert alert-danger\">
							<strong>Invalid Login!</strong> Please try again.
						  </div></center>" ;
						  echo "<br>";
					  }
				  }
				  ?>
				
			      <div class="col-sm-12 text-center">
					<button type="submit" class="btn btn-default"><strong>Submit</strong></button>
					<br>
				  </div>
				  <br>
				  <br>
				</form>
			</ul> 
			<br>
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

