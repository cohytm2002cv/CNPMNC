<?php
session_start();
if(!isset($_SESSION['UserName'])){
  header('location:../home/taikhoan.php');
}


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



//truyvan

$Tensp = $_POST['pro-name'];
$Giasp = $_POST['pro-pri'];
$Hinhsp =  $_POST['pro-img'];
$SL=$_POST['pro-img-detail'];
$LoaiSP=$_POST['pro-mota'];
$Des=$_POST['pro-mota'];
$LoaiSP=$_POST['pro-mota'];
$TrangThai=$_POST['pro-mota'];




$sql = "SELECT *FROM Device ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " Tensp: " . $row["name"]. " " . $row["Giasp"]. "hinh ". $row["Hinhsp"].$row["TenTT"]. "MaGH: " .$row["MaGH"].  "<br>";
  }
} else {
  echo "0 results";
}
$sql = "SELECT *FROM Hinh ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["MaIMG"]. " TenIMG: " . $row["TenIMG"]. " " . $row["DiaChi"].  "<br>";
  }
} else {
  echo "0 results";
}





// $sql = "INSERT INTO Sanpham (Masp, Tensp, Giasp, Hinhsp, SL,LoaiSP,TrangThai)
// VALUES ('$Masp', '$Tensp', '$Giasp','../img/IPad/Pro/$Hinhsp','$SL','$LoaiSP','$TrangThai')";


// -----
$sql = "INSERT INTO Device ( name, price, img, des,cate)
VALUES ( '$Tensp', '$Giasp','../img/IPad/Pro/$Hinhsp','$Des','$LoaiSP')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("addproduct.php");





?>