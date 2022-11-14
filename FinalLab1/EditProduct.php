<?php
/*
    if(isset($_GET['Product'])){
        $ID= $_GET['Product'];
        $con = mysqli_connect('localhost', 'root', '', 'productlist');
        $sql = "update from products where id='$ID'";
        $status = mysqli_query($con, $sql);
        if($status){
            header('location:DisplayProduct.php');
        }else{
            echo"Error!!";
        }
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Final</title>
</head>
<body>
<form action="EditProductCheck.php" method="post" enctype="">
    <fieldset>
        <legend><h3>ADD PRODUCT</h3></legend>
        <table>
            <tr>
                <td>Name</td>
            </tr>
            <tr>
                <td><input type="text" name = "UPitemName"></td>
            </tr>
            <tr>
                <td>Buying Price</td>
            </tr>
                <td><input type="text" name = "UPpriceBuy"></td>
            </tr>
            <tr>
                <td>Selling Price</td>
            </tr>
            <tr>
                <td><input type="text" name = "UPpriceSell"><hr></td>
            </tr>
            <tr>
                <td><input type="checkbox">Display</td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
            <td>
                <input type="submit" name="btn" value="UPDATE">
            </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>