<?php

include_once("inclu.php");

?>

<?php session_start(); ?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>danh muc</title>
  <link rel="stylesheet" href="../Home/header.css">
  <link rel="stylesheet" href="./detail.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <-- Link Swiper's CSS -->

  <link rel="stylesheet" href="../Home/style-chitiet.css">
  <link rel="stylesheet" href="../Home/css/swiper-bundle.min.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="../footer.css">
  <link rel="stylesheet" href="../home/css/khuyenmai.css">
  <!-- ---css icon -->
  <link rel="stylesheet" href="../icon/fontawesome-free-6.3.0-web/css/all.css">
  <link rel="stylesheet" href="../Home/footer.css ">
  <link rel="stylesheet" href="./css/email2.css">

  <!-- ----chitiet---- -->
  <!-- <link rel="stylesheet" href="../home/css/slide-chitiet.css"> -->
  <link rel="stylesheet" href="./StarRating/style.css">





</head>

<body>
  <header>
    <a href="../Home/Home.php" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

    <ul class="navbar">
    <?php foreach($tl as $key=>$value): ?>

      <li  ><a style="color: #29fd53;" href="Menu.php?MaLoai=<?= $value['MaLoai']; ?>".> <?= $value['TenLoai']; ?></a></li>
    
      <?php endforeach; ?>

    </ul>

    <div class="main">
    <form action="./search2.php" method="get">
    <input class="ips" type="text" name="search" placeholder="Bạn Muồn Tìm Gì?">

    <button class="btnSearch"  type="submit" name="ok"><i  class="fa-solid fa-magnifying-glass"></i></button>
    
    
    </form>
      <a href="../Cart/cart.php" class="Cart">
        <i class="fa-solid fa-cart-shopping">
        <div class="numCart" > 
        <?php if (isset($_SESSION['cartt'])) : ?>
            <?php echo count($_SESSION['cartt']);; ?>
          <?php endif; ?>
        </div>
        </i>
      </a>
      <a href="../TaiKhoan/taikhoan.php" class="User"> <i class="fa-solid fa-user"> </i>
      <?php echo $_SESSION['UserName'][0]?> 

    </a>      <div class="bx bx-menu" id="menu-icon"></div>

    </div>
    <!-- -------- -->




  </header>
  <div class="link">
    <div class="link-link">
    <ul>
      
      
            <li><a href="./Home.php">Trang chủ</a></li>
            <span> ></span>
            <li><a href="menu.php?MaLoai=<?= $rowDe[9] ?>"> <?php echo $rowDe[10] ?></a></li>
            <span> ></span>
            <li><a href="chitiet.php?Masp=<?= $rowDe[0] ?>"> <?php echo $rowDe[1] ?></a></li>
            <a class="btn btn-outline-success" href="./Cart/cart.php"></a>
        </ul>
    </div>
  </div>
  <!-- ------main-body--- -->
  <div class="body-main">
    <div class="top">
      <div class="left">
        <div class="slideshow-container">



          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../img/<?=$rowDe['10']?>/<?= $rowDe['6']?>" style="width:100%">
            <!-- <img src="../Home/img/ip14/14-2.jpeg" alt=""> -->
          </div>
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../img/<?=  $rowDe[10] ?>/<?=  $rowDe['7'] ?> " style="width:100%">
            <!-- <img src="../Home/img/ip14/14-2.jpeg" alt=""> -->
          </div>
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../img/<?=  $rowDe[10] ?>/<?=  $rowDe[8] ?> " style="width:100%">
            <!-- <img src="../Home/img/ip14/14-2.jpeg" alt=""> -->
          </div>
      

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div class="slide-img">




        </div>

      </div>
      <div class="right">
        <div class="right-content">
          <h2><?php echo $rowDe[1] ?></h2>
          <!-- //ngóiao -->
          <!-- <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span> -->
            
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>

          <div class="gach"></div>
          <div class="gia">
            <div class="giamoi" id="price"><?php echo number_format($rowDe[2]);?></div>
            <div class="giacu" id="price">34000000</div>

          </div>
          <div class="dungluong">
            dung lượng
            <ul>
              <li>
                <label id="dl1" for="">128GB</label>
              </li>
              <li>
                <label id="dl2" for="">256GB</label>
              </li>
              <li>
                <label id="dl3" for="">512GB</label>
              </li>
              <li> <label id="dl4" for="">1TB</label>
              </li>

            </ul>
          </div>
          <div class="mau">
            màu sắc
            <ul>
              <li><span style="background-color:#4C4B49 ;"></span></li>
              <li><span style="background-color: #E3E5E3;"></span></li>
              <li><span style="background-color: #FCEBD3;"></span></li>
              <li><span style="background-color: #61586B;"></span></li>
            </ul>
          </div>
          <div class="chuongtrinh">
            <div class="km">
              <!-- <p class="p-km"> <i class="fa-solid fa-gift"></i> khuyến mãi</p>
              <ul>

                  <input type="radio" id="muathang" name="fav_language" value="muathang">
                  <label for="muathang">Mua thẳng</label><br>
                  <input type="radio" id="gop" name="fav_language" value="gop">
                  <label for="gop">Trả góp</label><br>
                  <input type="radio" id="baohanh" name="fav_language" value="baohanh">
                  <label for="baohanh">giá ưu đãi mua kèm bảo hành kim cương</label><br><br>

              </ul> -->
            </div>
            <div class="uudai">
              <p class="p-km"> <i class="fa-solid fa-gift"></i> Ưu đãi</p>
              <p>Mừng khai trương (duy nhất 25.03 - 26.03 - SL có hạn)</p>
              <p>iPhone 14 Pro Max 128GB giảm 10.000.000đ chỉ còn 26.990.000đ</p>

            </div>
          </div>
          <div class="mua">
            <a href="../Cart/cart.php?id=<?=  $rowDe[0]; ?>"> 
              <button class="btnmua"> MUA NGAY</button>
          </div>
        </div>
      </div>
    </div>
    <div class="bot">

      <h2>Các Sản Phẩm Gợi Ý</h2>
      <div class="contain">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

          <?php foreach($Ipad as $key=>$value): ?>
              
            <div class="swiper-slide">
              <div class="column">
              <a href="chitiet.php?id=<?= $value['id']; ?>".>

                <div class="card">
                  <img class="imgPhone" src='../img/<?=  $rowDe[10] ?>/<?= $value['img']; ?>'>
                  <p class="NamePhone"><?= $value['name']; ?></p>
                  <p class="price">
                  <?php echo number_format($value['price']);?>
                  </p>
                  </p>
                </div>
                </a>
              </div>
              
            </div>
            <?php endforeach; ?>


            


    
    
          
          
          
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>


      <!-- ----read-more-- -->

      <div class="thongtin">
        <!-- <h2 style="text-align:center;">Thông Tin</h2> -->
        <p><?php echo $rowDe[5] ?><br>
          <span id="dots"></span>
          <span id="more">
          
        </p>
        <!-- <button class="readmore" onclick="myFunction()" id="myBtn">Xem Thêm</button> -->
      </div>
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
  <div>
    <?= include('../footer/ft.php') ?>
  </div>





  <!-- --script -->
  <script src="../home/js/chitiet.js"></script>
  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="../home/js/swiper-bundle.min.js"></script>

  <script>
    var num = document.getElementsByName("price").textContent;
    let text = num.toLocaleString();

    document.getElementById("price").innerHTML = text;
  </script>

  <!-- ------goiy--- -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script src="../home/js/chitiet2.js"></script>
  <!-- -----readmore--- -->
  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Xem Thêm";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Thu Gọn";
        moreText.style.display = "inline";
      }
    }
  </script>


          <!-- ---addtocard-- -->
   
</body>

</html>