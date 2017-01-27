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
	header( 'Location: login.php' );
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
				<li class="active"><a href="Service.php">Service Projects</a></li>
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
			</ul><br>
			<ul class="nav nav-pills nav-stacked">
				<?php
					if(isset($_COOKIE["DS_UserID"]))
					{
						print "<li><h4>Welcome ".$_COOKIE["DesmetFirstName"]."</h4></li>";
						print "<form action=\"logoutScript.php\" class=\"form-horizontal\"> <div class=\"col-sm-12 text-center\">
					<button type=\"submit\" class=\"btn btn-default\"><strong>Logout</strong></button>
					<br>
				  </div><br>
				</form><br> ";
					}
					else
					{
						print "<li><a href='login.php'>Login</a></li>";
					}
					
				?>
			</ul> 
		</div>
		
		
				
<?php
	
  $sql = "SELECT S_Events.SE_Id, S_Events.SE_Name, S_Events.Description, Address.A_Name, Address.Street, Address.City, Address.State, Address.Zip
		  FROM S_Events
		  Join Address
		  ON S_Events.A_Id=Address.A_Id
		  Where s_events.SE_Id = ".$_GET['sid'].";";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    //echo "<table style='width:100%' border='1'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<div class='col-sm-10 col-md-10 col-lg-10'>";
		echo "<div class='container-fluid'>";
		echo "<h1>" . $row["SE_Name"] . "</h1>";
		
		echo $row["Description"] . "<br>";
		echo $row["A_Name"] . ", " . $row["Street"] . " " . $row["City"] . " " . $row["State"] . ", " . $row["Zip"] . "<br>";
		
		
		//echo "We Need: " . $row["Volunteers"] . " Volunteers.";
		
		
    }
    //echo "</table>";
} else {
    echo "0 results";
}
//break
	$mySid = $_GET["sid"];
  $sql = "SELECT S_Events_Time.StartTime, S_Events_Time.EndTime, S_Events_Time.SET_Id, S_Events_Time.Volunteers
		  FROM S_Events_Time
		  WHERE S_Events_Time.SE_Id = ".$mySid.";";
  $result = mysqli_query($conn,$sql);
  
  if ($result->num_rows> 0) {
    echo "<table style='width:100%' border='1'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$mySet = $row["SET_Id"];
		$sql2="SELECT Signups.SET_Id
			   FROM Signups
			   WHERE Signups.SET_Id=".$mySet.";";
		$result2 = $conn->query($sql2);
		$signedUp = $result2->num_rows;
	    	$openSlots = intval($row["Volunteers"]);
		if($_COOKIE["DS_UserTypeID"] == 1){

		if($openSlots > $signedUp)
		{
		echo "<tr><td align='center'>Start Time: " . $row["StartTime"] . "</td>" . "<td align='center'>" . " End Time: " . $row["EndTime"] . "</td>" . "<td>".$signedUp." total volunteers / ".$row['Volunteers']. " needed.</td>" . "<td align='center'><a href='SignupScript.php?sid=".$mySid."&set=".$mySet."'>Signup!</a></td></tr>";
		} else
		{
		echo "<tr><td align='center'>Start Time: " . $row["StartTime"] . "</td>" . "<td align='center'>" . " End Time: " . $row["EndTime"] . "</td>" . "<td>".$signedUp." total volunteers / ".$row['Volunteers']. " needed.</td>" . "<td align='center'>Signup!</td></tr>";
		}
		
		
		
		} else {
		echo "<tr><td align='center'>Start Time: " . $row["StartTime"] . "</td>" . "<td align='center'>" . " End Time: " . $row["EndTime"] . "</td>" . "<td>".$signedUp." total volunteers / ".$row['Volunteers']. " needed.</td>" . "<td align='center'><a href='Testimonial.php?set=".$mySet."'>Write Comments</a></td></tr>";
		}
		
		//echo $row["message"] . "<br>";
		
		
	}
    echo "</table>";
} else {
    echo "0 results";
}
	echo "<br>";
	
?>

				
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
