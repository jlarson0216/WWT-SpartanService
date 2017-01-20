<!DOCTYPE html>

<html>

	<title>
		Logging In...
	</title>
	
	<body>
		Please Wait, Logging In...
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
			
			setcookie("DS_Password",$password,time()+600,true);
			setcookie("DS_U_Id",$usrName,time()+600,true);
			
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
	$sql = "SELECT U_Id, UT_Id FROM users WHERE DeSmet_ID='".$usrName."' AND Pass='".$password."';";
	$result = mysqli_query($conn, $sql);
	
	//if ($stmt = mysqli_prepare($conn, $sql))
    //$sql="SELECT * FROM users WHERE U_Id=? AND Pass=?"
    /* bind parameters for markers */
    //mysqli_stmt_bind_param($stmt, "ss", $usrName, $password);
    //mysqli_stmt_execute($stmt);
    //mysqli_stmt_bind_result($stmt, $result);

	//$rows = array();
	//print_r($result);
    /* fetch values */
    //while($row = mysqli_fetch_assoc($result)) {
    //    printf("%s\n", $result);
	//	array_unshift($rows, $row);
    //}
	

    //mysqli_stmt_close($stmt);

/*
    
    mysqli_stmt_execute($stmt);

  
    mysqli_stmt_bind_result($stmt, $result);

   
    mysqli_stmt_fetch($stmt);

    
    mysqli_stmt_close($stmt);
*/


//else{
//echo "cool";
//}
			//$dbh=mysqli_connect("127.0.0.1","root","","sparta");
			/*$sql=mysqli_prepare($conn, "SELECT * FROM User WHERE U_Id=? AND Pass=?");
			
			mysqli_stmt_bind_param($sql, 'ss', $usrName, $password);
			
			$result=mysql_query($conn, $sql);
			
			$conn->close();
			*/
			//echo "1";
			//print_r($result);
			//echo "2";
			
			if($result->num_rows == 0)
			{
				echo "Not a valid user.";
				
				exit();
			}
			else if($result->num_rows == 1)
			{
				$row=$result->fetch_assoc();
				
				setcookie("DS_UserTypeID",$row["UT_Id"],time()+600,true);
				setcookie("DS_UserID",$row["U_Id"],time()+600,true);
				//setcookie("DesmetEmail",$row["Email"],time()+600,true);
				//setcookie("DesmetPhoneNum",$row["Phone"],time()+600,true);
				//setcookie("DesmetFirstName",$row["firstName"],time()+600,true);
				//setcookie("DesmetLastName",$row["lastName"],time()+600,true);
				//setcookie("DesmetAddressId",$row["A_Id"],time()+600,true);
				setcookie("DesmetUserLoggedIn","true",time()+600,true);
				echo "Logged in successfully!";
				header( 'Location: index.php' ) ;
				exit();
				
			}
			else
			{
				echo "Multiple users fit the discription, unable to login.";
				
				exit();
			}
		
		?>
	</body>

</html>