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
<?php
if(!isset($_COOKIE["DS_UserID"]))
{
	header( 'Location: login.php' ) ;
}
?>
<div class="container-fluid">

	<div class="well well-sm">
			<div class="row">
				<div class="hidden-sm col-md-2">
					<img src="Media/DSJH80.png" alt="De Smet Logo" align=left height=80px>
				</div>
				<div class="hidden-sm col-md-8">
					<img src="Media/SpartanService.png" alt="Spartan Service Logo"  align=center  height=80px> 
				</div>
				<div class="hidden-sm col-md-2">	
					<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right class="img-responsive" height=80px> 
				</div>
			</div>			
	</div>


	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="Service.php">Service Projects</a></li>
				<li><a href="MyProfile.php">My Profile</a></li>
				<?php
					if ($_COOKIE["DS_UserTypeID"] == 2 or $_COOKIE["DS_UserTypeID"] == 0 )
					print "<li><a href='addevent.php'>Add Event</a></li>";
				?>
			</ul>
			<br>
			<br>
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				<h1> Service Projects</h1>
				
				<!--<table style="width:100%">
  <tr>
  
    <th>Provider</th>
    <th>Time</th> 
    <th>Event Name</th>
    <th>Location</th>
    <th>Description </th>
                </tr>
  <tr>
                <th><?php
				echo "balls"
				?></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>
  <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
  </tr>  
  </table>-->
<?php
  $sql = "SELECT s_events.SE_Name, address.A_Name, s_events.Description, s_events.SE_ID, address.Street, address.city, address.Zip FROM s_events Join address ON s_events.A_Id=address.A_Id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:100%' border='1'>
  
  <tr>
  
    <th>Provider</th>
    <th>Location</th>
    <th>Work Type</th>
    <th>Description</th>
                </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td><a href = 'Service.php?sid=".$row["SE_ID"]."'>".$row["A_Name"]."</a></td><td>".$row["Street"].", ".$row["city"]."  ".$row["Zip"]."</td><td>".$row["SE_Name"]."</td><td>".$row["Description"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>

				
				
				
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
