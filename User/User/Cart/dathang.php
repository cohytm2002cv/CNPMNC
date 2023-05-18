<?php session_start(); ?>


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


// -----
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




session_start();








?>





<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="../Cart/carrt.css">
  <link rel="stylesheet" href="../Cart/header.css">
    <link rel="stylesheet" href="./thanhcong.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="./footer.css">
  <!-- ---css icon -->
  <!-- <link rel="stylesheet" href="./icon/fontawesome-free-6.3.0-web/css/all.css"> -->
  <!-- <link rel="stylesheet" href="/icon/fontawesome-free-6.3.0-web/css/all.css"> -->

  <script src="https://kit.fontawesome.com/0d29d48e70.js" crossorigin="anonymous"></script>


  <!-- ---email-css-- -->

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <a href="../Home/Home.php" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>
    <ul class="navbar">
      <?php foreach ($tl as $key => $value) : ?>

        <li><a href="../Home/Menu.php?MaLoai=<?= $value['MaLoai']; ?>" . class="active">

            <?= $value['TenLoai']; ?>
          </a></li>

      <?php endforeach; ?>

    </ul>
    <div class="main">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>

      <a href="./cart.php" class="Cart">
        <i class="fa-solid fa-cart-shopping">
          <div class="numCart">
            <?php if (isset($_SESSION['cartt'])) : ?>

              <?php echo count($_SESSION['cartt']);; ?>
            <?php endif; ?>
          </div>
        </i>
      </a>
      <a href="../TaiKhoan/taikhoan.php" class="User"> <i class="fa-solid fa-user"></i>
        <?php echo $_SESSION['UserName'][0] ?>
      </a>
      </a>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>


  </header>

  <div class="thanhcong">
    
    <div class="TT" >
   <div class="check" ><i class="fa-solid fa-circle-check" style="color: #54c84c;"></i></div>
        <h2>ĐẶT HÀNG THÀNH CÔNG</h2>
        <p >Xem đơn hàng tại <a href="../DonHang/DSDonHang.php">Đơn Hàng Của Tôi</a></p>
        <a href="../Home/Home.php"><button class="btnMua" >TIẾP TỤC MUA HÀNG</button></a>
    </div>
   
  </div>

  </div>

  <!-- ---footer-- -->
  <div class="footer">
    <i class="cart-shopping-solid.svg"></i>

  </div>

</body>

<script src="https://www.paypal.com/sdk/js?client-id=AdoAuGakHOfZDULtRZn13WNOxPEEkzzBgnAXGimtTMddStNd9A-NtEFRDdWGxn8QzJ1yatJfaiSy0UAw&components=buttons"></script>

<script>


</script>

</html>
