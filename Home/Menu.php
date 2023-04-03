
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

if (isset($_GET['MaLoai'])) {
  $MaLoai = $_GET['MaLoai'];
  $sql = "SELECT * FROM SanPham where loaisp=$MaLoai  " ;
  $result = mysqli_query($conn, $sql);
  $rowDe = mysqli_fetch_row($result);
}
//truyvan
$sql = "SELECT * FROM SanPham where loaisp=$MaLoai  " ;
$result = $conn->query($sql);
$Iphone=array();


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $Iphone[]=$row;
  }
} else {
  echo "0 results";
}

// lấy tên loại ở link
if (isset($_GET['MaLoai'])) {
  $MaLoai = $_GET['MaLoai'];
  $sql = "SELECT * FROM Phanloai where MaLoai=$MaLoai  " ;
  $result = mysqli_query($conn, $sql);
  $rowTenLoai = mysqli_fetch_row($result);
}

////
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

<html lang="en">

<head>
  <!-- <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>danh muc</title>
  <link rel="stylesheet" href="./header.css">
  <link rel="stylesheet" href="../banner-chitiet.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./style-chitiet.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="./css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="../icon/fontawesome-free-6.3.0-web/css/all.css">

  <link rel="stylesheet" href="../css/khuyenmai.css">
  <link rel="stylesheet" href="../css/email.css">



  <!-- ---------- -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IPhone</title>
  <link rel="stylesheet" href="./header.css">
  <link rel="stylesheet" href="./banner.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./style.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="/footer.css">
  <link rel="stylesheet" href="../css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="./icon/fontawesome-free-6.3.0-web/css/all.css">
  <!-- ---email-css-- -->
  <link rel="stylesheet" href="./css/email.css">

  
</head>

<body>
  <header>
    <a href="" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

    <ul class="navbar">
    <?php foreach($tl as $key=>$value): ?>

      <li><a href="Menu.php?MaLoai=<?= $value['MaLoai']; ?>". class="active"> <?= $value['TenLoai']; ?></a></li>
    
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
<div class="link">
    <div class="link-link">
        <ul>
            <li><a href="./Home.php">Trang chủ</a></li>
            <span> ></span>
            <li><a href="Menu.php?MaLoai=<?= $rowTenLoai[0] ?>"><?php echo $rowTenLoai[1] ?></a></li>

        </ul>
    </div>
</div>
  <h1 class="CateName">IPhone</h1>

  <div class="main-body">

<!-- --banner-- -->
    <section class="main-banner swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img class="img" src="../img/banner/ban1.jpeg" alt="">
        </div>

        <div class="slide swiper-slide">
          <img class="img" src="../img/banner/b2.jpeg" alt="">
        </div>
      </div>


      <div class="swiper-button-next "></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>



</div>
  <!-- ---body -->
<div class="loai">
    <ul>
        <li> <a style="color: #0066CC;" href="./IPhone.html">Tất cả</a></li>
        <li><a href="./IPhone14.html">IPhone 14 Series</a></li>
        <li><a href="">IPhone 13 Series</a></li>
        <li><a href="">IPhone 12 Series</a></li>
    </ul>
</div>
<!-- ---danh-sach-dien thoai-- -->


  <div class="row">

  <?php foreach($Iphone as $key=>$value): ?>


<a href="chitiet.php?Masp=<?= $value['Masp']; ?>"]>
<div class="column">
  <div class="card">
    <div id="sta" class="status"> <?= $value['TenTT']; ?></div>
    <img class="imgPhone" src= <?= $value['Hinhsp']; ?>>
    <p class="NamePhone"> <?= $value['Tensp']; ?> </p>
    <div class="price-contain">
    <p class="price"> <?= $value['Giasp']; ?> </p>
    <!-- <p class="price-old">34.000.000</p> -->
    </div>
    </div>
    </div>
  </a>

<?php endforeach; ?>
  </div>
  


  
 <!-- ---Email-- -->
<div class="email">
 <h2>Đăng ký nhận thông tin từ ShopX</h2>
 <p>Thông tin sản phẩm mới nhất và chương trình khuyến mãi</p>
 <div class="sub">
 <input type="text" name="" placeholder="Nhập email của bạn... " id="email">
 <button>Subscribe</button>
</div>
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