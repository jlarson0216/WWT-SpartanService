<!DOCTYPE html>

<html>

	<title>
		Signing Up...
	</title>
	
	<body>
		Please Wait, Signing Up...
		<?php
			
			$servername = "127.0.0.1";
			$username = "root";
			$pass = "";
			$dbname = "sparta";
			// Create connection
			$conn = mysqli_connect($servername, $username, $pass, $dbname);
			// Check connection
			if (!$conn) {
				 die("Connection failed: " . mysqli_connect_error());
				 	 
			}
			$mySid=$_GET["sid"];
			$mySet=$_GET["set"];
			date_default_timezone_set("America/Chicago");
			$date = date("Y-m-d H:i:s", strtotime("now"));
			
	$sql3 = "INSERT INTO Signups(U_Id, SET_Id, SignupTime)
			VALUES(".$_COOKIE["DS_UserID"].",".$mySet.",'".$date."');";
	$result3 = mysqli_query($conn, $sql3);
			
			if($result3)
			{
				echo "Signup Successful!";
				header('Location: congrats.php');
				exit();
			}
			else
			{
				echo "Signup was not succesful. Please logout and try again.";
				exit();
			}
		
		?>
	</body>

</html>