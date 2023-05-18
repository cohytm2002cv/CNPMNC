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

if (isset($_GET['ID'])) {

    

    $id=$_GET['ID'];
   

    $sql = "update DonHang set trangthai='Đã Xử Lí' where IDorder='$id' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
    
}
            header('location:./DSDonHangadmin.php');
?>