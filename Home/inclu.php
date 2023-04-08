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
  $sql = "SELECT * FROM Device where id=$Masp";
  $result = mysqli_query($conn, $sql);
  // $rowHinh = mysqli_fetch_row($result);

  $rowDe = mysqli_fetch_row($result);
}

// them gio hang




///
// $sql = "SELECT * FROM Product where cate='1'and  MaTT=TrangThai and Hinhsp not like ''  limit 5 ";
// $result = $conn->query($sql);
// $Iphone = array();


// if ($result->num_rows > 0) {
//   while ($row = $result->fetch_assoc()) {
//     $Iphone[] = $row;
//   }
// } else {
//   echo "0 results";
// }



//
$sql = "SELECT * FROM Device  where cate = '1'  limit 6";
$result = $conn->query($sql);
$Ipad = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Ipad[] = $row;
  }
} else {
  echo "0 results";
}
//lay hinh chi tiet
// if (isset($_GET['id'])) {
//   $Masp = $_GET['id'];
//   $sql = "SELECT * FROM imgDetail where ProductID=$Masp";
//   $result = mysqli_query($conn, $sql);
//   // $rowHinh = mysqli_fetch_row($result);

//   $img = mysqli_fetch_row($result);
// }
//lay ten loai sp ở menu

$sqli = "SELECT * FROM phanloai" ;
$loai = $conn->query($sqli);

$tl=array();

if ($loai->num_rows > 0) {
  while($rowl = $loai->fetch_assoc()) {
      $tl[]=$rowl;
  }
} else {
  echo "0 results";
}
/////

// if (isset($_GET['Masp'])) {
//   $Masp = $_GET['Masp'];
//   $sql = "SELECT * FROM Hinh where Masp=$Masp ";
//   $result = mysqli_query($conn, $sql);
//   $rowHinh= mysqli_fetch_row($result);
// }





?>