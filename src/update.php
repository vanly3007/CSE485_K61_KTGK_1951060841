<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class="mt-4">
    <div class="header">
    <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:white">Công ty TNHH X</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style=" margin-left:400px ; margin-top:30px;color:orange">Cập nhật thông tin nhân viên</h2>
                    <form action="process-add.php" method="post">
                    <?php 
        $ma = $_GET['id'];

        $conn = mysqli_connect('localhost','root','','1951060841_employee');
      if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    };  

        $sql = "select * from db_nhanvien where maNV = '$ma'";
        $result = mysqli_query($conn, $sql);
        $each = mysqli_fetch_array($result);
    ?>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã nhân viên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtma"value="<?php echo $each['maNV']?>" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtten" name="txtten"value="<?php echo $each['hovaten']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Chức vụ</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtchucvu" name="txtchucvu"value="<?php echo $each['chucvu']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Phòng ban</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtphongban" name="txtphongban"value="<?php echo $each['phongban']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Lương</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtluong" name="txtluong"value="<?php echo $each['luong']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày vào làm</label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdate" name="txtdate"value="<?php echo $each['ngayvaolam']?>">
                            </div>
                        </div>
        
                        <button type="submit" class="btn btn-warning" name="btnSave">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>