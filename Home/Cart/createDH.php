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



$sql = "INSERT INTO DonHang ( KH, TongTien, SDT, DiaChi,email)
VALUES ( '$KH', '$tong',$SDT,'$DC','$Email')";

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

$sql = "INSERT INTO CTDH ( TenSP, Gia, IDDonHang,SL)
VALUES ( ' $nameP ', '$priceP','$lastid','$sl')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

?>