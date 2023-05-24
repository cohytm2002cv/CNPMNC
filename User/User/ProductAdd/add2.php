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




$sql = "INSERT INTO ttdt ( ManHinh, Chip, Ram,Pin,IDPro,Camera)
VALUES ( ' 23 ', 'adađ','sds',9,92,'9')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }





?>