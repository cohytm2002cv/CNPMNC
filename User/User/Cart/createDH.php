<?php


session_start();
$tong=0;
foreach($_SESSION['cartt'] as  $value){
$tong=$tong+($value['price']*$value['qty']);
 }
echo $tong;
echo 'ok';
// echo $_SESSION['cartt'][63]['price'];


$KH =  $_REQUEST['KH'];
// $TT = $_REQUEST[$tong];
$SDT =  $_REQUEST['SDT'];
$DC = $_REQUEST['DiaChi'];
$Email = $_REQUEST['email'];
$PT = $_REQUEST['pt'];
$TK=$_SESSION['UserName'][0];

$tt='Đang xử lí';

$sql = "INSERT INTO DonHang ( KH, TongTien, SDT, DiaChi,email,pg,trangthai,UsName)
VALUES ( '$KH', '$tong',$SDT,'$DC','$Email','$PT','$tt','$TK')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$lastid = mysqli_insert_id($conn); 

echo "last id : ".$lastid; 

session_start();

foreach ($_SESSION['cartt'] as $cart) {
  $nameP= $cart['name']; 
  $priceP= $cart['price'];
  $sl=$cart['qty']; 
  $idpro=$cart['IDpro']; 
  $idpro=$cart['IDpro']; 
  $img=$cart['img']; 



$sql = "INSERT INTO CTDH ( TenSP, Gia, SL,IMG,IDDonHang)
VALUES ( ' $nameP ', '$priceP','$sl','$img','$lastid')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}



?>
<script>
      window.location.href = './dathang.php'; //Will take you to Google.

</script>