<?php 

$id = $_GET['id'];

include "connect.php";
    $sql = "DELETE FROM menus WHERE menu_id = '$id' ";

    $result = mysqli_query($con, $sql);
    
if(!$result){
    echo "Error";
}else{
    header("Location: ../manage_menu.php");
    exit;
}