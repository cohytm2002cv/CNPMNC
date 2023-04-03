<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DoAn";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['MaLoai'])) {
  $MaLoai = $_GET['MaLoai'];
  $sql = "SELECT * FROM SanPham where loaisp=$MaLoai  " ;
  $result = mysqli_query($conn, $sql);
  $rowDe = mysqli_fetch_row($result);
}
//truyvan
$sql = "SELECT * FROM SanPham where loaisp=$MaLoai  " ;
$result = $conn->query($sql);
$Iphone=array();


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $Iphone[]=$row;
  }
} else {
  echo "0 results";
}

include('Home.php')

////
// echo " <pre>";
// var_dump($data);
// echo " </pre>";
// // die;

?>
