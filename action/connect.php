<?php 
// ต้องระบุลงไปใน mysqli_connect = ที่อยู่ฐานข้อมูล , ชื่อผู้ใช้ฐานข้อมูล, รหัสผ่าน, ชื่อฐานข้อมูล 
$con = mysqli_connect("localhost", "root", "", "kfc_db");


// if $con = true (success), $con = false (fail)
// if(!$con){
//    die("เชื่อมต่อไม่สำเร็จ");
//}
//echo "เชื่อมต่อสำเร็จ";
?>