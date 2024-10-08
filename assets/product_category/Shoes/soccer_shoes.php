<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/product_category/Shoes/main.css">
    <link rel="stylesheet" href="/assets/font/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="123abc">
</script>
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
        // Kết nối cơ sở dữ liệu
        $conn = mysqli_connect("localhost:3366", "root", "", "product");
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        // Kiểm tra xem có `idm` trong GET request hay không
        if (isset($_GET['idm'])) {
            $countSql = "SELECT COUNT(id) AS total FROM shoes_content WHERE idm = " . $_GET['idm'];
        } else {
            $countSql = "SELECT COUNT(id) AS total FROM shoes_content";
        }

        // Thực hiện truy vấn đếm số sản phẩm
        $countResult = mysqli_query($conn, $countSql);
        if (!$countResult) {
            die("Lỗi truy vấn: " . mysqli_error($conn));
        }

        // Lấy tổng số sản phẩm
        $countRow = mysqli_fetch_assoc($countResult);
        $total_records = $countRow['total'];

        // Thiết lập phân trang
        $limit = 8; // Số sản phẩm trên một trang
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại
        $start = ($current_page - 1) * $limit; // Sản phẩm bắt đầu của một trang

        // Tính tổng số trang
        $total_page = ceil($total_records / $limit);

        // Truy vấn dữ liệu sản phẩm dựa trên phân trang
        if (isset($_GET['idm'])) {
            $productSql = "SELECT * FROM shoes_content WHERE idm = " . $_GET['idm'] . " LIMIT $start, $limit";
        } else {
            $productSql = "SELECT * FROM shoes_content LIMIT $start, $limit";
        }

        $productResult = mysqli_query($conn, $productSql);
        if (!$productResult) {
            die("Lỗi truy vấn sản phẩm: " . mysqli_error($conn));
        }

        // Hiển thị sản phẩm
        while ($row = mysqli_fetch_array($productResult)) {
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
        }

        // Hiển thị phân trang
        if ($total_page > 1) {
            echo '<div class="next_to">';
            if ($current_page > 1) {
                echo '<a  class = "navigation" href="?page=' . ($current_page - 1) . '"><i class = "ti-angle-left"></i></a>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $current_page) {
                    echo '<span id ="main">' . $i . '</span>';
                } else {
                    echo '<a class = "navigation1" href="?page=' . $i . '">' . $i . '</a>';
                }
            }
            if ($current_page < $total_page) {
                echo '<a class = "navigation" href="?page=' . ($current_page + 1) . '"><i class = "ti-angle-right"></i></a>';
            }
            echo '</div>';
        }
    ?>
</div>

        </div> <!-- End of Main Content -->
      </div> <!-- End of Content -->

      <!-- Bottom_Soccer_Shoes -->
      <div id="bottom_Soccer_Shoes">
        <div style="margin-left: 30px;" class="mienphivanchuyen">
          <div class="img_mienphivanchuyen">
            <img src="/assets/View/trangchu/image/fotter/giaohang.png" alt="">
          </div>
          <div class="thongtin">
            <p> Miển Phí Vận Chuyển </p>
            <p>Với Đơn Hàng Trên 2Tr VNĐ</p>
          </div>
        </div>

        <div class="mienphivanchuyen">
          <div class="img_mienphivanchuyen">
          <img src="/assets/View/trangchu/image/fotter/dienthoai.png" alt="">
          </div>
          <div class="thongtin">
            <p> Hổ Trợ 24/7 </p>
            <p>Hổ Trợ 24h/ngày và 7 ngày/tuần</p>
          </div>
        </div>

        <div class="mienphivanchuyen">
          <div class="img_mienphivanchuyen">
          <img src="/assets/View/trangchu/image/fotter/trahnag.png" alt="">
          </div>
          <div class="thongtin">
            <p> 30 Ngày Trả Hàng </p>
            <p> Trả Lại Hàng Trong Vòng 30 ngày</p>
          </div>
        </div>
      </div>   <!-- End of Bottom_Soccer_Shoes ID -->
    <div id="footer">
        <div class="information_contact">
          <p class="main">Thông Tin Liên Hệ</p>
          <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;" 
            class="sub_information_contact">
            QuangHuy_Sports11 - Chuyên Cung Cấp Giày, Áo Quần, Phụ Kiện Thể Thao Chính Hãng
          </p>
          <p class="sub_information_contact">Địa Chỉ: VKU_University</p>
          <p class="sub_information_contact">
            Email: <span class="email">nguyenquanghuy110605@gmail.com</span>
          </p>
        </div>

        <div class="information_contact">
          <p class="main">Liên Kết Nhanh</p>
          <p class="put">Đặt Giày Bóng Đá</p>
          <p class="put">Đặt Phụ Kiện Thể Thao</p>
          <p class="put">Đặt Áo Quần Thể Thao</p>
          <p class="put">Đặt Bóng Thi Đấu Chính Hãng</p>
        </div>

        <div class="information_contact">
          <p class="main">Kết Nối Với Chúng Tôi</p>
          <div class="image">
            <div class="fb-page" 
                data-href="https://www.facebook.com/meta" 
                data-tabs="timeline" 
                data-width="" 
                data-height="" 
                data-small-header="false" 
                data-adapt-container-width="true" 
                data-hide-cover="false" 
                data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/meta" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/meta">Meta</a>
              </blockquote>
            </div>
            <img title="Follow on Git" src="/assets/product_category/Shoes/image/fotter/icons8-git-32.png" alt="">
            <img title="Follow on Instagram" src="/assets/product_category/Shoes/image/fotter/icons8-instagram-32.png" alt="">
            <img title="Follow on Email" src="/assets/product_category/Shoes/image/fotter/icons8-email-32.png" alt="">
          </div>
          <p class="main">Thời Gian Mở Cửa</p>
          <p class="time">Mở Cửa Từ 8:00 - 22:00 Thứ 2 Đến Chủ Nhật</p>
        </div>
    </div>

      
    </div> <!-- End of Main Div -->

    <script src="/assets/product_category/Shoes/main.js"></script>
</body>
</html>
