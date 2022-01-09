<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="header">
      <nav class="navbar navbar-light bg-light">
       <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
       </nav>
    </div>
    <div class="container">
        <h3 style=" margin-left:400px ; margin-top:30px;color:orange">Quản lý nhân viên </h3>
        <button type="button" class="btn btn-primary"><a href="add.php " style="display: block; color: white;text-decoration:none">Thêm</a></button>
      
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã nhân viên</th>
      <th scope="col">Họ và tên </th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Phòng ban</th>
      <th scope="col">Lương</th>
      <th scope="col">Ngày vào làm</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <!-- Vùng này là dữ liệu lặp lại từ CSDL -->
      <?php
            // Bước 01: Kết nối Database Server
            $conn = mysqli_connect('localhost','root','','1951060841_employee');
            if(!$conn){
                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
            }
               // Bước 02: Thực hiện truy vấn
               $sql = "SELECT * FROM db_nhanvien";
               $result = mysqli_query($conn,$sql);
                // Bước 03: Xử lý kết quả truy vấn
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                        <tr>
                          <th scope="row"><?php echo $row['maNV']  ;      ?></th>
                           <td><?php echo $row['hovaten']  ;      ?></td>
                          <td><?php echo $row['chucvu']  ;      ?></td>
                          <td><?php echo $row['phongban']  ;      ?></td>
                          <td><?php echo $row['luong']  ;      ?></td>
                          <td><?php echo $row['ngayvaolam']  ;      ?></td>
                          <td><a href="update.php?id=<?php echo $row['maNV'] ?>"><span class="material-icons-outlined">edit</span></a>
                          </td>
                          <td><a href="delete.php?id=<?php echo $row['maNV'] ?>"><span class="material-icons-outlined">delete</span></a>
                         </td>
                          
                          
                           </tr>
        <?php
                    }
                }
       ?>
    
  </tbody>
    </table>
    </div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>