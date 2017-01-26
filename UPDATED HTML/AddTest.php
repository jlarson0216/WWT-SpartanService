<!DOCTYPE html>

<html>

	<title>
		Adding Feedback...
	</title>
	
	<body>
		Please Wait, Adding Feedback...
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
			$mySet=$_GET["set"];
	$sql = "INSERT INTO S_Event_Time_Testimonial(SET_Id, message)
			VALUES(".$mySet.", '".$_POST['Test']."');";
	$result = mysqli_query($conn, $sql);
			
			if($result)
			{
				echo "Feedback Added Successfully!";
				header( 'Location: Service.php' ) ;
				exit();
			} 
			else
			{
				echo "Feedback was not added successfully.";
				exit();
			}
		
		?>
	</body>

</html>