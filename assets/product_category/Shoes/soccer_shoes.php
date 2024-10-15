<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/font/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/product_category/Shoes/main.css">
</head>
<body>

<!-- Header Section -->
<div class="container-fluid bg-light py-2">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-start">
            <div class="d-flex align-items-center me-4">
                <img src="/assets/View/trangchu/image/icons8-email-30.png" alt="Email" width="20" height="20">
                <span class="ms-2">nguyenquanghuy110605@gamil.com</span>
            </div>
            <div class="d-flex align-items-center me-4">
                <img src="/assets/View/trangchu/image/icons8-clock-30.png" alt="Clock" width="20" height="20">
                <span class="ms-2">08:00 - 22:00</span>
            </div>
            <div class="d-flex align-items-center">
                <img src="/assets/View/trangchu/image/icons8-phone-30.png" alt="Phone" width="20" height="20">
                <span class="ms-2">+84 344 413 346</span>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="#" class="me-2"><img title="Follow on Facebook" src="/assets/product_category/Shoes/image/header/icons8-facebook-16.png" alt="Facebook"></a>
            <a href="#" class="me-2"><img title="Follow on Git" src="/assets/product_category/Shoes/image/header/icons8-git-16.png" alt="Git"></a>
            <a href="#" class="me-2"><img title="Follow on Instagram" src="/assets/product_category/Shoes/image/header/icons8-instagram-16.png" alt="Instagram"></a>
            <a href="#" class="me-2"><img title="Follow on Email" src="/assets/product_category/Shoes/image/header/icons8-email-16.png" alt="Email"></a>
            <a href="https://github.com/NGUYENQUANGHUY1106/QuangHuy_Sports11" class="text-dark"><ion-icon name="logo-github"></ion-icon></a>
        </div>
    </div>
</div>

<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/assets/View/trangchu/image/logonav.png" alt="Logo" width="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Giới Thiệu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Khuyến Mãi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tin Tức</a></li>
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Tìm Kiếm Sản Phẩm">
                        <button class="btn btn-outline-success" type="submit"><img src="/assets/product_category/Shoes/image/icons8-search-16.png" alt="Search"></button>
                    </form>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <img src="/assets/product_category/Shoes/image/icons8-shopping-basket-25.png" alt="Basket" width="25">
                    <span class="ms-2">Giỏ Hàng</span>
                </li>
                <li class="nav-item d-flex align-items-center ms-3">
                    <span class="me-1">Đăng Nhập</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container my-4">
    <!-- Header Content -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <p class="mb-0 text-muted">TRANG CHỦ /</p>
            <h2 class="h5">Giày Bóng Đá Chính Hãng</h2>
        </div>
        <div>
            <p class="mb-1">Hiển Thị Kết Quả Duy Nhất</p>
            <select class="form-select" aria-label="Default select example">
                <option selected>Thứ Tự Mặc Định</option>
                <option value="1">Mới Nhất</option>
                <option value="2">Giá Cao Đến Thấp</option>
                <option value="3">Giá Thấp Đến Cao</option>
                <option value="4">Theo Điểm Đánh Giá</option>
            </select>
        </div>
    </div>

    <div class="row">
        <!-- Left Sidebar -->
        <div class="col-md-3">
            <h5 class="mb-3">Danh Mục Sản Phẩm</h5>
            <ul class="list-group">
                <li class="list-group-item">Giày Bóng Đá</li>
                <li class="list-group-item">Phụ Kiện Thể Thao</li>
                <li class="list-group-item">Áo Quần Thể Thao</li>
                <li class="list-group-item">Bóng Đá</li>
            </ul>

            <!-- Bottom Product Suggestions -->
            <h6 class="mt-4">Có thể bạn thích</h6>
            <div class="list-group">
                <?php
                require("csdl.php");

                $sql = "SELECT * FROM shoes_bar";
                $query = mysqli_query($connect, $sql);
                $num = mysqli_num_rows($query);

                if($num > 0) {
                    while($row = mysqli_fetch_array($query)) {
                        if($row && isset($row['image'])) {
                ?>
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo $row['image']; ?>" alt="Product Image" class="me-3" style="width: 50px;">
                    <div>
                        <p class="mb-1"><?php echo $row['name_product']; ?></p>
                        <p class="text-muted"><s><?php echo $row['price_sale']; ?></s> <span><?php echo $row['price_product']; ?></span></p>
                    </div>
                </div>
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

        <!-- Main Product Section -->
        <div class="col-md-9">
            <div class="row">
                <?php
                $conn = mysqli_connect("localhost:3366", "root", "", "product");
                if (!$conn) {
                    die("Kết nối thất bại: " . mysqli_connect_error());
                }

                $countSql = "SELECT COUNT(id) AS total FROM shoes_content";
                $countResult = mysqli_query($conn, $countSql);
                $countRow = mysqli_fetch_assoc($countResult);
                $total_records = $countRow['total'];

                $limit = 9;
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($current_page - 1) * $limit;
                $total_page = ceil($total_records / $limit);

                $productSql = "SELECT * FROM shoes_content LIMIT $start, $limit";
                $productResult = mysqli_query($conn, $productSql);

                while ($row = mysqli_fetch_array($productResult)) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $row['image_main']; ?>" class="card-img-top" alt="Product Image">

                    <div class="sub_img ">
                        <img src="<?php echo $row['image_main']; ?>" alt="" data-src="<?php echo $row['image_main']; ?>" class="img-fluid me-2">
                        <img src="<?php echo $row['image_sub1']; ?>" alt="" data-src="<?php echo $row['image_sub1']; ?>" class="img-fluid me-2">
                        <img src="<?php echo $row['image_sub2']; ?>" alt="" data-src="<?php echo $row['image_sub2']; ?>" class="img-fluid">
                    </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name_product']; ?></h5>
                            <p class="card-text"><s><?php echo $row['price_sale']; ?></s> <span class="card-text1"><?php echo $row['price_product']; ?></span></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php if ($current_page > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                    <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                    <?php } ?>
                    <?php if ($current_page < $total_page) { ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="/assets/product_category/Shoes/main.js"></script>
</body>
</html>
