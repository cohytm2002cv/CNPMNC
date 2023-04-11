<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DoAn";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['Masp'])) {
  $Masp = $_GET['Masp'];
  $sql = "SELECT * FROM GioHang where MaSP=$Masp ";
  $result = mysqli_query($conn, $sql);
  $rowHinh= mysqli_fetch_row($result);
}

// -----
$sql = "INSERT INTO GioHang (MaSP)
VALUES ('$Masp')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT *FROM GioHang ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "MaGH: " . $row["MaGH"]. " Ten GH: " . $row["MaSP"]. " " . $row["DiaChi"].  "<br>";
  }
} else {
  echo "0 results";
}



?>