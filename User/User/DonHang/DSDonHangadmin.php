<?php



include_once("./DHconfigadmin.php");
session_start();
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
  <link rel="stylesheet" href="./addpro.css">
  <script src="https://kit.fontawesome.com/0d29d48e70.js" crossorigin="anonymous"></script>

  <!-- --dropdownmenu- -->
  <script src="./dropdown.js"></script>
  <link rel="stylesheet" href="./them.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <div class="containerr">
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
                <li><a href="../DonHang/DSDonHang<?= $_SESSION['UserName'][1] ?>.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh Sách Đơn Hàng</a>
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
              <li><a href="../admin/admin.php?UserName=<?= $_SESSION['UserName'][0] ?>" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông
                    tin</a>
                </li>
                <!-- <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li> -->
                <li><a href="../admin/DSuser.php" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách
                    tài
                    khoản</a></li>
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
          <div>ok</div>
        </div>
        <div class="tieude"> <h3>Đơn Hàng Chờ Xử Lí</h3></div>
        <div>
          <table style="margin-bottom: 20px;">

          <table>
            <tr class="title">
              <td >ID</td>
              <td>Người Mua</td>
              <td>Đơn Giá</td>
              <td>Số Điện Thoại</td>
              <td>Địa Chỉ</td>
              <td>Email</td>
              <td>Trạng thái</td>
              <td>Phương thức</td>
              <td>Thao tác</td>
            </tr>

            <?php foreach($Ipad2 as $key=>$value): ?>
              <tr>
             
              <td><?= $value['IDorder']; ?></td>
              <td><?= $value['KH']; ?></td>
              <td><?php echo number_format($value['TongTien']);?></td>  
              <td>0<?= $value['SDT']; ?></td>
              <td><?= $value['DiaChi']; ?></td>
              <td><?= $value['email']; ?></td>
              <td><?= $value['trangthai']; ?></td>
              <td><?= $value['pg']; ?></td>

              <!-- <td class="trangthai">trang thai</td> -->
              <td>
                <a onclick="return cancel()" href="./upd.php?ID=<?= $value['IDorder']; ?> "style="margin-right  : 20px;" href=""><i class="fa-solid fa-check"></i></a>
                <a style="margin-right: 20px;" href="./chitietDH<?= $_SESSION['UserName'][1] ?>.php?id=<?= $value['IDorder']; ?>"><i class="fa-sharp fa-solid fa-eye"></i></a>
               <a onclick="return checkDelete()" href="./deleteDH.php?ID=<?= $value['IDorder']; ?>"> <i class="fa-sharp fa-solid fa-trash"></i></a</td>
            </tr>
            <?php endforeach; ?>

          </table>


          <br>
          <br>  

          <div class="tieude"> <h3>Đơn Hàng Thành Công</h3></div>
          <table>
            <tr class="title">
              <td >ID</td>
              <td>Người Mua</td>
              <td>Đơn Giá</td>
              <td>Số Điện Thoại</td>
              <td>Địa Chỉ</td>
              <td>Email</td>
              <td>Trạng thái</td>
              <td>Phương thức</td>
              <td>Thao tác</td>
            </tr>

            <?php foreach($Ipad as $key=>$value): ?>
              <tr>
             
              <td><?= $value['IDorder']; ?></td>
              <td><?= $value['KH']; ?></td>
              <td><?php echo number_format($value['TongTien']);?></td>  
              <td>0<?= $value['SDT']; ?></td>
              <td><?= $value['DiaChi']; ?></td>
              <td><?= $value['email']; ?></td>
              <td><?= $value['trangthai']; ?></td>
              <td><?= $value['pg']; ?></td>

              <!-- <td class="trangthai">trang thai</td> -->
              <td>
                <!-- <a onclick="return cancel()" href="./upd.php?ID=<?= $value['IDorder']; ?> "style="margin-right  : 20px;" href=""><i class="fa-solid fa-check"></i></a> -->
                <a style="margin-right: 20px;" href="./chitietDH<?= $_SESSION['UserName'][1] ?>.php?id=<?= $value['IDorder']; ?>"><i class="fa-sharp fa-solid fa-eye"></i></a>
            </tr>
            <?php endforeach; ?>

          </table>
        </div>


        
      </div>

    </div>

  </div>
  <div>
    <?= include('../footer/ft.php') ?>
  </div>



</body>

<script src="bootstrap-5.3.0-alpha3-examples/assets/js/color-modes.js"></script>
<script src="./bootstrap-5.3.0-alpha3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
<script>
  function checkDelete(){
    return confirm('Bạn có muốn huỷ đơn hàng?');
}
function cancel(){
    return confirm('Đã xử lí ?');
}
</script>
</html>

