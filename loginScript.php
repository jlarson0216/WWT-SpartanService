<!DOCTYPE html>

<html>

	<title>
		Logging In...
	</title>
	
	<body>
		Please Wait, Logging In...
		<?php
		
			$usrName=$_GET["userName"];
			
			if(strpos($usrName," ") != False)
			{
				echo "Invalid Username.";
				
				exit();
			}
			
			$password=$_GET["password"];
			
			if(strpos($password," ") != False)
			{
				echo "Invalid Password.";
				
				exit();
			}
			
			//$password=password_hash($password,"sha1");   //I am not sure if we will be using this or not. //this is where password hashing is done, I have not implemented salting, but maybe it should be, I honestly don't know
			
			setcookie("DesmetPassword",$password,time()+600,true);
			setcookie("DesmetUserName",$usrName,time()+600,true);
			
				
			$servername="127.0.0.1";
			$username="root";
			$password="";
			$dbname="sparta";
			
			$dbh=new mysqli_connect($servername,$username,$password,$dbname);
			
			if (!$conn)
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$loginStatement="SELECT * FROM Users WHERE U_Id=".$usrName.", Pass=".$password.";";
			
			$result=mysql_query($loginStatement);
			
			mysqli_close($dbh);
			
			if(mysqli_num_rows($result) <= 0)
			{
				echo "<marquee>Not a valid user.</marquee>";
				
				exit();
			}
			else if(mysqli_num_rows($result) == 1 )
			{
				$row=mysqli_fetch_assoc($result);
				
				if($row["date_deleted"] == NULL)
				{
					setcookie("DS_U_Id",$row["U_Id"],time()+600,true);
					setcookie("DeSmet_Id",$row["DeSmet_Id"],time()+600,true);
					setcookie("DS_LastName",$row["LastName"],time()+600,true);
					setcookie("DS_FirstName",$row["FirstName"],time()+600,true);
					setcookie("DS_UT_Id",$row["UT_Id"],time()+600,true);
					setcookie("DS_A_Id",$row["A_Id"],time()+600,true);
					setcookie("DS_Email",$row["Email"],time()+600,true);
					setcookie("DS_Phone",$row["Phone"],time()+600,true);
					#setcookie("DS_Pass",$row["Pass"],time()+600,true); //I don't think we will need it but just in case
					#setcookie("DS_Salt",$row["Salt"],time()+600,true); //I don't think we will need it but just in case
				}
				
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