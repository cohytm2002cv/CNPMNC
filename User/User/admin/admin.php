<?php

session_start();
if(!isset($_SESSION['UserName'])){
  header('location:../TaiKhoan/taikhoan.php');

}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DoAn";


session_start();

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  if (isset($_GET['UserName'])) {
    $idTK = $_GET['UserName'];
    $sql = "SELECT *FROM TaiKhoan where  UserName='$idTK'";
    $result = mysqli_query($conn, $sql);
    // $rowHinh = mysqli_fetch_row($result);
  
    $rowDe = mysqli_fetch_row($result);
  }

 

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./admin.css">
  <link href="bootstrap-5.3.0-alpha3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link href="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.css" rel="stylesheet">
  <script src="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.js"></script>
  <link rel="stylesheet" href="./content-admin.css">
  <script src="https://kit.fontawesome.com/fcab3c1849.js" crossorigin="anonymous"></script>

</head>

<body>



  <div class="content">

    <div class="header"> <a href="../Home/Home.php"></a></div>
    <form action="" method="post">

    <div class="noidung">
      <div class="email">
        <h4>Thông Tin Đăng Ký</h4>

        <div class="trangthai">
          <span>Trạng Thái:</span>
          <div class="status"> <?php echo $rowDe[7] ?></div>
        </div>
      </div>
      <hr>
      <div class="email-email">
        <div class="thanh-email">
          <span style="margin-top: 10px; font-weight: bold;">Email</span>
          <div class="email-diachi"><?php echo $rowDe[6] ?></div>
        </div>
        <div class="btn-editMail">
    
          Đã Xác Minh
        </div>

      </div>

    </div>

    <div class="noidung2">
      <div class="email">
        <h4>Thông Tin Cá Nhân</h4>

      </div>
      <hr>
      <div class="info">
        <div class="email-email">
          <table>
            <tr>
              <td rowspan="2" style="padding-right: 30px;width: 100px;
            height: 100px;">
                <div class="ava"></div>
              </td>
              <td><button onclick="choose()" > <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                      d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                  </svg>
                  Tải Lên</button></td>

            </tr>
            <tr>
              <td>Định dạng .JPG, .JPEG, .PNG dung lượng thấp hơn 300 KB với kích thước tối thiểu 300x300 px</td>
            </tr>
          </table>
          <hr>
        </div>
        <hr style="margin: auto;margin-top: 20px;" width="90%;">
        <div class="thongtin">
          <div class="thongtin-chitiet">
            <p>Họ Tên</p>
            <input style=" padding-left: 10px;" type="text" name="teninp" placeholder="Nhập Họ Tên" id="" value="<?php echo $rowDe[2] ?>">
            <p>Tỉnh, Thành Phố</p>
            <input style=" padding-left: 10px;" type="text" name="diachiinp" placeholder="Nhập Tỉnh, Thành Phố" id=""value="<?php echo $rowDe[4] ?>">
          </div>
          <div class="thongtin-chitiet">
            <p></p>
            <label  style="margin-bottom: 42px;margin-top: 28px" for=""> <span>Tên Tài Khoản </span><span style="color:rgb(37, 126, 254);;" > <?php echo $rowDe[1] ?></span>  </label>
            <!-- <input style=" padding-left: 10px;" type="text" name="" placeholder="Nhập Ngày Sinh" id="" value="<?php echo $rowDe[1] ?>"> -->
            <p>Năm Sinh</p>
            <input style=" padding-left: 10px;" type="text" name="namsinhinp" id="" placeholder="Nhập năm sinh" value="<?php echo $rowDe[5] ?>">
          </div>
        </div>

        <div class="thongtin">
          <div class="thongtin-gt">
            <p style="font-weight: bold;"> Giới Tính</p>
            <input type="radio" name="" id="nam">
            <label for="gt">Nam</label>

            <input style="margin-left: 50px;" type="radio" name="gt" id="nu">
            <label for="gt">Nữ</label>
            <br><br>
            <p style="font-weight: bold;">Số diện thoại</p>
            <input style=" padding-left: 10px; width: 660px;height: 40px; margin-bottom: 50px;" type="text" name="sdtinp"
              placeholder="Nhập số điện thoại " value=" <?php echo $rowDe[3] ?>" >



          </div>

        </div>
       

      </div>

    <input type="hidden" name="ID" value="<?php echo $rowDe[2] ?>">
      <div class="save">
        <button class="btn-cancel"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg> Huỷ</button>
       <button type="submit"  class="btn-save" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> lưu thông tin</button>
      </div>
    </div>
    </form>

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
                <li><a href="../DonHang/DSDonHang<?php echo $rowDe[8] ?>.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh Sách Đơn Hàng</a>
                </li>


              </ul>
            </div>
          </li>
          <!-- <li class="mb-1">
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
          </li> -->
          <li class="border-top my-3"></li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
              data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              QUẢN LÍ TÀI KHOẢN
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../admin/<?php echo $rowDe[8] ?>.php?UserName=<?= $_SESSION['UserName'][0] ?>" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông
                    tin</a>
                </li>
                <!-- <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li> -->
                <li><a href="./DSuser.php" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách
                    tài
                    khoản</a></li>
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
include('./updInfo.php');
?>