<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เมนู</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>เมนูอาหาร</h1>
    <?php 
        // แสดง error

        // Report all PHP errors
        error_reporting(E_ALL);

        // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1); 

        include "action/connect.php";

        // เลือก(ดึง) ข้อมูลทั้งหมด จาก ตาราง menus
        $sql = "SELECT * FROM menus";
        //                     ที่อยู่ฐาน , Query
        $result = mysqli_query($con, $sql);
        // ทดสอบ
        // var_dump($result);
    ?>

    <table>
        <thead>
            <th>รหัสเมนู</th>
            <th>ชื่อเมนู</th>
            <th>ราคา</th>
            <th>ภาพ</th>
            <th>ประเภท</th>
        </thead>
        <?php 
            foreach($result as $menu){
                ?>
                <tr>
                    <td><?= $menu["menu_id"] ?></td>
                    <td><?= $menu["menu_name"] ?></td>
                    <td><?= $menu["menu_price"] ?></td>
                    <td>
                        <img src="<?= $menu["menu_image"] ?>"
                         alt=""
                         style="width:200px"
                         >
                </td>
                    <td><?= $menu["type_id"] ?></td>
                </tr>
                <?php
            };
        ?>
    </table>

    <a href="menu_type.php">ไปยังหน้าประเภทเมนู</a>
</body>
</html>