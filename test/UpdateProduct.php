<?php
$id=24;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "select * from Device where id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$name = $row["name"];



echo

"<html>
<body>

<form action='php2.php' method='post'>
Student ID: $id<br>
<input type='hidden' name='id' value='$id'>
Name: <input type='text' name='name' value='$name'><br>

<br>
<input type ='submit'>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$conn->close();

?>