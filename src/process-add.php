<?php

   // xử lý giá trị Gửi tới



   $ma       = $_POST['txtma'];
   $hovaten    = $_POST['txtten'];
   $chucvu = $_POST['txtchucvu'];
   $phongban      = $_POST['txtphongban'];
   $luong     = $_POST['txtluong'];
   $ngayvaolam      = $_POST['txtdate'];
  
  // Bước 01: Kết nối Database Server
  $conn = mysqli_connect('localhost','root','','1951060841_employee');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }
  // Bước 2: Xử lý truy vấn
   $sql = "INSERT into db_nhanvien(maNV,hovaten,chucvu,phongban,luong,ngayvaolam)
   values  ('$ma', '$hovaten', '$chucvu', '$phongban', '$luong', '$ngayvaolam')";
   $ketqua = mysqli_query($conn, $sql);
   $loi = mysqli_error($conn);
    echo $loi;
   
   
    if($ketqua > 0){      
       header("location: index.php");
     }else{
        header("location: error.php"); 
    }
        mysqli_close($conn);
    ?>


