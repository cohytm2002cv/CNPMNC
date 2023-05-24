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


if (isset($_GET['id'])) {
    $ID = $_GET['id'];
    // $sql = "DELETE FROM ttdt WHERE IDPro=$ID";

    // if ($conn->query($sql) === TRUE) {
    //   $sql = "DELETE FROM Device WHERE id=$ID";
     
  
    // } else {
    //   echo "Error deleting record: " . $conn->error;
    // }
    // header('location:./ListProduct.php');



    $sql = "DELETE FROM ttdt WHERE IDPro=$ID";
        if ($conn->query($sql) === TRUE) {
         $ses=$_SESSION['UserName'][1];
         $sql = "DELETE FROM Device WHERE id=$ID";
         if ($conn->query($sql) === TRUE) {
          echo "thanh cong";
        
                
            } else {
              echo "Error deleting record: " . $conn->error;
            }
          }



          } else {
            echo "Error deleting record: " . $conn->error;
          }
          header('location:./ListProduct.php');





?>