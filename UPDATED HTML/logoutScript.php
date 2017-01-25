<!DOCTYPE html>

<html>
	
	<title>
		Logging out...
	</title>
	
	<body>
		Please Wait, Logging Out...
		<?php
		
			#setcookie( "DesmetPassword" , "" , time() - 3600);
			setcookie( "DesmetUserName" , "" , time() - 3600);
			setcookie( "DS_U_Id" , "" , time() - 3600);
			setcookie( "DeSmet_Id" , "" , time() - 3600);
			setcookie( "DS_LastName" , "" , time() - 3600);
			setcookie( "DS_FirstName" , "" , time() - 3600);
			setcookie( "DS_UT_Id" , "" , time() - 3600);
			setcookie( "DS_A_Id" , "" , time() - 3600);
			setcookie( "DS_Email" , "" , time() - 3600);
			setcookie( "DS_Phone" , "" , time() - 3600);
			#setcookie( "DS_Pass" , "" , time() - 3600);
			#setcookie( "DS_Salt" , "" , time() - 3600);
			
			echo "Logged Out.";
			
			header( 'Location: index.php' );
			
			exit();
			
		?>
	</body>
</html>
