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


	<div class="row banner">
		<div class="hidden-xs hidden-sm col-lg-2">
			<img src="Media/DSJH80.png" alt="De Smet Logo" align=left  height=100%>
		</div>
		<div class="col-lg-8">
			<img src="Media/SpartanService.png" alt="Spartan Service Logo"  style="text-align:center" class="img-responsive"height=100%> 
		</div>
		<div class="hidden-xs  hidden-sm hidden-md col-lg-2">	
			<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right  height=100%> 
		</div>
	</div><br>
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

$user = $_COOKIE["DS_UserID"]; //$_COOKIE["DS_U_Id"];
$sql = "Select * from Users Where U_ID = $user"; //originally U_ID = " . $user;

$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) 
{
	while($row=mysqli_fetch_assoc($result)) 
	{
		$Fname = $row["FirstName"];
		$Lname = $row["LastName"];
		$Username = $row["DeSmet_ID"];
		$email= $row["Email"];
		$phonenumber = $row["Phone"];
		$servicehours = 'Needs Working';
		$eventname = 'Needs Working';
		
	}	
}
else 
{
	echo "You have failed to create correct code.";
}
 mysqli_close($conn);
?>

	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
				<li><a href="Service.php">Service Projects</a></li>
				<li class="active"><a href="MyProfile.php">My Profile</a></li>
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
			<br>
			<br>
		</div>

	


	<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				
				<h1> <u>My Profile</u> </h1>
			
			<h2> <?php
			echo 'Welcome, ' . "$Fname" . " " . "$Lname";
				?>
				<h2>
			<h4></h4>
		
			<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Phone Number</th>
        <th>Projects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
			<?php
				echo "$Fname" . " " . "$Lname";
			?>
			<!---
			<?php
			
	echo $_COOKIE["DS_UserName"];
	echo $_COOKIE["DS_Password"];
	echo $_COOKIE["DS_UserTypeID"];
	echo $_COOKIE["DS_UserID"];
	
			?>
			--->
			
		
		</td>
		<td> 
		<?php
		echo "$Username"
		?>
		</td>
        <td>
			<?php
				echo "$email";
			?>
		</td>
        <td>
			<?php
				echo "$phonenumber";
			?>
		</td>
        <td>
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

$sql="SELECT SET_Id FROM signups WHERE U_Id='".$user."';";
$result = mysqli_query($conn,$sql);

//for

?>
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

$user= $_COOKIE["DS_UserID"];
$sql="SELECT SET_Id FROM signups WHERE U_Id='".$user."';";
$result = mysqli_query($conn,$sql);

for($i=0;$i<$result->num_rows;$i=$i+1)
{
	$row=$result->fetch_assoc();
	$SET_Id=$row["SET_Id"];
	
	$sql2="SELECT SE_ID FROM S_Events_Time WHERE SET_Id='".$SET_Id."';";
	$result2 = mysqli_query($conn,$sql2);
	$row2=$result2->fetch_assoc();
	$SE_ID=$row2["SE_ID"];
	
	$sql3="SELECT SE_Name FROM s_events WHERE SE_Id='".$SE_ID."';";
	$result3 = mysqli_query($conn,$sql3);
	$row3=$result3->fetch_assoc();
	$SE_Name=$row3["SE_Name"];
	echo "$SE_Name" . "<br>";
}
if ($result->num_rows == 0)
{
	echo "No Projects Completed";
}	

?>
		
		</td>
		
		
		
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
        
				
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



