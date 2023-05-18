

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
    <?php foreach($tl as $key=>$value): ?>
      <li><a href="../Home/Menu.php?MaLoai=<?= $value['MaLoai']; ?>". class="active"> <?= $value['TenLoai']; ?></a></li>
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
        <h2>ĐĂNG KÝ</h2>
        <div class="input">
          <input type="text" placeholder="Tên Đăng Nhập" name="un" id="UserName"  />

        </div>
        <div class="input">
        <input type="text" placeholder="email" name="email" required>
        </div>
        <div class="input">
        <input type="password" placeholder="Mật Khẩu" id="password" name="Password" required>
        </div>
        <div class="input">
        <input type="password" placeholder="Xác Nhận Mật Khẩu" id="confirm_password" required>
        </div>
        <div class="input">
        <input type="text" placeholder="ho ten" name="hoten" required>
        </div>

        <div class="input">
        <input type="text" placeholder="sdt" name="sdt" required>
        </div>
        <div class="input">
        <input type="text" placeholder="namsinh" name="namsinh" required>
        </div>
        <div class="input">
        <input type="text" placeholder="diachi" name="diachi" required>
        </div>
        <!-- <div class="input">
          <input type="password" onchange="check()" placeholder="Nhập Lại Mật khẩu" name="Passcf" id="Passcf" required />

        </div> -->
        <!-- <button name="dangky" type="submit" class="submit" onclick="validate()"> -->
        <input  type="submit" value="Đăng ký">
      
        <!-- </button> -->
        <ul>
          <li><a href="#forgot-pwd" class="forgot">Quên mật khẩu</a></li>
          <li><a href="./dangky.html" class="register">Đăng ký</a></li>
          <li><a href="../TaiKhoan/taikhoan.php" class="register">Quay lại</a></li>
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
  <script>
      var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>
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

$Username=$_POST['un'];
$Pass=$_POST['Password'];
$sdt=$_POST['sdt'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$hoten=$_POST['hoten'];
$namsinh=$_POST['namsinh'];
$role='us';



$sql = "INSERT INTO TaiKhoan (Pass,Username,HoTen,SDT,DiaChi,NamSinh,Email,state,role)
VALUES ( '$Pass','$Username','$hoten','$sdt','$diachi','$namsinh','$email','Kích Hoạt','$role' )";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert(" đăng ký thành công")</script>';
  echo "<script>
  window.location.href = './taikhoan.php'; //Will take you to Google.

</script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}









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