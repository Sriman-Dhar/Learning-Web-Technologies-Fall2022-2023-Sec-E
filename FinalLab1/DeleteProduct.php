<?php

    if(isset($_GET['Product'])){
        $ID= $_GET['Product'];
        $con = mysqli_connect('localhost', 'root', '', 'productlist');
        $sql = "delete from products where id='$ID'";
        $status = mysqli_query($con, $sql);
        if($status){
            header('location:DisplayProduct.php');
        }else{
            echo"Error!!";
        }
    }

?>