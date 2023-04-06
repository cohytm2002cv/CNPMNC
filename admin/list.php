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

$sql = "SELECT * FROM device  ";
$result = $conn->query($sql);
$Iphone = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Iphone[] = $row;
  }
} else {
  echo "0 results";
}
include_once("./deleteDevice.php");
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./list/list.css">

  <link href="bootstrap-5.3.0-alpha3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link href="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.css" rel="stylesheet">
  <script src="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.js"></script>

</head>

<body>


  <div class="contentt">
    <div class="content2">
      <div class="menu">
        <div class="flex-shrink-0 p-3" style="width: 280px;">
          <a href="" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
              <use xlink:href="" />
            </svg>
            <span class="fs-5 fw-semibold">LoGo</span>




          </a>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                QUẢN LÍ Thiết Bị
              </button>
              <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="../admin/addproduct.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Thêm Thiết Bị</a></li>
                  <li><a href="./list.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh Sách Thiết Bị</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                QUẢN LÍ THỐNG KÊ
              </button>
              <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Mã khuyến mãi</a>
                  </li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Phương thức thanh
                      toán</a></li>

                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                QUẢN LÍ DỊCH VỤ
              </button>
              <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li>
                </ul>
              </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                QUẢN LÍ TÀI KHOẢN
              </button>
              <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="./admin.html" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông tin</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li>
                  <li><a href="./lam.html" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách tài khảin</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Đăng xuất</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>

      </div>



      <div class="header"></div>

      <!-- ----làm trong này nè--- -->

      <div class="noidung2">

        <main class="container">

          <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <div class="lh-1">
              <h1 style="color: black;">Danh Sách Thiết Bị</h1>
            </div>
          </div>

          <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Tên Thiết Bị</h6>



            <?php foreach ($Iphone as $key => $value) : ?>

              <a href="">
                <div class="d-flex text-body-secondary pt-3">
                  <img width="100px" src="<?= $value['img']; ?>" alt="">                   
                <div class="info">
                <div class="thongtin-sp">
                  <p class="name">Tên:    <?= $value['name']; ?></p>
                  <p class="price">Giá:   <?= $value['price']; ?></p>
                </div>
                <div>
                
                <a href="../test/updateproducthtml.php?id=<?= $value['id']; ?>">
                  <button class="btnXoa">Sửa </button>
                </a>
                
                  <a href="../admin/deleteDevice.php?ID=<?= $value['id']; ?>" >
                    <button class="btnEdit" >Xoá </button>
                  </a>
                

                </div>
                </div>
                </div>
                <hr>
              </a>
            <?php endforeach; ?>

          </div>


        </main>

      </div>



    </div>



    <div class="footter"> footer</div>

  </div>

</body>

<script src="bootstrap-5.3.0-alpha3-examples/assets/js/color-modes.js"></script>

<script src="./bootstrap-5.3.0-alpha3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>

</html>