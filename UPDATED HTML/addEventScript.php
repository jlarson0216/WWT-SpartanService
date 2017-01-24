<!DOCTYPE html>

<html>

	<title>
		Adding Event...
	</title>
	
	<body>
		<?php
		if(isset($_COOKIE["DS_UserID"]))
		{
			$nameEvent=$_POST["nameEvent"];
			$eventDescription=$_POST["eventDescription"];
			$street=$_POST["street"];
			$city=$_POST["city"];
			$state=$_POST["state"];
			$zip=$_POST["zip"];
			$eventStart=$_POST["eventStart"];
			$eventEnd=$_POST["eventEnd"];
			$quantity=$_POST["quantity"];
			$addressName=$_POST["addName"];
			
			$servername="127.0.0.1";
			$username="root";
			$password="";
			$dbname="sparta";
			
			$dbh= mysqli_connect($servername,$username,$password,$dbname);
			
			$statement="INSERT INTO address (A_Name, Street, City, State, Zip) VALUES ('".$addressName."','".$street."','".$city."','".$state."',".$zip.");";
			
			$result=mysqli_query($dbh, $statement);
			
			//query to get A_Id
			//$statement="SELECT A_Id FROM address WHERE A_Name='".$addressName."';";
						
			//$result=mysqli_query($dbh,$statement);
			
			//$row=mysqli_fetch_assoc($result);
			
			//$A_Id=$row["A_Id"];
			$A_Id=mysqli_insert_id($dbh);
			
			$statement="INSERT INTO S_Events (SE_Name,U_Id,A_Id,Description) VALUES ('".$nameEvent."',".$_COOKIE["DS_UserID"].",".$A_Id.",'".$eventDescription."');";
			
			$result=mysqli_query($dbh, $statement);
			
			//query to get SE_Id
			//$statement="SELECT SE_Id FROM S_Event WHERE SE_Name='".$nameEvent."';";
			
			//$result=mysqli_query($dbh, $statement);

			//$row=mysqli_fetch_assoc($result);
			
			//$SE_Id=$row["SE_Id"];
			$SE_Id=mysqli_insert_id($dbh);
			
			$statement="INSERT INTO S_Events_Time (SE_ID, StartTime, EndTime, Volunteers) VALUES(".$SE_Id.",'".$eventStart."','".$eventEnd."',".$quantity.");";
			
			$result=mysqli_query($dbh, $statement);
			
			mysqli_close($dbh);
			echo "Event Added Successfully";
			header( 'Location: index.php' ) ;
			exit();
		}
		else
		{
			echo "Please Go Back and Log In";
			exit();
		}
		?>
	</body>
</html>
