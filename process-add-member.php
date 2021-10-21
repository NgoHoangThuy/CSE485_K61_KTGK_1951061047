<?php
    // Kiểm tra có đúng là người dùng đã thực hiện nhấn Lưu trên FORM chưa
    if(isset($_POST['btnSave'])){
        // Lấy giá trị trên FORM và lưu vào các BIẾN
        $ma      = $_POST['txtma'];
        $ten     = $_POST['txtten'];
        $sex     = $_POST['txtsex'];
        $tuoi      = $_POST['txttuoi'];
        $nhom   = $_POST['txtnhom'];
        $SDT       = $_POST['sltMobile'];

        // Thực hiện quy trình 3 bước:
        // Bước 01: Kết nối DBS
        define('HOST','localhost');
        define('USER','root');
         define('PASS','');
        define('DB','project');

    // Kết nối SERVER
    $conn = mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die("Kết nối không thành công");
    }

        // Bước 02: Khai báo truy vấn
        $sql = "INSERT INTO blood_donor (bd_id, bd_name, bd_sex,bd_age, bd_bgroup,  bd_phno, bd_reg_date)
        VALUES ('$ma','$ten','$sex','$tuoi','$nhom','$SDT')";

        echo $sql."<br>";

        if(mysqli_query($conn,$sql)==TRUE){
            echo "Thêm thành công";
            header("Location:index.php");
        }else{
            echo "Chưa thêm được ....";
        }
         // Bước 03: Đóng kết nối
         mysqli_close($conn);
    }


?>