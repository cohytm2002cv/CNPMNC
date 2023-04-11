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


$sql = "SELECT * FROM Device,phanloai where MaLoai=cate" ;
$result = $conn->query($sql);
$Ipad=array();


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $SP[]=$row;
  }
} else {
  // echo "0 results";
}
session_start();
$username=$_SESSION['UserName'] ;

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh Sách Sản Phẩm</title>
  <link href="bootstrap-5.3.0-alpha3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link href="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.css" rel="stylesheet">
  <script src="./bootstrap-5.3.0-alpha3-examples/sidebars/sidebars.js"></script>
  <script src="https://kit.fontawesome.com/0d29d48e70.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./sanpham.css">
<link rel="stylesheet" href="./noidung.css">
  <!-- --dropdownmenu- -->
  <link rel="stylesheet" href="./dropdownmenu.css">
  <link rel="stylesheet" href="./iconList.css">


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
                <li><a href="../admin/admin.php?UserName= <?= $_SESSION['UserName']?>" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông
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
    <div class="noidung-contain">

      <div class="noidung">
        <div class="header">
         
          <div class="login">
            
            
          </div>
        </div>

        <div class="tieude"> <h3>Danh Sách Sản Phẩm</h3></div>
        <div>
          <table style="margin-bottom: 20px;">
            <tr class="title">
              <td width="150px">Hình</td>
              <td>ID</td>
              <td >Tên Sản Phẩm</td>
              <td>Giá</td>
              <td>Số Lượng</td>
              <td>Trạng thái</td>
              <td>Thao tác</td>
            </tr>

          </table>
          <table>
          <?php foreach($SP as $key=>$value): ?>
      
            <tr>  
              <td>
                <img width="150px" src="../img/<?= $value['TenLoai']; ?>/<?= $value['img']; ?>" alt="">
              </td>
              <td>123</td>
              <td><?= $value['name']; ?></td>
              <td><?php echo number_format($value['price']);?></td>
              <td>39</td>
              <td class="trangthai">Còn Hàng</td>
              <td> 
              <a href="../UpdatePro/UpdateProduct.php?id=<?= $value['id']?>"><button> <i class="fa-sharp fa-solid fa-eye"></i></button></a>

                <a onclick="return checkDelete()" href="./del.php?id=<?= $value['id']?>"><button> <i class="fa-sharp fa-solid fa-trash"></i> </button></a>
              </td>
              <hr width="80%" style="margin: auto;">
            </tr>
            <?php endforeach; ?>
            

          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="footer"></div>



</body>
<script src="bootstrap-5.3.0-alpha3-examples/assets/js/color-modes.js"></script>

<script src="./bootstrap-5.3.0-alpha3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
<script language="JavaScript" type="text/javascript">

function checkDelete(){
    return confirm('Bạn có muốn xoá?');
}
</script>
</html>