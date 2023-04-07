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
  <style>
    .center {
      height: 100%;
      display: flex;
      margin-right: 40px;
    }

    .form-input {
      width: 350px;
      padding: 20px;
      background: #fff;
      box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
        3px 3px 7px rgba(94, 104, 121, 0.377);
    }

    .form-input input {
      display: none;

    }

    .form-input label {
      display: block;
      width: 45%;
      height: 45px;
      margin-left: 25%;
  
      text-align: center;
      background-color: #04AA6D;
      border: 0px ;

      color: #fff;
      font-size: 15px;
      font-family: "Open Sans", sans-serif;
      text-transform: Uppercase;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .container form{
      display: flex;
    }
    .container-update{
    width: 70%;

}
.preview{
  min-height: 380px;

}
    .form-input img {
      width: 100%;
      display: none;

      margin-bottom: 30px;
    }
  </style>
</head>


<body>



  <div class="content">
    <div class="header"></div>

    <div class="noidung">




      <h2>Thêm Sản Phẩm</h2>

      <div class="container">
        <form method="post" action="">
        <div class="row">
            <!-- <div class="col-25">
              <label for="pri-img">Ảnh</label>
            </div>
            <div class="col-75">
              <td><input type="file"  name="pro-img"></td>
            </div> -->
            <div class="center">
              <div class="form-input">
                <div class="preview">
                  <img id="file-ip-1-preview">
                </div>
                <label for="file-ip-1">Tải Ảnh</label>
                <input type="file" id="file-ip-1" name="pro-img" accept="image/*" onchange="showPreview(event);">

              </div>
            </div>
          </div>
        <div class="container-update">

     
          <div class="row">
            <div class="col-25">
              <label for="pro-name">Tên Thiết Bị</label>
            </div>
            <div class="col-75">
              <input type="text" id="pro-name" name="pro-name" placeholder=" Nhập tên thiết bị">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="pro-pri">Giá Thiết Bị</label>
            </div>
            <div class="col-75">
              <input type="text" id="pro-pri" name="pro-pri" value="" placeholder="Nhập giá..">
            </div>
          </div>
          
          <!-- <div class="row">
            <div class="col-25">
              <label for="pro-img-detail">Ảnh Chi Tiết</label>
            </div>
            <div class="col-75">
              <td><input type="file"  name="pro-img-detail"></td>
            </div>
          </div> -->
          <div class="row">
            <div class="col-25">
              <label for="pro-loai">Loại Thiết Bị</label>
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


          <!-- <div class="row">
            <div class="col-25">
              <label for="pro-mota">Loại Thiết Bị: </label>
            </div>
            <div class="col-75">
              <textarea id="subject" name="cate" placeholder="Nhập mô tả.." ></textarea>
            </div>
          </div> -->
          <div class="row">
            <div class="col-25">
              <label for="pro-mota">Mô Tả Thiết Bị </label>
            </div>
            <div class="col-75">
              <textarea id="subject" name="pro-mota" placeholder="Nhập mô tả.." style="height:200px"></textarea>
                        
          <div style="margin  : 20px;" class="row">
            <input type="submit" value="Submit">
          </div>
            </div>
            
          </div>

          </div>
        </form>
      </div>


    </div>


  </div>

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
              <li><a href="../admin/addproduct.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Thêm Thiết
                  Bị</a></li>
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
              <li><a href="../admin/admin.php?id=" class="link-dark d-inline-flex text-decoration-none rounded">Xem thông tin</a>
              </li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">chỉnh sửa</a></li>
              <li><a href="./list/list.php" class="link-dark d-inline-flex text-decoration-none rounded">Danh sách tài
                  khảin</a></li>
              <li><a href="../Home/logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Đăng xuất</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer"></div>

</body>
<script src="bootstrap-5.3.0-alpha3-examples/assets/js/color-modes.js"></script>

<script src="./bootstrap-5.3.0-alpha3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
<!-- ----chon-anh--- -->
<script type="text/javascript">
  function showPreview(event) {
    if (event.target.files.length > 0) {
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
</script>

</html>
<?php
include("./add-include.php");

?>