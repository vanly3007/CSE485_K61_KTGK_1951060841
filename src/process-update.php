<?php

   // xử lý giá trị Gửi tới



   $ma       = $_POST['txtma'];
   $hovaten      = $_POST['txtten'];
   $chucvu = $_POST['txtchucvu'];
   $phongban      = $_POST['txtphongban'];
   $luong = $_POST['txtluong'];
   $ngayvaolam     = $_POST['txtdate'];
  
  // Bước 01: Kết nối Database Server
  $conn = mysqli_connect('localhost','root','','1951060841_employee');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }
  //Bước 2: Thực hiện truy vấn
  $sql = "update db_nhanvien
  set maNV= '$ten',
  chucvu='$chucvu',
  phongban ='$phongban',
  luong ='$luong',
  ngayvaolam = '$ngayvaolam',
  where maNV = $ma";
 
 // Bước 3: Xử lý kết quả
  mysqli_query($conn, $sql);
  $loi = mysqli_error($conn);
  echo $loi; 
  mysqli_close($conn);
// echo'có chạy được tới đây không'

echo '<a href="index.php">Quay lại</a>'; 

   
?>

