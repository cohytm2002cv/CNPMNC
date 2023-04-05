<?php
include("./inclu.php");
$sql = "SELECT SUM(Giasp) as gia  FROM GioHang,SanPham where SanPham.Masp=GioHang.MaSP ";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row['gia']. " TenIMG: " . $row["MaGH"]. " " . $row["DiaChi"].  "<br>";
//   }
// } else {
//   echo "0 results";
// }

?>