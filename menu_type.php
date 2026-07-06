<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประเภทเมนู</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ประเภทเมนู</h1>
    <?php 
        // แสดง error

        // Report all PHP errors
        error_reporting(E_ALL);

        // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1); 

        include "action/connect.php";

        // เลือก(ดึง) ข้อมูลทั้งหมด จาก ตาราง menus
        $sql = "SELECT * FROM menu_type";
        //                     ที่อยู่ฐาน , Query
        $result = mysqli_query($con, $sql);
        // ทดสอบ
        // var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>รหัสประเภท</th>
            <th>ชื่อประเภท</th>
        </thead>
        <?php 
            foreach($result as $menu){
        ?>
        <tr>
            <td><?= $menu["type_id"]?></td>
            <td><?= $menu["type_name"]?></td>
        </tr>
        <?php 
        };
    ?>
    </table>

    <a href="index.php">กลับไปยังหน้าเมนู</a>
</body>
</html>