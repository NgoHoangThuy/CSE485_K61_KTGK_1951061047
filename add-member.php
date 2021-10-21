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
<main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thêm người đăng ký</h2>
                    <form action="process-add-member.php" method="post">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã người hiến máu</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtma">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtten" name="txtten">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">giới tính</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtsex" name="txtsex">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Tuổi</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txttuoi" name="txttuoi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Nhóm máu</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtnhom" name="txtnhom">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Số di động</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtMobile" name="txtMobile">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày đăng ký</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdate" name="txtdate">
                            </div>
                        </div>

        
                        <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
