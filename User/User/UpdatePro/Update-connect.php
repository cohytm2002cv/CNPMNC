<?php

$id = $_POST["id"];
$name = $_POST["name"];
$img=$_POST["imgsr"];
$price=$_POST["price"];
$cate=$_POST["cate"];
$des=$_POST["des"];

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

if($img==''){
$sql = "update Device set name='$name',price='$price',cate='$cate',des='$des'	 where id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$name;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}
}
else
{
	$sql = "update Device set name='$name',price='$price',cate='$cate',des='$des',img='$img'	 where id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$name;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}
}
header("location:../Product-list/ListProduct.php");

$conn->close();

?>