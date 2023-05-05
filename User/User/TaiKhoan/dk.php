<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DoAn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Username=$_POST['un'];;
$Pass=$_POST['pa'];

$sql = "INSERT INTO TaiKhoan ( UserName,Pass)
VALUES ( '$UserName', '$Pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $sql = "INSERT INTO TaiKhoan (UserName, Pass)
// VALUES ('$UserName','$Pass')
// WHERE NOT EXISTS (
//     SELECT name FROM TaiKhoan WHERE Username=$UserName
// );";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }







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

?>
