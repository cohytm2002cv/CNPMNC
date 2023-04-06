<?php

$id = $_POST["id"];
$name = $_POST["name"];

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


$sql = "update Device set name='$name' where id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$name;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

header("location:../admin/list.php");

$conn->close();

?>