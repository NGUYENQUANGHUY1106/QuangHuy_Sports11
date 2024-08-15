 1 <?php
     $server = "localhost:3366";
     $username ="root";
     $password = "";
     $dbname = "trangchu";


    //  tạo kết nối 
    $connect =mysqli_connect ($server,$username,$password,$dbname);
    //  kiểm tra kết nối 

    if(!$connect)
    {
        die("Kết Nối Thất Bại". mysqli_connect_error());
    }

    // thiết lập mã hóa ký tự 
    mysqli_set_charset($connect,"utf8");

?>