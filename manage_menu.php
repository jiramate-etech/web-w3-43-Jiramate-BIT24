<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการเมนู</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="brand">KFC Menu</div>
        <nav class="site-nav">
            <a href="index.php">หน้าหลัก</a>
            <a href="manage_menu.php" class="active">จัดการเมนู</a>
            <a href="menu_type.php">ประเภทเมนู</a>
        </nav>
    </header>
    <h1>จัดการเมนู</h1>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1); 

        include "action/connect.php";

        $sql = "SELECT * FROM menus";
        $result = mysqli_query($con, $sql);
    ?>

    <div class="table-top">
        <a class="btn btn-edit" href="add_menu.php">+ เพิ่มเมนูใหม่</a>
    </div>

    <table>
        <thead>
            <th>รหัสเมนู</th>
            <th>ชื่อเมนู</th>
            <th>ราคา</th>
            <th>ภาพ</th>
            <th>ประเภท</th>
            <th>จัดการ</th>
        </thead>
        <?php
            foreach($result as $menu){
                ?>
                <tr>
                    <td><?= $menu["menu_id"] ?></td>
                    <td><?= $menu["menu_name"] ?></td>
                    <td><?= $menu["menu_price"] ?></td>
                    <td>
                        <img src="<?= $menu["menu_image"] ?>" alt="">
                    </td>
                    <td><?= $menu["type_id"] ?></td>
                    <td>
                        <div class="row-actions">
                            <!-- edit -->
                            <a class="btn btn-edit" href="edit_menu.php?id=<?= $menu["menu_id"] ?>">แก้ไข</a>
                            <!-- delete -->
                            <a class="btn btn-del" href="action/delete_menu.php?id=<?= $menu["menu_id"] ?>">ลบ</a>
                        </div>
                    </td>
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