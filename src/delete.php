<?php
  // index.php truyền dữ liệu , delete nhận dữ liệu từ index.php truyền sang
  $maNV= $_GET['id'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','1951060841_employee');
     if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
   // Bước 02: Thực hiện truy vấn
   $sql = "DELETE  FROM db_nhanvien where maNV='$maNV'";
   $number = mysqli_query($conn,$sql);
   if($number > 0){
       header("location: index.php");

   }else{
       header("location:error.php");
   }
   mysqli_close($conn);

?>