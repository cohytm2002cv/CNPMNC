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


$quati=$_POST["quantity"];
$ProductCode=$_POST["ProducCode"];

$cart =isset($_COOKIE["cart"]) ? $_COOKIE["cart"]:"[]";
$cart =json_decode($cart);



$sql = "SELECT *FROM SanPham where Masp=' ".$ProductCode."'";
$result = $conn->query($sql);

$product=mysqli_fetch_object($result);
array_push($cart,array(
    "productCode"=>$ProductCode,
    "quantity"=>$quati,
    "product"=>$product
));

setcookie("cart",json_encode($cart));
header("location:chitiet.php");

?>