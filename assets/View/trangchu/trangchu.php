
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
            <li >
            <div class="search">
                <input type="text" placeholder="Tìm Kiếm Sản Phẩm">
                <button>
                    <img src="/assets/product_category/Shoes/image/icons8-search-40.png" alt="">
                </button>
            </div>
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
  <!-- code php cho phần áo quần thể thao  -->
  <div class="aoquan_main_content">
    <?php
     echo '<link rel="stylesheet" href="/assets/View/trangchu/trangchu.css"> ';

     require('danhsachsanpham.php');
     // truy vấn dữ liệu từ bảng 

     $sql_4 = "SELECT * FROM danhsachsanpham_aoquan";
     $query_4 = mysqli_query($connect,$sql_4);
     $num_4 = mysqli_num_rows($query_4);
     

     if($num_4>0)
     { 
      while($row = mysqli_fetch_array($query_4)){
        if($row && isset($row['image_data'])&& isset($row['image_sub'])){
          
    ?>
    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="<?php echo $row['image_data']; ?>" alt="">
      </div>
      <div class="color_nike">
          <img src="<?php echo $row['image_data']; ?>" alt="" data-src="<?php echo $row['image_data1']  ?>">
          <img src="<?php echo $row['image_sub'];  ?>" alt="" data-src="<?php echo $row['image_sub1'];  ?>">
          <img src="<?php echo $row['image_sub2'];  ?>" alt="" data-src="<?php echo $row['image_sub3'];  ?>">
      </div>
      <div class="tensanpham">
          <p class="tieude_sanpham"><?php echo $row['name_introduction'] ; ?></p>
          <p class="tenchinhsanpham"><?php echo $row['name_product'] ?></p>
          <p style="font-size: 17px; color: green;" class="select_colorr"><?php echo $row['color']  ?></p>
          <p class="price"><?php echo $row['price']  ?></p>
      </div>
    </div>
    <?php
        } else
        {
          echo 'Không có dữ liệu để hiển thị';
        }
      }
    } else
    {
      echo 'Không tìm thấy sản phẩm nào ';
    }
    ?>

   
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
  <!-- code php cho phần bóng đá  -->
  <div class="bongda_main_content">
   <?php
    echo '<link rel="stylesheet" href="/assets/View/trangchu/trangchu.css"> ';
    require("danhsachsanpham.php");

    $sql_3 = "SELECT * FROM danhsachsanpham_bongda";
    $query_3 = mysqli_query($connect,$sql_3);
    $num_3 = mysqli_num_rows($query_3);

    if($num_3>0)
    {
      while($row = mysqli_fetch_array($query_3)){
      if($row && isset($row['image_data']) && isset($row['image_sub']))
      {
  ?>
   
    <div class="sub_main_content">
      <div class="div_picture">
          <img id="main-image" src="<?php echo $row['image_data'];   ?>" alt="">
      </div>
      <div class="color_nike">
          <img src="<?php echo $row['image_data'];  ?>" alt="" data-src="<?php echo $row['image_data1'];  ?>">
          <img src="<?php echo $row ['image_sub']; ?>" alt="" data-src="<?php echo $row ['image_sub1']; ?>">
          <img src="<?php echo $row ['image_sub2']; ?>" alt="" data-src="<?php echo $row ['image_sub3']; ?>">
      </div>
      <div class="tensanpham">
          <p style="margin: 5px 10px;" class="tieude_sanpham"><?php echo $row['name_introduction'];  ?></p>
          <p style="margin: 5px 0px;" class="tenchinhsanpham"><?php echo $row['name_product'];  ?></p>
          <p style="margin: 5px 0px;" class="price"><?php echo $row['price'];  ?></p>
      </div>
    </div>
  <?php
      } else {
        echo 'Không có dữ liệu hiển thị';
      }
    }
  }
    else
    {
      echo 'Không tìm thấy sản phẩm nào';
    }
  ?>

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
