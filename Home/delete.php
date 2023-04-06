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

echo"ok";

if (isset($_GET['ID'])) {
    $MaGH = $_GET['ID'];

    $sql = "DELETE FROM AddCart WHERE ID=$MaGH";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }

}
header('location:giohang.php');

?>