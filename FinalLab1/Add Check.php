<?php
session_start();
$db_Pname = $_POST['itemName'];
$db_Pbuy = $_POST['priceBuy'];
$db_Psell = $_POST['priceSell'];
if($db_Pname== "" || $db_Pbuy== "" || $db_Psell== ""){
    header(location: 'Add Product.php?err=null');
}else{
    $con = mysqli_connect('localhost', 'root', '', 'productlist');
    $sql = "insert into products value('','{$db_Pname}', '{$db_Pbuy}', '{$db_Psell}')";
    $status = mysqli_query($con, $sql);
        if($status){
            header('location: DisplayProduct.php');
        }else{
            echo "Database error...";
        }
}
?>
