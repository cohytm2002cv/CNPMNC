<?php
session_start();
$username = $_SESSION['UserName'];
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


// $sql = "SELECT * FROM DonHang,CTDH where DonHang.IDorder=CTDH.IDDonHang" ;
// $result = $conn->query($sql);

// $HD=array();
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//       $HD[]=$row;
//       echo 'ok';
//       }
// } else {
//   echo "0 results";
// }

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM DonHang where IDorder=$id";
  $result = mysqli_query($conn, $sql);
  // $rowHinh = mysqli_fetch_row($result);

  $HoaDon = mysqli_fetch_row($result);



  $sql = "SELECT * FROM CTDH   where IDDonHang=$id ";
  $result = $conn->query($sql);
  $CT = array();


  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $CT[] = $row;
    }
  } else {
    echo "0 results";
  }
}








?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="bootstrap-5.3.0-alpha3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link href="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.css" rel="stylesheet">
  <script src="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.js"></script>
  <script src="https://kit.fontawesome.com/0d29d48e70.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./chitietDH-css.css">
  <!-- --dropdownmenu- -->
  <link rel="stylesheet" href="./dropdownmenu.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <div class="containerr">
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
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
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
                <li><a href="../admin/admin.php?UserName= <?= $_SESSION['UserName'] ?>" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông
                    tin</a>
                </li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li>
                <li><a href="./list/list.html" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách
                    tài
                    khảin</a></li>
                <li><a href="../admin/logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Đăng
                    xuất</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="noidung-contain">

      <div class="noidung">
        <div class="header">

          <div class="login">


          </div>
        </div>
        <div class="tieude">
          <h3>Chi Tiết Đơn Hàng</h3>
        </div>
        <div>
          <div style="display: flex; margin-left: 50px;">
            <div class="ipl">
              <p>Mã đơn</p>
              <p>Ngày Mua</p>
              <p>Tên</p>
              <p>sdt</p>
              <p>dia chi</p>
              <p>email</p>
            </div>

            <div class="ipr">
              <p><?php echo $HoaDon['0']?></p>
              <p>23/02/2024</p>
              <p><?php echo $HoaDon['1']?></p>
              <p>0<?php echo $HoaDon['3']?></p>
              <p> <?php echo $HoaDon['4']?></p>

              <p><?php echo $HoaDon['5']?></p>
            </div>
          </div>

          <h4 style="margin-left: 40px; margin-top: 30px;">sản phẩm đã mua</h4>

          <div class="sanpham">
            <div>
              <table>
                <tr>
                  <td>Stt</td>
                  <td>Hình</td>
                  <td colspan="2">Tên Sản Phẩm</td>
                  <td colspan="2">Giá Sản Phẩm</td>
                  <td colspan="2">Số Lượng</td>

                </tr>
                <?php foreach ($CT as $key => $value) : ?>
                <div >
                  <tr>
                    <td>1</td>
                    <td><img src="../img/device/14pro-1.jpeg" alt=""></td>
                    <td colspan="2"><?= $value['TenSP']; ?></td>
                    <td colspan="2"><?php echo  number_format($value['Gia']); ?> </td>
                    <td style="width: 80px;"><?= $value['SL']; ?></td>

                  </tr>
                </div>
                  
                <?php endforeach; ?>

              </table>
              
            </div>
            <div style="display: flex;">
                <div style="width: 80%;"></div>
                <div class="tongtienHD">Tổng Tiền: <span><?php echo number_format($HoaDon['2']);?></span></div>
              </div>


          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="footer"></div>



</body>
<script src="bootstrap-5.3.0-alpha3-examples/assets/js/color-modes.js"></script>

<script src="./bootstrap-5.3.0-alpha3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>

</html>