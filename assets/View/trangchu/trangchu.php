
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/View/trangchu/trangchu.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="icon" type="image/x-icon" href="/assets/View/trangchu/image/logonav.png">
</head>
<body>
    <div class="main">
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
                <a style="color: #000;" href="https://www.facebook.com/profile.php?id=100081001793968"><ion-icon name="logo-facebook"></ion-icon></a>
                <a style="color: #000;" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a style="color: #000;" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a style="color: #000;" href="#"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></a>
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
            <li class="search_nav">
              <input class="search_sanpham_nav" type="text" placeholder="Tìm kiếm ở đây">
              <button class="search_nav_button">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </li>
            <li class="giohang_nav">
              <div class="giohang">
                <img src="/assets/View/trangchu/image/icons8-cart-30.png" alt="">
                <a style="text-decoration: none; color: #fff;" href="#">
                  <label for="" class="giohang_center">Giỏ Hàng</label>
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="slider">
          <div class="list">
              <div class="item">
                  <img style="width: 1512.8px"  src="image/hình nền 5.webp" alt="">
              </div>
              <div class="item">
                  <img style="width: 1512.8px" src="image/hình nền 2.jpg" alt="">
              </div>
              <div class="item">
                  <img style="width: 1512.8px" src="image/hình nền 3.webp" alt="">
              </div>
              <div class="item">
                <img style="width: 1512.8px" src="image/hình nền 4.jpg" alt="">
            </div>
            <div class="item">
              <img style="width: 1512.8px" src="image/hình nền 1.png" alt="">
          </div>
          </div>
          <div class="buttons">
              <button id="prev"><</button>
              <button id="next">></button>
          </div>
          <ul class="dots">
              <li class="active"></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
          </ul>
      </div>
  <!-- code php cho trang chủ  -->
    </div>

    <div id="content">
        <?php
        echo ' <link rel="stylesheet" href="/assets/View/trangchu/trangchu.css"> ';
        // Kết nối đến cơ sở dữ liệu
        require("danhsachsanpham.php");

        // Truy vấn để lấy dữ liệu từ bảng sản phẩm
        $sql = "SELECT * FROM danhsachsanpham";
        $query = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($query);

        if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
                // Kiểm tra xem dữ liệu có hợp lệ không
                if ($row && isset($row['image_data']) && isset($row['image_name'])) {
                    ?>
                    <div class="sub_nav_content">
                        <div class="img_content">
                            <img src="<?php echo $row['image_data']; ?>" alt="" style="height: 400px;">
                            <p class="introduction"><?php echo $row['image_name']; ?></p>
                        </div>
                    </div>
                    <?php
                } else {
                    echo "Không có dữ liệu để hiển thị.";
                }
            }
        } else {
            echo "Không tìm thấy sản phẩm nào.";
        }
        ?>
    </div>

    
      <div id="laster">
        <p class="sanphammoi">
          SẢN PHẨM MỚI
        </p>
        <p class="sub_laster">
          GIÀY BÓNG ĐÁ -  GIÁ RẺ - DEAL SỐC 
        </p>
      </div>
     <!-- code php cho danh sách sản phẩm chính -->
      <div id="main_content">
        <?php
           echo '<link rel="stylesheet" href="/assets/View/trangchu/trangchu.css">';
           // kết nối với csdl 
           require ("danhsachsanpham.php");

           // câu truy vấn để lấy dữ liệu từ bảng danh sach sản phẩm chính
           $sql_1 = "SELECT * FROM danhsachsanphamchinh";
           $query_1 = mysqli_query($connect, $sql_1);
           $num_1 = mysqli_num_rows($query_1);
          

           
           if ($num_1 > 0) {
           while ($row = mysqli_fetch_array($query_1)) {
           if($row && isset ($row['image_data']) && isset ($row['image_sub']))
           {
            ?>     
          <div class="sub_main_content">
            <div class="div_picture">
                <img id="main-image" src="<?php echo $row ['image_data']; ?>" alt="">
            </div>
            <div class="color_nike">
                  <img src="<?php echo $row['image_data'];  ?>" alt="" data-src="<?php echo $row['image_data']; ?>">
                  <img src="<?php echo $row['image_sub']; ?>" alt="" data-src="<?php echo $row['image_sub1']; ?>">
                  <img src="<?php echo $row['image_sub2']; ?>" alt="" data-src="<?php echo $row['image_sub3']; ?>">
            </div>
            <div class="tensanpham">
                <p class="tieude_sanpham"><?php echo $row['name_introduction'] ?></p>
                <p class="tenchinhsanpham"><?php echo $row['name_product']  ?></p>
                <p style="font-size: 17px; color: green;" class="select_colorr"><?php echo $row ['color'] ?></p>
                <p class="price"><?php echo $row['price']; ?></p>
            </div>
          </div>

          <?php
           }
           else
           {
            echo "Không có dữ liệu để hiển thị";
           }
          } 
          } else
              {
                echo "Không Tìm Thấy Sản Phẩm nào";
              }
          ?>
           
     
      </div>
      <div id="laster">
        <p class="sanphammoi">
          PHỤ KIỆN THỂ THAO
        </p>
        <p style="margin-bottom: 25px;" class="sub_laster">
         PHỤ KIỆN THỂ THAO HOT -  GIÁ RẺ - DEAL SỐC 
        </p>
    </div>
    <!-- phụ kiện -->
    <!-- code php cho phần phụ kiện -->
    <div class="phukien_main_content">
   <?php
    // Liên kết đến tệp CSS
    echo '<link rel="stylesheet" href="/assets/View/trangchu/trangchu.css"> ';

    // Yêu cầu tệp danh sách sản phẩm
    require("danhsachsanpham.php");

    // Truy vấn để lấy dữ liệu từ bảng
    $sql_2 = "SELECT * FROM danhsachsanpham_phukienthethao";
    $query_2 = mysqli_query($connect, $sql_2);
    $num_2 = mysqli_num_rows($query_2);

    // Kiểm tra nếu có sản phẩm trong kết quả truy vấn
    if ($num_2 > 0) {
        while ($row = mysqli_fetch_array($query_2)) {
            // Kiểm tra nếu các trường cần thiết được thiết lập
            if ($row && isset($row['image_data']) && isset($row['image_sub'])) {
   ?>
                <div class="sub_main_content">
                    <div class="div_picture">
                        <img id="main-image" src="<?php echo $row['image_data']; ?>" alt="">
                    </div>
                    <div class="color_nike">
                        <img src="<?php echo $row['image_data']; ?>" alt="" data-src="<?php echo $row['image_data1']; ?>">
                        <img src="<?php echo $row['image_sub']; ?>" alt="" data-src="<?php echo $row['image_sub1']; ?>">
                        <img src="<?php echo $row['image_sub2']; ?>" alt="" data-src="<?php echo $row['image_sub3']; ?>">
                    </div>
                    <div class="tensanpham">
                        <p class="tieude_sanpham"><?php echo $row['name_introduction']; ?></p>
                        <p class="tenchinhsanpham"><?php echo $row['name_product']; ?></p>
                        <p style="font-size: 17px; color: green;" class="select_colorr"><?php echo $row['color']; ?></p>
                        <p class="price"><?php echo $row['price']; ?></p>
                    </div>
                </div>
   <?php
            } else {
                echo 'Không có dữ liệu để hiển thị';
            }
        }
    } else {
        echo 'Không Tìm Thấy Sản Phẩm Nào';
    }
    ?>
</div>

   </div>

  <div id="laster">
    <p class="sanphammoi">
      ÁO QUẦN  THỂ THAO
    </p>
    <p style="margin-bottom: 25px;" class="sub_laster">
     PHỤ KIỆN THỂ THAO HOT -  GIÁ RẺ - DEAL SỐC 
    </p>
  </div>
  <!-- áo quần -->
  <div class="aoquan_main_content">
    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/aobongdamu_do.avif" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongdamu_do.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongdamu_do.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongdamu_xanh.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongdamu_xanh.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_docaro.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_docaro.avif">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham">Áo Bóng Đá Chính Hãng</p>
          <p class="tenchinhsanpham">Áo Thi Đấu ManChester United</p>
          <p style="font-size: 17px; color: green;" class="select_colorr">3 Color</p>
          <p class="price">750,000 VNĐ</p>
      </div>
    </div>

    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_cam.avif" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_cam.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_cam.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_tim.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_tim.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_trang.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_real_trang.avif">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham">Áo Bóng Đá Chính Hãng</p>
          <p class="tenchinhsanpham">Áo Thi Đấu Real Marid</p>
          <p style="font-size: 17px; color: green;" class="select_colorr">3 Color</p>
          <p class="price">650,000 VNĐ</p>
      </div>
    </div>

    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_xanh.avif" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_xanh.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_xanh.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_tim.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_tim.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_xanhdam.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_argentina_xanhdam.avif">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham">Áo Bóng Đá Chính Hãng</p>
          <p class="tenchinhsanpham"> Áo Thi Đấu Argentina</p>
          <p style="font-size: 17px; color: green;" class="select_colorr">3 Color</p>
          <p class="price">810,000 VNĐ</p>
      </div>
    </div>

    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/aobongda_mc_trang.png" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_mc_trang.png" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_mc_trang.png">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aobongda_mc_tim.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aobongda_mc_tim.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/aomancity_xanh.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/aomancity_xanh.avif">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham">Áo Bóng Đá Chính Hãng</p>
          <p class="tenchinhsanpham">Áo Thi Đấu ManChester City</p>
          <p style="font-size: 17px; color: green;" class="select_colorr">3 Color</p>
          <p class="price">720,000 VNĐ</p>
      </div>
    </div>
  </div>
  <!-- bóng đá -->
  <div id="laster">
    <p class="sanphammoi">
      Bóng Đá - Thể Thao
    </p>
    <p style="margin-bottom: 25px;" class="sub_laster">
     PHỤ KIỆN THỂ THAO HOT -  GIÁ RẺ - DEAL SỐC 
    </p>
  </div>
  <div class="bongda_main_content">
    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/bongdapre.jpg" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongdapre.jpg" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongdapre.jpg">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongdapre2.jpg" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongdapre2.jpg">
      </div>
      <div class="tensanpham">
          <p style="margin: 5px 10px;" class="tieude_sanpham">Bóng Đá Chính Hảng</p>
          <p style="margin: 5px 0px;" class="tenchinhsanpham">Bóng Premier League Club Elite</p>
          <p style="margin: 5px 0px;" class="price">1,579,000 VNĐ</p>
      </div>
    </div>

    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/bongpumavang.avif" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongpumavang.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongpumavang.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongpumaxanh.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongpumaxanh.avif">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham"> Bóng Đá Chính Hãng</p>
          <p class="tenchinhsanpham">PUMA Cumbre CONMEBOL 2024</p>
          <p style="font-size: 17px; color: green;" class="select_colorr">2 Color</p>
          <p class="price">1,250,000 VNĐ</p>
      </div>
    </div>

    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/bongmu.avif" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongmu.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongmu.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongmu2.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongmu2.avif">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongmu3.avif" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongmu3.avif">
      </div>
      <div class="tensanpham">
          <p style="margin: 5px 10px;" class="tieude_sanpham"> Bóng Đá Chính Hãng</p>
          <p style="margin: 5px 10px;" class="tenchinhsanpham"> Bóng Thi Đấu ManChester United</p>
          <p style="margin: 5px 10px;" class="price">1,150,000 VNĐ</p>
      </div>
    </div>

    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="/assets/View/trangchu/sanphamnoibat_img/bongjocker.webp" alt="">
      </div>
      <div class="color_nike">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongjocker.webp" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongjocker.webp">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongjocker2.webp" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongjocker2.webp">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongjocker3.webp" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongjocker3.webp">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongjocker4.webp" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongjocker4.webp">
          <img src="/assets/View/trangchu/sanphamnoibat_img/bongjocker5.webp" alt="" data-src="/assets/View/trangchu/sanphamnoibat_img/bongjocker5.webp">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham"> Bóng Đá Chính Hãng</p>
          <p class="tenchinhsanpham">Bóng Jocker Sport </p>
          <p style="font-size: 17px; color: green;" class="select_colorr">5 Color</p>
          <p class="price">720,000 VNĐ</p>
      </div>
    </div>
  </div>
  <!-- thông tin khác -->
  <div id="footer">
   <div style="margin-left: 30px;" class="mienphivanchuyen">
     <div class="img_mienphivanchuyen">
      <img src="/assets/View/trangchu/image/fotter/giaohang.png" alt="">
     </div>
     <div class="thongtin">
       <p> Miển Phí Vận Chuyển </p>
       <p>Với Đơn Hàng Trên 1Tr VNĐ</p>
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
  </div>
<script src="trangchu.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</body>
</html>
