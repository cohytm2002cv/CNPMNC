<!-- <?php session_start(); ?> -->


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
////


// if (isset($_GET['id'])) {
//   $Masp = $_GET['id'];
//   $sql = "SELECT * FROM Device where id=$Masp";
//   $result = mysqli_query($conn, $sql);
//   // $rowHinh = mysqli_fetch_row($result);

//   $rowDe = mysqli_fetch_row($result);
// }

// ----giohang----



session_start();



// Check if product is coming or not




// If session cart is not empty
if (isset($_GET['id'])) {

  $proid = $_GET['id'];
  $sql = "SELECT * FROM Device where id=$proid";
  $result = mysqli_query($conn, $sql);
  // $rowHinh = mysqli_fetch_row($result);

  $rowDe = mysqli_fetch_row($result);
  $gia = $rowDe[2];
  $name = $rowDe[1];
  $img=$rowDe[3];

  // If session cart is not empty
  if (!empty($_SESSION['cartt'])) {

    // Using "array_column() function" we get the product id existing in session cart array
    $acol = array_column($_SESSION['cartt'], 'id');

    // now we compare whther id already exist with "in_array() function"
    if (in_array($proid, $acol)) {

      // Updating quantity if item already exist
      $_SESSION['cartt'][$proid]['qty'] += 1;
    } else {
      // If item doesn't exist in session cart array, we add a new item
      $item = [
        'id' => $_GET['id'],
        'qty' => 1,
        'price' => $gia,
        'name' => $name,
        'img'=>$img
      ];

      $_SESSION['cartt'][$proid] = $item;
    }
  } else {
    // If cart is completely empty, then store item in session cart
    $item = [
      'id' => $_GET['id'],
      'qty' => 1,
      'price' => $gia,
      'name' => $name,
      'img'=>$img

    ];

    $_SESSION['cartt'][$proid] = $item;
  }
}
?>

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
  <title>Cart</title>
<link rel="stylesheet" href="../User/Cart/carrt.css">
<link rel="stylesheet" href="../User/Cart/header.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- --css footer-- -->
  <link rel="stylesheet" href="../Home/footer.css">
  <!-- ---css icon -->
  <!-- <link rel="stylesheet" href="./icon/fontawesome-free-6.3.0-web/css/all.css"> -->
  <!-- <link rel="stylesheet" href="/icon/fontawesome-free-6.3.0-web/css/all.css"> -->
  <script src="https://kit.fontawesome.com/0d29d48e70.js" crossorigin="anonymous"></script>

  <!-- ---email-css-- -->

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <a href="../Home.php" class="logo"><i class="ri-home-fill"></i><span>logo</span></a>

    <ul class="navbar">
      <?php foreach ($tl as $key => $value) : ?>

        <li><a href="../Menu.php?MaLoai=<?= $value['MaLoai']; ?>" . class="active">
            <?= $value['TenLoai']; ?>
          </a></li>

      <?php endforeach; ?>

    </ul>
    <div class="main">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>

      <a href="./cart.php" class="Cart">
        <i class="fa-solid fa-cart-shopping">
        <div class="numCart" > 
        <?php if (isset($_SESSION['cartt'])) : ?>
            <?php echo count($_SESSION['cartt']);; ?>
          <?php endif; ?>
        </div>
        </i>
      </a>
      <a href="" class="User">
        <i class="fa-solid fa-user"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>


  </header>

  <div class="cart-contain">
    <div class="trai">
      <div class="tren">
        <div class="cart">

          <table>
            <tr>
              <td>Hình</td>
              <td>Tên</td>
              <td>Giá</td>
              <td>Số Lượng</td>
              <td></td>
            </tr>
            <?php

            if (isset($_SESSION['cartt'])) :
              $i = 1;

              foreach ($_SESSION['cartt'] as $cart) :
            ?>


                <tr>  
                  <td style="width:30px">
                    <img src="<?= $cart['img']?>" alt="">
                    
                  </td>

                  <td><?= $cart['name']; ?></td>
                  <td> <?php echo number_format($cart['price']);?></td>

                  <td style="width:200px">
                    <form action="update.php" method="post">
                      <input style="margin-left: -30px;" type="text" value="<?= $cart['qty']; ?>" name="qty" min="1">
                      <input type="hidden" name="upid" value="<?= $cart['id']; ?>">
                      <input type="submit" name="update" value="Update" class="upd">
                  </td>

                  </form>
                  </dt>
                  <td style="width:50px">
                    <a href="./removecartitem.php?id=<?= $cart['id']; ?>"><span>
                        Xoá </span>
                    </a>
                  </td>


                </tr>
            <?php
                $i++;
              endforeach;
            endif;
            ?>

          </table>
        </div>
      </div>
      <div>
        <div>
          <h2> Thong Tin Thanh Toán
          </h2>
        </div>
      </div>
      <div class="duoi">
        <div  class="thongtin div-form">
          <div class="form">
            <form action="" method="post">
            <div class="div-form">
              <label for="">Họ Tên</label>
              <input type="text" name="KH" id="" placeholder="Họ Tên">
            </div>
            <div class="div-form">
              <label for="">Số Điện Thoại</label>
              <input type="text" name="SDT" id="" placeholder="Số Điện Thoại">
            </div>
            <div class="div-form">
              <label for="">Email</label>
              <input type="text" name="email" id="" placeholder=" Email">
            </div>
            <div class="div-form">
              <label for="">Địa Chỉ</label>
              <input type="text" name="DiaChi" id="" placeholder="Địa Chỉ Giao Hàng">
            </div>
            <input class="mua" type="submit"  value="Đặt Hàng">
            </form>
          </div>
        </div>
      </div>

    </div>
    <div class="giua"></div>
    <div class="phai">
      <div class="thongtin">
        <div class="thanhtien">
          <div style="display: flex;">
            <input class="mgg" type="text" name="mgg" id="" placeholder="Mã Giảm Giá">
            <button class="apply">ap dung</button>
          </div>
          <div class="tien">
            <span style="margin-top: 5px;">Tổng cộng</span>
            <span class="bill" style="font-size: 25px;">
             
              <?php 
              
               session_start();
               $tong=0;
               foreach($_SESSION['cartt'] as  $value){
                  
                    $tong=$tong+($value['price']*$value['qty']);

               }
               echo number_format("$tong");

            
              //  echo $_SESSION['cartt'][63]['price']*$_SESSION['cartt'][63]['qty'] ?>
                      vnđ  </span>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- ---footer-- -->
  <div class="footer">
    <i class="cart-shopping-solid.svg"></i>

  </div>

</body>

</html>
<?php
include_once('../Cart/createDH.php');
?>