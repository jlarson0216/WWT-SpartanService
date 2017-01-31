<?php
		
			$usrName=$_POST["userName"];
			
			if(strpos($usrName," ") != False)
			{
				echo "Invalid Username.";
				
				exit();
			}
			
			$password=$_POST["password"];
			
			if(strpos($password," ") != False)
			{
				echo "Invalid Password.";
				
				exit();
			}		
			//$password=password_hash($password,"sha1");   //I am not sure if we will be using this or not.
			
			setcookie("DS_Password",$password,time()+900,true);
			setcookie("DS_UserName",$usrName,time()+900,true);
			
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
	$sql = "SELECT * FROM users WHERE DeSmet_ID='".$usrName."' AND Pass='".$password."';";
	#$sql = "SELECT * FROM users WHERE (DeSmet_ID='".$usrName."' OR Email='".$usrName."') AND Pass='".$password."';";
	$result = mysqli_query($conn, $sql);
			
			if($result->num_rows == 0)
			{
				
				
				echo "<script type='text/javascript'>alert('Invalid Login! Please Try Again')</script>";
				header('Location: login.php?error=1') ;
				
				exit();
			}
			else if($result->num_rows == 1)
			{
				$row=$result->fetch_assoc();
				
				setcookie("DS_UserTypeID",$row["UT_Id"],time()+900,true);
				setcookie("DS_UserID",$row["U_Id"],time()+900,true);
				setcookie("DesmetEmail",$row["Email"],time()+900,true);
				setcookie("DesmetPhoneNum",$row["Phone"],time()+900,true);
				setcookie("DesmetFirstName",$row["FirstName"],time()+900,true);
				setcookie("DesmetLastName",$row["LastName"],time()+900,true);
				setcookie("DesmetAddressId",$row["A_Id"],time()+900,true);
				setcookie("DesmetUserLoggedIn","true",time()+900,true);
				echo "Logged in successfully!";
				header( 'Location: index.php' ) ;
				exit();
				
			}
			else
			{
				echo "Multiple users fit the discription, unable to login.";
				header( 'Location: login.php?error=1' );
				exit();
			}
		
?>
<!DOCTYPE html>
<html>

	<title>
		Logging In...
	</title>
	
	<body>
	Cool
	</body>

</html>
