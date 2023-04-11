


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form action="" method="post">
    <table>


        <tr>
            <th>Ten sp:</th>
            <td><input id="Tensp" type="text" name="Tensp" value=""></td>
        </tr>

        <tr>
            <th>gia sp:</th>
            <td><input id="Giasp" type="text" name="Giasp" value=""></td>
        </tr>

        <tr>
            <th>hinh sp:</th>
            <td><input type="file"  name="Hinhsp"></td>
        </tr>
		<tr>
            <th>so luong:</th>
            <td><input id="SL" type="text" name="SL" value=""></td>
        </tr>
		<tr>
            <th>loai sp:</th>
            <td><input id="LoaiSP" type="text" name="LoaiSP" value=""></td>
        </tr>
        <tr>
            <th>trang thai:</th>
            <td><input id="TrangThai" type="text" name="TrangThai" value=""></td>
        </tr>

        <tr>
            <th>Dia Chi IMG:</th>
            <td><input id="DiaChi" type="text" name="DiaChi" value=""></td>
        </tr>
        <tr>
            <th>Ten IMG:</th>
            <td><input id="TenIMG" type="text" name="TenIMG" value=""></td>
        </tr>
        <tr>
            <th>ma img:</th>
            <td><input id="Masp2" type="text" name="Masp2" value=""></td>
        </tr>
    </table>
    <button type="submit">Gửi</button>
</form>

</body>
</html>


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

$Masp = $_POST['Masp'];
$Tensp = $_POST['Tensp'];
$Giasp = $_POST['Giasp'];
$Hinhsp =  $_POST['Hinhsp'];
$SL=$_POST['SL'];
$LoaiSP=$_POST['LoaiSP'];
$TrangThai=$_POST['TrangThai'];
$MaIMG=$_POST['MaIMG'];
$DiaChi=$_POST['DiaChi'];
$TenIMG=$_POST['TenIMG'];
$Masp2 = $_POST['Masp2'];


$sql = "SELECT *FROM Sanpham ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Masp"]. " Tensp: " . $row["Tensp"]. " " . $row["Giasp"]. "hinh ". $row["Hinhsp"].$row["TenTT"]. "MaGH: " .$row["MaGH"].  "<br>";
  }
} else {
  echo "0 results";
}
$sql = "SELECT *FROM Hinh ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["MaIMG"]. " TenIMG: " . $row["TenIMG"]. " " . $row["DiaChi"].  "<br>";
  }
} else {
  echo "0 results";
}





// $sql = "INSERT INTO Sanpham (Masp, Tensp, Giasp, Hinhsp, SL,LoaiSP,TrangThai)
// VALUES ('$Masp', '$Tensp', '$Giasp','../img/IPad/Pro/$Hinhsp','$SL','$LoaiSP','$TrangThai')";


// -----
$sql = "INSERT INTO Sanpham ( Tensp, Giasp, Hinhsp, SL,LoaiSP,TrangThai)
VALUES ( '$Tensp', '$Giasp','../img/IPad/Pro/$Hinhsp','$SL','$LoaiSP','$TrangThai')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO Hinh (MaIMG, DiaChi, Masp,TenIMG)
VALUES ('$MaIMG','../img/IPad/Pro/$DiaChi','$Masp2','$TenIMG')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

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
