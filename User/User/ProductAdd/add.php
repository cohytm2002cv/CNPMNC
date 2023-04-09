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



//truyvan

$Tensp = $_POST['name'];
$Giasp = $_POST['price'];
$Hinhsp =  $_POST['img'];
$Des=$_POST['des'];
$LoaiSP=$_POST['cate'];
$IMG2=$_POST['img2'];
$IMG3=$_POST['img3'];
$IMG4=$_POST['img4'];

///hien thi loai
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






// -----
$sql = "INSERT INTO Device ( name, price, img, cate,img2,img3,img4)
VALUES ( '$Tensp', '$Giasp','../img/device/$Hinhsp','$LoaiSP','../img/device/$IMG2','../img/device/$IMG3','../img/device/$IMG4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// header("addproduct.php");

session_start();




?>