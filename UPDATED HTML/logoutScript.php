<!DOCTYPE html>

<html>
	
	<title>
		Logging out...
	</title>
	
	<body>
		Please Wait, Logging Out...
		<?php
		
			#setcookie( "DS_Password" , "" , time() - 3600);
			setcookie( "DS_UserTypeID" , "" , time() - 3600);
			setcookie( "DS_UserID" , "" , time() - 3600);
			setcookie( "DesmetEmail" , "" , time() - 3600);
			setcookie( "DesmetPhoneNum" , "" , time() - 3600);
			setcookie( "DesmetFirstName" , "" , time() - 3600);
			setcookie( "DesmetLastName" , "" , time() - 3600);
			setcookie( "DesmetAddressId" , "" , time() - 3600);
			setcookie( "DesmetUserLoggedIn" , "" , time() - 3600);
			
			echo "Logged Out.";
			
			header( 'Location: index.php' );
			
			exit();
			
		?>
	</body>
</html>
