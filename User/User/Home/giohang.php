<!-- 
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
//thêm sản phâm vao giỏ
if (isset($_GET['id'])) {
  $Masp = $_GET['id'];
  $sql = "SELECT * FROM AddCart where ProductID=$Masp ";
  $result = mysqli_query($conn, $sql);
  $rowHinh = mysqli_fetch_row($result);
  $sql = "INSERT INTO AddCart (ProductID)
VALUES ('$Masp')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header("location:giohang.php");
}

// -----
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
////



$sql = "SELECT *FROM AddCart,Device where AddCart.ProductID=Device.ID ";
$result = $conn->query($sql);
$ad = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $ad[] = $row;
  }
} else {
  echo "0 results";
}
// ----sumgia--
$sql = "SELECT SUM(price) FROM AddCart,Device where Device.ID=AddCart.ProductID ";
$result = mysqli_query($conn, $sql);
$rowDe = mysqli_fetch_row($result);


// ----xoá----



////
// echo " <pre>";
// var_dump($data);
// echo " </pre>";
// // die;


?> -->


<html lang="en">


<head>
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
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="../css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="../icon/fontawesome-free-6.3.0-web/css/all.css">
  <!-- ---email-css-- -->
  <link rel="stylesheet" href="../css/email.css">
  <link rel="stylesheet" href="./giohang.css">
  <link rel="stylesheet" href="./style-chitiet.css">
  <link rel="stylesheet" href="./giohang2.css">



  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.delete-row').click(function() {
        $.post('delete.php?mode=delete', {
          row_id: $(this).data('row_id')
        }).done(function(data) {
          // Reload your table/data display
        });
      });
    });
  </script>
</head>

<body>
  <header>
    <a href="../Home/Home.php" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

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
      <a href="/Home/dangnhap.php" class="User"> <i class="fa-solid fa-user"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>


  </header>
  <!-- --noidunggiohang---- -->

  <div class="link">
    <div class="link-link">
      <ul>
        <li><a href="../Home.php">Trang chủ</a></li>
        <span> ></span>
        <li><a href="../IPhone/IPhone.html">IPhone</a></li>
        <span> ></span>
        <li><a href="../IPhone/IPhone.html">IPhone 14 Series </a></li>
      </ul>
    </div>
  </div>
  <div style="min-height: 600px; margin-left: 500px;" class="body-main">



    <table style="margin-top: 10px;min-height: 300px;">

      <tr class="index">
        <td>Hình Sản Phẩm</td>
        <td>Tên Sản Phẩm</td>
        <td>Giá</td>
        <td>Xoá</td>

      </tr>
      <?php foreach ($ad as $key => $value) : ?>

        <tr>
          <td><img src="<?= $value['img']; ?>" alt=""></td>
          <td> <?= $value['name']; ?></td>
          <td> <?= $value['price']; ?> </td>
          <td> <a href="delete.php?ID=<?= $value['ID']; ?>" .>
              <button style="   color:aliceblue ;width: 100px;
    height: 30px;    background-color: #0066CC;
">Delete</button></a>
          </td>
        </tr>
        <tr>

        </tr>

      <?php endforeach; ?>

    </table>
    <div class="thanhtien"><span style="font-weight: bold;">Tổng tiền</span>: <span style="font-size: 20px;font-Weight: bold"><?= $rowDe[0] ?></span> </div>
    <div class="btndathang">
      <a href="./Home.php">
        <button style="    width: 100px;
    height: 30px;" class="btndat"> Đặt hàng</button></a>

    </div>

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



  <!-- ---footer-- -->
  <div class="footer">
    <i class="cart-shopping-solid.svg"></i>
    saddd
  </div>





  <!-- --script -->

  <!-- <script src="./script.js"></script> -->
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
