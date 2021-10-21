<?php
if(isset($_GET['bd_id'])){
    $conn = mysqli_connect('localhost', 'root','','project',);
    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
         if(!$conn){
            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
            }
    $id=$_GET['bd_id'];
    $sql ="delete from blood_donor where bd_id='".$id."'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('location:index.php');
}
?>
