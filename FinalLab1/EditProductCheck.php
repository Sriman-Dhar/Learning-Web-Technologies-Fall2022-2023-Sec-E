<?php
session_start();
$up_db_Pname = $_POST['UPitemName'];
$up_db_Pbuy = $_POST['UPpriceBuy'];
$up_db_Psell = $_POST['UPpriceSell'];
if($up_db_Pname== "" || $up_db_Pbuy== "" || $up_db_Psell== ""){
    header(location: 'Edit Product.php?err=null');
}else{
    if(isset($_GET['update'])){
        $ID= $_GET['update'];
        $con = mysqli_connect('localhost', 'root', '', 'productlist');
        $sql = "UPDATE products SET('','{$up_db_Pname}','{$up_db_Pbuy}','{$up_db_Psell}') where id='$ID'";
        $status = mysqli_query($con, $sql);
        if($status){
            header('location:DisplayProduct.php');
        }else{
            echo"Error!!";
        }
    }    
}

?>