<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DoAn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$TK=$_SESSION['UserName'][0];

$sql = "SELECT * FROM DonHang where trangthai='đang xử lí' " ;
$result = $conn->query($sql);
$Ipad2=array();


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $Ipad2[]=$row;
  }
} else {
  // echo "0 results";
}
$sql = "SELECT * FROM DonHang where trangthai='đã xử lí' " ;
$result = $conn->query($sql);
$Ipad=array();


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $Ipad[]=$row;
  }
} else {
  // echo "0 results";
}

?>