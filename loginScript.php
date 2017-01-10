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
			
			//$password=password_hash($password,"sha1");   //I am not sure if we will be using this or not.
			
			setcookie("DesmetPassword",$password,time()+600,true);
			setcookie("DesmetUserName",$usrName,time()+600,true);
			
			$dbh=new mysqli("localhost","username","password");
			$loginStatement=$dbh->prepare("SELECT * FROM User WHERE U_Id=:usrName, Pass=:password VALUES(:usrName, :password)");
			
			$loginStatement->bindParam(':usrName',$usrName);
			$loginStatement->bindParam(':password',$password);
			
			$result=mysql_query($loginStatement);
			
			$dbh->close();
			
			if($result->num_rows <= 0)
			{
				echo "Not a valid user.";
				
				exit();
			}
			else if($result->num_rows == 1 )
			{
				$row=$result->fetch_assoc();
				
				setcookie("DesmetUserTypeID",$row["UT_Id"],time()+600,true);
				setcookie("DesmetEmail",$row["Email"],time()+600,true);
				setcookie("DesmetPhoneNum",$row["Phone"],time()+600,true);
				setcookie("DesmetFirstName",$row["firstName"],time()+600,true);
				setcookie("DesmetLastName",$row["lastName"],time()+600,true);
				setcookie("DesmetAddressId",$row["A_Id"],time()+600,true);
				setcookie("DesmetUserLoggedIn","true",time()+600,true);
				
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