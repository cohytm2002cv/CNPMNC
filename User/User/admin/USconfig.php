<?php
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


$sql = "SELECT * FROM TaiKhoan" ;
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