<?php
$servername = "localhost";
$username = "projectuser";
$password = "test";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from imatable";
$result = $conn->query($sql);

if( $result->num_rows >0) 
{
	while($row = $result->fetch_assoc())
	{
		echo $row["freaking"]. "<br>";
	}
}
else
{
	echo "0 results";
}
$conn->close();
?>

