<?php
session_start();


$id = $_SESSION['UserName'][0];
$ten = $_POST["teninp"];
$dc=$_POST["diachiinp"];
$namsinh=$_POST["namsinhinp"];
$sdt=$_POST["sdtinp"];


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


$sql = "update TaiKhoan set HoTen='$ten',SDT='$sdt',NamSinh='$namsinh',DiaChi='$dc' where UserName='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$name;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}



// header("location:../admin");

$conn->close();

?>