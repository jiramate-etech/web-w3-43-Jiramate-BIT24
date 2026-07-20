<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประเภทเมนู</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="brand">KFC Menu</div>
        <nav class="site-nav">
            <a href="index.php">หน้าหลัก</a>
            <a href="manage_menu.php">จัดการเมนู</a>
            <a href="menu_type.php" class="active">ประเภทเมนู</a>
        </nav>
    </header>
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

    <table>
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

    <footer class="site-footer">
        <nav class="footer-links">
            <a href="index.php">หน้าหลัก</a>
            <a href="manage_menu.php">จัดการเมนู</a>
            <a href="menu_type.php">ประเภทเมนู</a>
        </nav>
        <p class="credit">จัดทำโดย <strong>Sun</strong> &middot; &copy; <?= date("Y") ?> KFC Menu</p>
    </footer>
</body>
</html>