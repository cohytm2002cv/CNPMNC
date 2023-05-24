<?php
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


if (isset($_GET['id'])) {
  $Masp = $_GET['id'];
  $sql = "SELECT * FROM Device,phanloai where id=$Masp and MaLoai=cate";
  $result = mysqli_query($conn, $sql);
  // $rowHinh = mysqli_fetch_row($result);

  $rowDe = mysqli_fetch_row($result);
}
if (isset($_GET['id'])) {
  $Masp = $_GET['id'];
$sql = "SELECT * FROM ttdt  where IDPro = $Masp";
$result = $conn->query($sql);
$tt = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $tt[] = $row;
  }
} else {
  echo "0 results";
}
}


//
$sql = "SELECT * FROM Device  where cate = $rowDe[9]  limit 6";
$result = $conn->query($sql);
$Ipad = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Ipad[] = $row;
  }
} else {
  echo "0 results";
}

$sqli = "SELECT * FROM phanloai";
$loai = $conn->query($sqli);

$tl = array();

if ($loai->num_rows > 0) {
  while ($rowl = $loai->fetch_assoc()) {
    $tl[] = $rowl;
  }
} else {
  echo "0 results";
}



?>