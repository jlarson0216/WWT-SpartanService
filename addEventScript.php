<!DOCTYPE html>

<html>

	<title>
		Adding Event...
	</title>
	
	<body>
		<?php
		if(isset($_COOKIE["DS_U_Id"]))
		{
			$nameEvent=$_GET["nameEvent"];
			$eventDescription=$_GET["eventDescription"];
			$street=$_GET["street"];
			$city=$_GET["city"];
			$state=$_GET["state"];
			$zip=$_GET["zip"];
			$eventStart=$_GET["eventStart"];
			$eventEnd=$_GET["eventEnd"];
			$quantity=$_GET["quantity"];
			$addressName=$_GET["addName"];
			
			$servername="127.0.0.1";
			$username="root";
			$password="";
			$dbname="sparta";
			
			$dbh=new mysqli_connect($servername,$username,$password,$dbname);
			$statement="INSERT INTO address (A_Name, Street, City, State, Zip) VALUES(".$addressName.",".$street.",".$city.",".$state.",".$zip.");";
			
			$result=mysql_query($statement);
			
			//query to get A_Id
			$statement="SELECT A_Id FROM address WHERE A_Name=".$addressName.";";
			
			$result=mysql_query($statement);
			
			$row=mysqli_fetch_assoc($result);
			
			$A_Id=$row["A_Id"];
			
			$statement="INSERT INTO S_Event (SE_Name,U_Id,A_Id,Description) VALUES(".$nameEvent.",".$_COOKIE["DS_U_Id"].",".$A_Id.",".$eventDescription.");";
			
			$result=mysql_query($statement);
			
			//query to get SE_Id
			$statement="SELECT SE_Id FROM S_Event WHERE SE_Name=".$nameEvent.";";
			
			$result=mysql_query($statement);
			
			$row=mysqli_fetch_assoc($result);
			
			$SE_Id=$row["SE_Id"];
			
			$statement="INSERT INTO S_Event_Time (SE_ID, StartTime, EndTime, Volunteers) VALUES(".$SE_Id.",".$eventStart.",".$eventEnd.",".$quantity.");";
			
			$result=mysql_query($statement);
			
			mysqli_close($dbh);
		}
		else
		{
			exit();
		}
		?>
	</body>
</html>