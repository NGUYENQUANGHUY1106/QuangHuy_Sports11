<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/product_category/Shoes/main.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <div class="left_header">
              <div class="email_header">
                <img style="width: 20px; height: 20px;" src="/assets/View/trangchu/image/icons8-email-30.png" alt="">
                <label class="ingredient_header email_header1" for="email">nguyenquanghuy110605@gamil.com</label>
              </div>
              <div class="clock_header">
                <img style="width: 20px; height: 20px;" src="/assets/View/trangchu/image/icons8-clock-30.png" alt="">
                <label class="ingredient_header" for="clock">08:00 - 22:00</label>
              </div>
              <div class="phone_header">
                <img style="width: 20px; height: 20px;" src="/assets/View/trangchu/image/icons8-phone-30.png" alt="">
                <label class="ingredient_header phone_header1" for="phone">+84 344 413 346</label>
              </div>
            </div>
            <div class="right_header">
                <img src="/assets/product_category/Shoes/image/header/icons8-facebook-16.png" alt="">
                <img src="/assets/product_category/Shoes/image/header/icons8-git-16.png" alt="">
                <img src="/assets/product_category/Shoes/image/header/icons8-instagram-16.png" alt="">
                <img src="/assets/product_category/Shoes/image/header/icons8-email-16.png" alt="">
                <a style="color: #000;" href="https://github.com/NGUYENQUANGHUY1106/QuangHuy_Sports11"><ion-icon name="logo-github"></ion-icon></a>
            </div>
        </div>

        <nav id="menu">
          <button class="menu-toggle">
            <img style="width: 50px;" src="/assets/View/trangchu/image/logonav.png" alt="">
          </button>
          <ul class="nav_menu">
            <li class="logg_tamthoi"><img src="/assets/View/trangchu/image/logonav (3).png" style="width: 100px;" alt=""></li>
            <li >Trang Chủ</li>
            <li>Giới Thiệu</li>
            <li>Khuyến Mãi</li>
            <li>Tin Tức</li>
            <li >
            <div class="search">
                <input type="text" placeholder="Tìm Kiếm Sản Phẩm">
                <button>
                    <img src="/assets/product_category/Shoes/image/icons8-search-40.png" alt="">
                </button>
            </div>
            </li>
            <li >
              <div class="giohang">
                <div class="image">
                    <img src="/assets/product_category/Shoes/image/icons8-shopping-basket-25 (1).png" alt="">
                </div>
                <p>Giỏ hàng</p>
              </div>
            </li>
            <li>
                <div class="login">
                    <p style="margin-top: -7px;">Đăng Nhập</p>
                </div>
            </li>
          </ul>
        </nav>

       <!-- content -->
       <div id="content">
         <div class="header_content">
            <div class="left_content">
                <p class="trangchu">
                    TRANG CHỦ /
                </p>
                <p class="shoes_football">
                    Giày Bóng Đá Chính Hãng 
                </p>
            </div>
            <div class="right_content">
                <p class="text">Hiển Thị Kết Quả Duy Nhất</p>
                <select class="luachon" name="" id="">
                    <option value="">Thứ Tự Mặc Định</option>
                    <option value="">Mới Nhất </option>
                    <option value="">Thứ Tự Theo Giá : Cao Đến Thấp</option>
                    <option value="">Thứ Tự Theo Giá : Thấp Đến Cao</option>
                    <option value="">Thứ Tự Theo Điểm Đánh Giá</option>
                </select>
            </div>
         </div>
         <div class="left_center_content">
              <div class="product">
                 <p class="danhmucsanpham">
                  Danh Mục Sản Phẩm 
                 </p>
                 <p style="font-weight: 550; color: #000;" class="danhmucsanpham_1" id="PR">Giày Bóng Đá</p>
                 <hr>
                 <p class="danhmucsanpham_1" id="danhmucsanpham_2">Phụ Kiện Thể Thao</p>
                 <hr>
                 <p class="danhmucsanpham_1" id="danhmucsanpham_2">ÁO Quần Thể Thao</p>
                 <hr>
                 <p class="danhmucsanpham_1" id="danhmucsanpham_2">Bóng Đá </p>
              </div>
              <div class="bottom_product">
                <?php
                echo '<link rel="stylesheet" href="/assets/product_category/Shoes/main.css"> ';

                require("csdl.php");

                $sql = "SELECT * FROM  shoes_tab_bar";
                $query = mysqli_query($connect,$sql);
                $num = mysqli_num_rows($query);

                if($num>0)
                {
                  while($row = mysqli_fetch_array($query))
                  {
                    if($row && isset ($row['image']))
                    {
                ?>
                <p class="like">Có thể bạn thích</p>
                <div class="sanpham_bottom">
                 <div class="box">
                  <div style="width: 88px; height: 88px;" class="image">
                    <img style="width:100%; " src="<?php echo $row ['image']; ?>" alt="">  
                  </div>
                   <div class="name_product">
                    <p lass="name_sp">
                      <?php echo $row ['name_product'] ; ?>
                    </p>
                  </div>
                 </div>
                  <div class="price">
                    <s class="sale">
                      <?php echo $row ['price_sale']; ?>
                    </s>
                    <p class="price_after_sale">
                      <?php echo $row ['price_product']; ?>
                    </p>
                  </div>
                </div>
                <hr>
                <?php
                    } else
                    {
                      echo "Không tìm thấy dữ liệu để hiển thị";
                    }
                  }
                } else
                {
                  echo 'Không Tìm Thấy Sản Phẩm Nào';
                }
                ?>
              </div>
         </div>
       </div>
    </div>
</body>
</html>