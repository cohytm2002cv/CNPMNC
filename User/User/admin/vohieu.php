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
if (isset($_GET['UserName'])) {

    $id=$_GET['UserName'];

    $sql = "update TaiKhoan set state ='Kích Hoạt' where UserName='$id' ";

}

// if (isset($_GET['ID'])) {

    

//     $id=$_GET['ID'];
//    echo"okkk";

//     $sql = "DELETE FROM TaiKhoan WHERE UserName=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
    
// }
            header('location:./DSuser.php');
