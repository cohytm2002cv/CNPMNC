


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form action="Phanloai.php" method="post">
    <table>
        <tr>
            <th>Masp:</th>
            <td><input id="MaLoai" type="text" name="MaLoai" value=""></td>
        </tr>

        <tr>
            <th>Ten sp:</th>
            <td><input id="TenLoai" type="text" name="TenLoai" value=""></td>
        </tr>

        
    </table>
    <button type="submit">Gửi</button>
</form>


</body>
</html>


<?php

session_start();
if(!isset($_SESSION['UserName'])){
  header('location:taikhoan.php');
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

$MaLoai = $_POST['MaLoai'];
$TenLoai = $_POST['TenLoai'];


$sql = "SELECT *FROM PhanLoai";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "MaLoai: " . $row["MaLoai"]. " Tenloai: " . $row["TenLoai"]. "<br>";
  }
} else {
  echo "0 results";
}




$sql = "INSERT INTO PhanLoai (MaLoai, TenLoai)
VALUES ('$MaLoai', '$TenLoai')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// -----


// //Lấy giá trị POST từ form vừa submit
// 			$Masp = $_POST["Masp"];
//   			$Tensp = $_POST["Tensp"];
//  			 $Giasp = $_POST["Giasp"];
//   			$Hinhsp = $_POST["Hinhsp"];
// 			  $SL=$_POST["SL"];
// 			  $LoaiSP=$_POST["LoaiSP"];
//   			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
// 			  if ($Masp == "" || $Tensp == "" || $Giasp == "" || $Hinhsp == ""|| $SL == ""|| $LoaiSP == "") {
// 				   echo "bạn vui lòng nhập đầy đủ thông tin";
				
//   			}else{
//   					// Kiểm tra tài khoản đã tồn tại chưa
					
//   					$sql="select * from Sanpham where Masp='$Masp'";
// 					$kt=mysqli_query($conn, $sql);

// 					if(mysqli_num_rows($kt)  > 0){
// 						echo "Tài khoản đã tồn tại";
// 					}else{
// 						//thực hiện việc lưu trữ dữ liệu vào db
// 	    				$sql = "INSERT INTO Sanham(
// 	    					Masp,
// 	    					Tensp,
// 	    					Giasp,
// 						    Hinhsp,
// 							SL,
// 							LoaiSP
// 	    					) VALUES (
// 	    					'$Masp',
// 	    					'$Tensp',
// 						    '$Giasp',
// 	    					'$Hinhsp',
// 							'$SL',
// 							'$LoaiSP',
// 	    					)";
// 					    // thực thi câu $sql với biến conn lấy từ file connection.php
//    						mysqli_query($conn,$sql);
// 				   		echo "chúc mừng bạn đã đăng ký thành công";
// 					}
									    
					
// 			  }


?>
