<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขเมนู</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="brand">KFC Menu</div>
        <nav class="site-nav">
            <a href="index.php">หน้าหลัก</a>
            <a href="manage_menu.php">จัดการเมนู</a>
            <a href="menu_type.php">ประเภทเมนู</a>
        </nav>
    </header>
    <h1>แก้ไขเมนู</h1>

    <?php
        $id = $_GET['id'];
        include "action/connect.php";

        $sql = "SELECT * FROM menus WHERE menu_id = '$id' ";

        $result = mysqli_query($con, $sql);
        
        $menu = mysqli_fetch_assoc($result);

        // var_dump($menu);
    ?>
    <form class="form-card" action="action/update_menu.php" method="post">
        <label for="">รหัสเมนู</label>
        <input type="text" name="menu_id" value="<?= $menu['menu_id'] ?>"> <br>

        <label for="">ชื่อเมนู</label>
        <input type="text" name="menu_name" value="<?= $menu['menu_name'] ?>"> <br>

        <label for="">ราคา</label>
        <input type="text" name="menu_price" value="<?= $menu['menu_price'] ?>"> <br>

        <label for="">ภาพ</label>
        <input type="text" name="menu_image" value="<?= $menu['menu_image'] ?>"> <br>

        <?php
            include "action/connect.php";
            $sql = "SELECT * FROM menu_type";
            // ดึงมาแล้วเก็บใน result
            $result = mysqli_query($con, $sql);
        ?>
        <label for="">ประเภทเมนู</label>
        <select name="type_id">
            <?php 
                foreach($result as $type){
                    ?>
                        <option value="<?= $type["type_id"] ?>"
                        <?= $type["type_id"] == $menu["type_id"] ? "selected" : '' ?>
                        > 
                        <?= $type["type_name"] ?> </option>
                    <?php
                }
            ?>
        </select>
        <br>
        <button class="btn btn-edit">บันทึก</button>
    </form>

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