<?php
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doan";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ttdt  where IDPro = $id";
$kq = $conn->query($sql);


$kq = $conn->query($sql);

if ($kq->num_rows > 0) {

  $ct = $kq->fetch_assoc();

  

} else {
  echo "Not Found";
}


$sql = "select * from Device,phanloai,ttdt where cate=MaLoai and device.id='$id' and device.id=ttdt.IDPro  ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();

  $name = $row["name"];
  $price = $row["price"];
  $imgsr = $row["img"];
  $maloai = $row["TenLoai"];
  $des = $row["des"];
  $cate = $row["cate"];

} else {
  echo "Not Found";
}
$conn->close();

?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../admin/admin.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link rel="stylesheet" href="../admin/bootstrap-5.3.0-alpha3-examples/assets/dist/css/bootstrap.min.css">
  <link href="../admin/bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.css" rel="stylesheet">
  <script src="../admin/bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.js"></script>
  <link rel="stylesheet" href="../admin/content-admin.css">
  <link rel="stylesheet" href="../admin/content-admin.css">
  <link rel="stylesheet" href="./updateproduct.css">

  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>



  <div class="content">
    <div class="header"></div>

    <div class="noidung">


      <h2 style="padding-left: 50px;">Cập Nhật Sản Phẩm</h2>

      <div class="container">
        <form method="post" action="update-connect.php">

          <div class="img" style="margin-right: 30px; margin: auto;">
            <img src="../img/<?=$maloai?>/<?=$imgsr?>"  alt="">
            
           <a href="../admin/AddimgDetail.php?ID=<?= $id ?>">
            </a>
          </div>
          <div class="row">



          </div>
          <div class="container-update">



            <div class="row">
              <div class="col-25">
                <label for="pro-name">Tên Thiết Bị</label>
              </div>
              <div class="col-75">
                <input type="text" value="<?= $row['name']; ?>" name="name" placeholder=" Nhập tên thiết bị">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Giá Thiết Bị</label>
              </div>
              <div class="col-75">
                <input type="text" name="price" value="<?php echo ($row['price']);?>" placeholder="Nhập giá..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Mô Tả Thiết Bị</label>
              </div>
              <div class="col-75">
                <input type="text" name="des" value="<?= $row['des']; ?>" placeholder="Nhập mô tả..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Pin</label>
              </div>
              <div class="col-75">
                <input type="text" name="pin" value="<?= $row['Pin'] ?>" placeholder="Nhập mô tả..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Chip</label>
              </div>
              <div class="col-75">
                <input type="text" name="chip" value="<?= $row['Chip']; ?>" placeholder="Nhập mô tả..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Ram</label>
              </div>
              <div class="col-75">
                <input type="text" name="ram" value="<?= $row['Ram']; ?>" placeholder="Nhập mô tả..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Màn Hình</label>
              </div>
              <div class="col-75">
                <input type="text" name="mh" value="<?= $row['ManHinh']; ?>" placeholder="Nhập mô tả..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Camera</label>
              </div>
              <div class="col-75">
                <input type="text" name="cam" value="<?= $row['Camera']; ?>" placeholder="Nhập mô tả..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-loai">Loại</label>
              </div>
              <div class="col-75">
                <select id="pro-loai" name="cate" value="">

                  <option value="1">IPhone</option>
                  <option value="2">IPad</option>
                  <option value="3">MacBook</option>
                  <option value="4">Watch</option>
                </select>
              </div>
              
            </div>
            <div class="row">

              <div class="col-25">
              </div>
              <div class="col-75" >
                <input type="hidden" value="<?= $row['id']; ?>" name="id" placeholder=" Nhập tên thiết bị">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pro-pri">Chọn ảnh</label>
              </div>
              <div class="col-75">
                <input type="file" name="imgsr" value="<?= $row['imgr']; ?>" placeholder="Nhập mô tả..">
              </div>
              <div class="col-25">
                <label for="pro-pri">Chọn ảnh mô tả 1</label>
              </div>
              <div class="col-75">
                <input type="file" name="img2" value="<?= $row['img2']; ?>" placeholder="Nhập mô tả..">
              </div>
              <div class="col-25">
                <label for="pro-pri">Chọn ảnh mô tả 2</label>
              </div>
              <div class="col-75">
                <input type="file" name="img3" value="<?= $row['img3']; ?>" placeholder="Nhập mô tả..">
              </div>
              <div class="col-25">
                <label for="pro-pri">Chọn ảnh mô tả 3</label>
              </div>
              <div class="col-75">
                <input type="file" name="img4" value="<?= $row['img4']; ?>" placeholder="Nhập mô tả..">
              </div>
            </div>




          </div>


      </div>
      <div class="row" style="margin-top: 20px;">
        <input type="submit" value="Lưu Thay Đổi">
      </div>

      </form>
    </div>


  </div>


  </div>

  <div class="menu">
      <div class="flex-shrink-0 p-3" style="width: 280px;">
      <a href="../Home/Home.php" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
          <svg class="bi pe-none me-2" width="30" height="24">
            <use xlink:href="" />
          </svg>
          <span class="fs-5 fw-semibold">LoGo</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
              data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              QUẢN LÍ SẢN PHẨM
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../Product-list/ListProduct.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh sách sản Phẩm</a></li>
                <li><a href="../ProductAdd/AddProduct.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Thêm sản phẩm</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
              data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              QUẢN LÍ Đơn Hàng
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../DonHang/DSDonHang.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh Sách Đơn Hàng</a>
                </li>


              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
              data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
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
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
              data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              QUẢN LÍ TÀI KHOẢN
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../admin/admin.php?UserName=<?= $_SESSION['UserName']?>" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông
                    tin</a>
                </li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li>
                <li><a href="./list/list.html" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách
                    tài
                    khảin</a></li>
                <li><a href="../admin/logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Đăng xuất</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div>
    <?= include('../footer/ft.php') ?>
  </div>
</body>
<script src="bootstrap-5.3.0-alpha3-examples/assets/js/color-modes.js"></script>

<script src="./bootstrap-5.3.0-alpha3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>

</html>
<?php

?>