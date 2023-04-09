<?php


session_start();
if(isset($_SESSION['UserName'])){
    unset($_SESSION['UserName']);
}
header('location:../TaiKhoan/taikhoan.php');
?>
