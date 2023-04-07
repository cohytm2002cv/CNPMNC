<?php

$ProductID = $_GET['ID'];


$img1 = $_POST["diachi"];
$img22= $_POST["img2"];
$img33= $_POST["img3"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doan";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO imgDetail ( id,diachi, ProductID, img2,img3)
VALUES ('$ProductID','../img/chitiet/$img1','$ProductID','../img/chitiet/$img22','../img/chitiet/$img33')";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$img22."-".$img1;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

// header("location:../admin/list.php");

$conn->close();


?>
