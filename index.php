<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Quản lý ngân hàng máu</title>
   
</head>
<body>

                <div class="container" style="margin-top:20px">

                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search" style="width:300px">
                            <button type="submit" class="btn btn-primary">Tìm</button>
                        </form>
                </div>  
            <div class="col ">
                
                <div>
                <button class="btn btn-success" style= "background-color:blue; margin-left:30px; margin-top:20px;"><a href="http://localhost/project/src/add-member.php" style="color: #fff;text-decoration: none">Thêm mới</a></button>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Mã người hiến máu</th>
                      <th scope="col">Họ và tên</th>
                      <th scope="col"> Giới tính</th>
                      <th scope="col">Tuổi</th>
                      <th scope="col">Nhóm máu</th>
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Ngày đăng kí hiến máu</th>
                      <th scope="col">Sửa</th>
                      <th scope="col">Xóa</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                    #B1 kết nối với CSDL
                    $conn=mysqli_connect('localhost','root','','project');            
                    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                    if(!$conn){
                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                    }
                    #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                    $sql = "SELECT bd_id, bd_name, bd_sex,bd_age, bd_bgroup,  bd_phno, bd_reg_date FROM blood_donor;";
                    $result = mysqli_query($conn,$sql);
                    #Bước 3: Xử lí kết quả trả về
                   
                    if(mysqli_num_rows($result)>0){
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                              
                              <td><?php echo $row['bd_id']; ?></td>
                              
                              <td><?php echo $row['bd_name']; ?></td>
                              <td><?php echo $row['bd_sex']; ?></td>
                              <td><?php echo $row['bd_age']; ?></td>
                              <td><?php echo $row['bd_bgroup']; ?></td>
                              <td><?php echo $row['bd_phno']; ?></td>
                              <td><?php echo $row['bd_reg_date']; ?></td>
                              <td><a href="update.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                              <td><a href="delete.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                    <?php
                            
                        
                        }
                       }

                    ?>
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
