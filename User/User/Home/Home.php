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




// $fp = @fopen('goc.php', "w");

// Kiểm tra file mở thành công không
// if (!$fp) {
//     echo 'Mở file không thành công';
// }
// else
// {
//     $data = " ";
//     fwrite($fp, $data);
// }
// die;

//truyvan



// $MaL = $_GET['MaLoai'];

$sql = "SELECT * FROM device where cate='1'  and img not like ''  limit 4 ";
$result = $conn->query($sql);
$Iphone = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Iphone[] = $row;
  }
} else {
  echo "0 results";
}


$sql = "SELECT * FROM device where cate='3'  and img not like ''  limit 4 ";
$result = $conn->query($sql);
$Mac = array();


if ($result->num_rows > 0) {
  while ($rowMac = $result->fetch_assoc()) {
    $Mac[] = $rowMac;
  }
} else {
  echo "0 results";
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
///
// $sqlLoai="SELECT*FROM PhanLoai";
// $kq = $conn->query($kq);
// $TLoai=array();


/////
$sql = "SELECT * FROM Device where cate='2' and img not like ''  limit 4 ";
$result = $conn->query($sql);
$Ipad = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Ipad[] = $row;
  }
} else {
  // echo "0 results";
}
session_start();

////
// echo " <pre>";
// var_dump($data);
// echo " </pre>";
// // die;

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
  <title>IPhone</title>
  <link rel="stylesheet" href="../home/header.css">
  <link rel="stylesheet" href="../Home/banner.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../Home/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./style.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="../home/css/khuyenmai.css">
  <link rel="stylesheet" href=".">
  <!-- ---css icon -->
  <link rel="stylesheet" href="../icon/fontawesome-free-6.3.0-web/css/all.css">
  <!-- ---email-css-- -->
  <link rel="stylesheet" href="../home/css/email.css">
  <link rel="stylesheet" href="../Home/style-chitiet.css">
</head>

<body>
  <header>
    <a href="" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

    <ul class="navbar">
      <?php foreach ($tl as $key => $value) : ?>
        <li><a href="Menu.php?MaLoai=<?= $value['MaLoai']; ?>" . class="active"> <?= $value['TenLoai']; ?></a></li>

      <?php endforeach; ?>

    </ul>

    <div class="main">
    <form action="./search2.php" method="get">
    <input class="ips" type="text" name="search" placeholder="Bạn Muồn Tìm Gì?">

    <button class="btnSearch"  type="submit" name="ok"><i  class="fa-solid fa-magnifying-glass"></i></button>
    
    
    </form>
      <a href="../Cart/cart.php" class="Cart">
        <i class="fa-solid fa-cart-shopping">
          <div class="numCart">
            <?php if (isset($_SESSION['cartt'])) : ?>
              <?php echo count($_SESSION['cartt']);; ?>
            <?php endif; ?>
          </div>
        </i>
      </a>
      <a href="../TaiKhoan/taikhoan.php" class="User"> <i class="fa-solid fa-user"></i>
      <?php echo $_SESSION['UserName'][0]?> 
    </a>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>


  </header>


  <div class="main-body">

    <!-- --banner-- -->
    <section class="main-banner swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img class="img" src="../img/banner/b2.jpeg" alt="">
        </div>

        <div class="slide swiper-slide">
          <img class="img" src="../img/banner/ban1.jpeg" alt="">
        </div>
      </div>


      <div class="swiper-button-next "></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>


    <!-- --khuyemai-- -->
    <div class="khuyenmai-contain">
      <div class="khuyemai">
        <img class="km" src="../img/khuyenmai/km1.jpeg" alt="">
        <img class="km" src="../img/khuyenmai/km1.jpeg" alt="">
        <img class="km" src="../img/khuyenmai/km1.jpeg" alt="">
      </div>
    </div>
    <!-- ---body -->

    <h2 class="Cate">IPhone</h2>

    <div class="row">

      <?php foreach ($Iphone as $key => $value) : ?>


        <a href="chitiet.php?id=<?= $value['id']; ?>" .>
          <div class="column">
            <div class="card">
              <!-- <div id="sta" class="status"> <?= $value['TenTT']; ?></div> -->
              <img class="imgPhone" src='../img/Iphone/<?= $value['img']; ?>'>
              <!-- <img class="imgPhone" src="../User/User/img/device/14-2.jpeg"> -->
              <p class="NamePhone"> <?= $value['name']; ?> </p>
              <div class="price-contain">
                <p class="price"> <?php echo number_format($value['price']); ?> </p>
                <!-- <p class="price-old">34.000.000</p> -->
              </div>
            </div>
          </div>
        </a>

      <?php endforeach; ?>




    </div>


    <p class="btn-all">
      <a href="../Home/Menu.php?MaLoai=1"><button>Xem tất cả IPhone</button></a>
    </p>


    <h2 class="Cate">IPad</h2>

    <div class="row">

      <?php foreach ($Ipad as $key => $value) : ?>

        <a href="chitiet.php?id=<?= $value['id']; ?>" .>
          <div class="column">
            <div class="card">
              <!-- <div id="sta" class="status">Tạm hết hàng</div> -->
              <img class="imgPhone" src='../img/IPad/<?= $value['img']; ?>'>
              <p class="NamePhone"> <?= $value['name']; ?> </p>
              <div class="price-contain">
                <p class="price"> <?= $value['price']; ?> </p>
                <!-- <p class="price-old">34.000.000</p> -->
              </div>
            </div>
          </div>
        </a>
      <?php endforeach; ?>


    </div>
  </div>


  <p class="btn-all">
  <a href="../Home/Menu.php?MaLoai=2"><button>Xem tất cả IPad</button></a>
  </p>
  <h2 class="Cate">MacBook</h2>

<div class="row">

  <?php foreach ($Mac as $key => $value) : ?>


    <a href="chitiet.php?id=<?= $value['id']; ?>" .>
      <div class="column">
        <div class="card">
          <!-- <div id="sta" class="status"> <?= $value['TenTT']; ?></div> -->
          <img class="imgPhone" src='../img/MacBook/<?= $value['img']; ?>'>
          <!-- <img class="imgPhone" src="../User/User/img/device/14-2.jpeg"> -->
          <p class="NamePhone"> <?= $value['name']; ?> </p>
          <div class="price-contain">
            <p class="price"> <?php echo number_format($value['price']); ?> </p>
            <!-- <p class="price-old">34.000.000</p> -->
          </div>
        </div>
      </div>
    </a>

  <?php endforeach; ?>




</div>


<p class="btn-all">
<a href="../Home/Menu.php?MaLoai=3"><button>Xem tất cả IPad</button></a>
</p>



  </div>

  <!-- ----gioithieu---- -->
  <div class="gioithieu">
    <a href=""> <img src="../img/banner/ban1.jpeg" alt="">
  </div></a>


  <!-- ---Email-- -->
  <div class="email">
    <h2>Đăng ký nhận thông tin từ ShopX</h2>
    <p>Thông tin sản phẩm mới nhất và chương trình khuyến mãi</p>
    <div class="sub">
      <input type="text" name="" placeholder="Nhập email của bạn... " id="email">
      <button>Subscribe</button>
    </div>
  </div>

  <!-- ---footer-- -->
  <div class="footer">
    <i class="cart-shopping-solid.svg"></i>
    
  </div>





  <!-- --script -->

  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="../Home/js/swiper-bundle.min.js"></script>
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
  <!-- <script>
  if(document.getElementById('sta').innerText =='1')
  {
   

  document.getElementById("sta").innerText = "Tam het hang";
}
else
{
  document.getElementById('sta').style.display='none';

}

</script> -->


  </script>
</body>

</html>