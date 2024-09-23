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
        <!-- Header section -->
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
                <img title="Follow on FaceBook" src="/assets/product_category/Shoes/image/header/icons8-facebook-16.png" alt="">
                <img title="Follow on Git" src="/assets/product_category/Shoes/image/header/icons8-git-16.png" alt="">
                <img title="Follow on Instagram" src="/assets/product_category/Shoes/image/header/icons8-instagram-16.png" alt="">
                <img title="Follow on Email" src="/assets/product_category/Shoes/image/header/icons8-email-16.png" alt="">
                <a style="color: #000;" href="https://github.com/NGUYENQUANGHUY1106/QuangHuy_Sports11"><ion-icon name="logo-github"></ion-icon></a>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav id="menu">
          <button class="menu-toggle">
            <img style="width: 50px;" src="/assets/View/trangchu/image/logonav.png" alt="">
          </button>
          <ul class="nav_menu">
            <li class="logg_tamthoi"><img src="/assets/View/trangchu/image/logonav (3).png" style="width: 100px;" alt=""></li>
            <li>Trang Chủ</li>
            <li>Giới Thiệu</li>
            <li>Khuyến Mãi</li>
            <li>Tin Tức</li>
            <li>
                <div class="search">
                    <input type="text" placeholder="Tìm Kiếm Sản Phẩm">
                    <button>
                        <img src="/assets/product_category/Shoes/image/icons8-search-16.png" alt="">
                    </button>
                </div>
            </li>
            <li>
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

       <!-- Content Section -->
       <div id="content">
         <div class="header_content">
            <div class="left_content">
                <p class="trangchu">TRANG CHỦ /</p>
                <p class="shoes_football">Giày Bóng Đá Chính Hãng</p>
            </div>
            <div class="right_content">
                <p class="text">Hiển Thị Kết Quả Duy Nhất</p>
                <select class="luachon" name="" id="">
                    <option value="">Thứ Tự Mặc Định</option>
                    <option value="">Mới Nhất</option>
                    <option value="">Thứ Tự Theo Giá : Cao Đến Thấp</option>
                    <option value="">Thứ Tự Theo Giá : Thấp Đến Cao</option>
                    <option value="">Thứ Tự Theo Điểm Đánh Giá</option>
                </select>
            </div>
         </div>

         <!-- Main Content Section -->
         <div class="main_content">
           <div class="left_center_content">
             <div class="product">
               <p class="danhmucsanpham">Danh Mục Sản Phẩm</p>
               <p style="font-weight: 550; color: #000;" class="danhmucsanpham_1" id="PR">Giày Bóng Đá</p>
               <hr>
               <p class="danhmucsanpham_1" id="danhmucsanpham_2">Phụ Kiện Thể Thao</p>
               <hr>
               <p class="danhmucsanpham_1" id="danhmucsanpham_2">Áo Quần Thể Thao</p>
               <hr>
               <p class="danhmucsanpham_1" id="danhmucsanpham_2">Bóng Đá</p>
             </div>

             <div class="bottom_product">
              <p class="like">Có thể bạn thích</p>
              <?php
                require("csdl.php");

                $sql = "SELECT * FROM shoes_bar";
                $query = mysqli_query($connect, $sql);
                $num = mysqli_num_rows($query);

                if($num > 0) {
                    while($row = mysqli_fetch_array($query)) {
                        if($row && isset($row['image'])) {
              ?>
              <div class="sanpham_bottom">
                <div class="box">
                  <div style="width: 150px;" class="image">
                    <img style="width: 93px; height: 93px;" src="<?php echo $row['image']; ?>" alt="">
                  </div>
                  <div class="name_product">
                    <p class="name_sp"><?php echo $row['name_product']; ?></p>
                  </div>
                </div>
                <div class="price">
                  <s class="sale"><?php echo $row['price_sale']; ?></s>
                  <p class="price_after_sale"><?php echo $row['price_product']; ?></p>
                </div>
              </div>
              <hr>
              <?php
                        } else {
                            echo "Không tìm thấy dữ liệu để hiển thị";
                        }
                    }
                } else {
                    echo 'Không Tìm Thấy Sản Phẩm Nào';
                }
              ?>
            </div>
          </div>

          <!-- Right Center Content -->
          <div class="right_center_content">
            <?php
              require("csdl.php");

              $sql_shoes = "SELECT * FROM shoes_content";
              $query_shoes = mysqli_query($connect, $sql_shoes);
              $num_shoes = mysqli_num_rows($query_shoes);

              if ($num_shoes > 0) {
                  while ($row = mysqli_fetch_array($query_shoes)) {
                      if ($row && isset($row['image_main'], $row['image_sub1'], $row['image_sub2'])) {
            ?>
            <div class="product_right_center_content">
              <div class="sub_main_product_right">
                <div class="image">
                  <img src="<?php echo $row['image_main']; ?>" alt="">
                </div>
                <div class="information_product">
                  <p class="name_product"><?php echo $row['name_product']; ?></p>
                  <p class="color"><?php echo $row['color']; ?></p>
                  <s class="sale_price"><?php echo $row['price_sale']; ?></s>
                  <p class="price_product"><?php echo $row['price_product']; ?></p>
                </div>

                <div class="sub_information_product" style="display: none;">
                  <div class="sub_img">
                    <img src="<?php echo $row['image_main']; ?>" alt="" data-src="<?php echo $row['image_main']; ?>">
                    <img src="<?php echo $row['image_sub1']; ?>" alt="" data-src="<?php echo $row['image_sub1']; ?>">
                    <img src="<?php echo $row['image_sub2']; ?>" alt="" data-src="<?php echo $row['image_sub2']; ?>">
                  </div>
                  <div class="price_sub_img">
                    <p class="name_product"><?php echo $row['name_product']; ?></p>
                    <p class="price"><?php echo $row['price_product']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
                    } else {
                        echo 'Dữ liệu không đầy đủ';
                    }
                }
            } else {
                echo 'Không Tìm Sản Phẩm Để Hiển Thị';
            }
            ?>
            <div class="next_to">
              <ul class="advance_back">
                <li><</li>
                <li class="main" id="one">1</li>
                <li class="main" id="sub">2</li>
                <li class="main" id="sub">3</li>
                <li class="main" id="sub">4</li>
                <li>></li>
              </ul>
            </div>
          </div> <!-- End of Right Center Content -->
        </div> <!-- End of Main Content -->
      </div> <!-- End of Content -->
      
    </div> <!-- End of Main Div -->

    <script src="/assets/product_category/Shoes/main.js"></script>
</body>
</html>
