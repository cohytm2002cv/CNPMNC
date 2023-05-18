<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DoAn";
session_start();


if (isset($_SESSION['UserName'])) {
  $us = $_SESSION['UserName'][0];
  $role=$_SESSION['UserName'][1];

 
  header("location:../admin/$role.php?UserName={$us}");
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT *FROM TaiKhoan";
$result = $conn->query($sql);

$User = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $User[] = $row;
  }
} else {
  echo "0 results";
}

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "MaLoai: " . $User[0]["UserName"] . " Tenloai: " . $User[0]["Pass"] . "<br>";
  }
} else {
  echo "0 results";
}



session_start();

if (isset($_POST['dangnhap'])) {
  $username = $_POST['UserName'];
  $password = $_POST['Pass'];
  $sub = 'admin';

  foreach ($User as $key => $value) { //so sánh với table user
    $i = 0;

    if ($username == $value["UserName"] && $password == $value["Pass"]) {
      $role=$value['role'];
      if ($value['state'] == 'Kích Hoạt') {

        $_SESSION['UserName'] = array();
        array_push($_SESSION['UserName'], $username,$role); {
          if (strlen(strstr($username, $sub)) > 0) {

            header("location:../admin/admin.php?UserName={$username}");


          }
          else{
            header("location:../admin/us.php?UserName={$username}");
          }
        }
      } else {
        echo '<script>alert(" Tài Khoản Bị Vô Hiệu Hoá")</script>';
       
      }
    }

   
    $i++;
  }
  echo '<script>alert(" Tên Tài Khoản Hoặc Mật Khẩu Không Chính Xác")</script>';


}

$sqli = "SELECT * FROM phanloai";
$loai = $conn->query($sqli);
$tl = array();


if ($loai->num_rows > 0) {
  while ($rowl = $loai->fetch_assoc()) {
    $tl[] = $rowl;
  }
} else {
  echo "0 results";
}

?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chu</title>
  <link rel="stylesheet" href="./header.css">
  <link rel="stylesheet" href="./banner.css">
  <link rel="stylesheet" href="../dangnhap.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./style.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="../css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="../icon/fontawesome-free-6.3.0-web/css/all.css">
  <!-- ---email-css-- -->
  <link rel="stylesheet" href="../css/email.css">
  <link rel="stylesheet" href="./dangnhap2.css">
</head>

<body>
  <header>
    <a href="../Home/Home.php" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

    <ul class="navbar">
      <?php foreach ($tl as $key => $value) : ?>
        <li><a href="../Home/Menu.php?MaLoai=<?= $value['MaLoai']; ?>" . class="active"> <?= $value['TenLoai']; ?></a></li>
      <?php endforeach; ?>

    </ul>

    <div class="main">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>

      <a href="" class="Cart">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
      <a href="" class="User"> <i class="fa-solid fa-user"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>


  </header>
  <!-- -------dangnhap--- -->
  <div class="dangnhap">
    <div class="login">
      <form action="" method="post" class="form">
        <img src="./img/logo.jpg" alt="" />
        <h2>ĐĂNG NHẬP</h2>
        <div class="input">
          <input type="text" placeholder="Tên Đăng Nhập" name="UserName" id="loginUser" required />

        </div>
        <div class="input">
          <input type="password" placeholder="Mật khẩu" name="Pass" id="loginPwd" required />

        </div>
        <button name="dangnhap" type="submit" class="submit" onclick="validate()">
          Đăng nhập
        </button>
        <ul>
          <li><a href="#forgot-pwd" class="forgot">Quên mật khẩu</a></li>
          <li><a href="../TaiKhoan/dangky.php" class="register">Đăng ký</a></li>
          <li><a href="./home.html" class="register">Quay lại</a></li>
        </ul>
      </form>
    </div>
  </div>





  <!-- ---footer-- -->
  <div class="footer">
    <i class="cart-shopping-solid.svg"></i>
    saddd
  </div>





  <!-- --script -->

  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="../js/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>