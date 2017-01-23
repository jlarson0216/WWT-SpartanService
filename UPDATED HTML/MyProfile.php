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
?>
<div class="container-fluid">


	<div class="well well-sm">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2">
					<img src="Media/DSJH80.png" alt="De Smet Logo" align=left class="img-responsive" height=80px>
				</div>
				<div class="col-lg-8">
					<img src="Media/SpartanService.png" alt="Spartan Service Logo"  align=center class="img-responsive" height=80px> 
				</div>
				<div class="col-lg-2">	
					<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right class="img-responsive" height=80px> 
				</div>
			</div>			
		</div>
	</div>


	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
				<li><a href="Service.php">Service Projects</a></li>
				<li class="active"><a href="MyProfile.php">My Profile</a></li>
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
				
				<h1> <u>My Profile</u> </h1>
			
			<h2> Welcome John Doe <h2>
			<h4> Your Current Progress: </h4>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> 50%
				</div>
			</div>
			<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
		<th>Name</th>
        <th>Year</th>
        <th>Hours</th>
        <th>Hours per Project</th>
      </tr>
    </thead>
    <tbody>
      <tr>
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
$sql = "Select * from Users WHERE U_Id = 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "<td>" . $row["FirstName"]. " " . $row["LastName"]. "</td>";
     }
} else {
     echo "0 results";
}
mysqli_close($conn);
?>  
        <td>Sophomore</td>
        <td>12</td>
        <td>Christmas on Campus: 5<br> Habitat for Humanity: 7</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
				
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




