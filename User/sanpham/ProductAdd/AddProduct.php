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
                <li><a href="../Product-list/DSsanpham.html" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh sách sản phẩm
                    </a></li>
                <li><a href="./AddProduct.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Thêm sản phẩm</a>
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
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Danh Sách Đơn
                    Hàng</a>
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
                <li><a href="./admin.html" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông
                    tin</a>
                </li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li>
                <li><a href="./list/list.html" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách
                    tài
                    khảin</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Đăng xuất</a></li>
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

            a
          </div>
          <div>ok</div>
        </div>



        <div class="add-pro">
          <div class="add-contain">
            <div class="tieude">
              <h3>Thêm Sản Phẩm</h3>
            </div>
            <form method="post" action="">
              <div>
                <p>Tên Sản Phẩm</p>
                <input type="text" name="name" id="">
              </div>

              <div>
                <p><label for="des">Mô Tả Sản Phẩm</label></p>
                <textarea id="w3review" name="des" rows="4" cols="61"></textarea>
              </div>
              <div>
                <p>Giá sản phẩm</p>
                <input type="text" name="price" id="">
              </div>
              <div>
                <label style="font-weight: bold;" for="cate">Loại Sản Phẩm:</label>

                <select name="cate">
                  <option value="1">IPhone</option>
                  <option value="2">IPad</option>
                  <option value="3">MacBook</option>
                  <option value="4">AirPod</option>
                </select>
              </div>
              <div class="hinh">
                <p>Thêm ảnh</p>
                <input type="file" name="img" id="">
                <p>Thêm chi tiết</p>
                <input type="file" name="img2" id="">
                <input type="file" name="img3" id="">
                <input type="file" name="img4" id="">

              </div>
              <div>
                <input class="submit" type="submit" value="submit">
              </div>
            </form>
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

<?php
include("./add.php");
?>