<!DOCTYPE html>
<html>
<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sparta";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "Select * from Users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "id: " . $row["U_Id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
     }
} else {
     echo "0 results";
}

mysqli_close($conn);
?>  

</body>
</html>
