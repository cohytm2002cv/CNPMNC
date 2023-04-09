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

    $sql = "DELETE FROM Device WHERE id=$ID";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    header('location:./ListProduct.php');



}

?>