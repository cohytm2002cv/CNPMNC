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


if (isset($_GET['Masp'])) {
  $Masp = $_GET['Masp'];
  $sql = "SELECT * FROM SanPham, PhanLoai where Masp=$Masp and PhanLoai.MaLoai=SanPham.LoaiSP";
  $result = mysqli_query($conn, $sql);
  $rowDe = mysqli_fetch_row($result);
}
//
// them gio hang




///
$sql = "SELECT * FROM SanPham,TrangThai where LoaiSP='1'and  MaTT=TrangThai and Hinhsp not like ''  limit 5 ";
$result = $conn->query($sql);
$Iphone = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Iphone[] = $row;
  }
} else {
  echo "0 results";
}



//
$sql = "SELECT * FROM SanPham  where LoaiSP  = '1'  limit 6";
$result = $conn->query($sql);
$Ipad = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Ipad[] = $row;
  }
} else {
  echo "0 results";
}



/////

if (isset($_GET['Masp'])) {
  $Masp = $_GET['Masp'];
  $sql = "SELECT * FROM Hinh where Masp=$Masp ";
  $result = mysqli_query($conn, $sql);
  $rowHinh= mysqli_fetch_row($result);
}





?>