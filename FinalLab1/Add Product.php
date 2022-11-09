<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Final</title>
</head>
<body>
<form action="Add Check.php" method="post" enctype="">
    <fieldset>
        <legend><h3>ADD PRODUCT</h3></legend>
        <table>
            <tr>
                <td>Name</td>
            </tr>
            <tr>
                <td><input type="text" name = "itemName"></td>
            </tr>
            <tr>
                <td>Buying Price</td>
            </tr>
                <td><input type="text" name = "priceBuy"></td>
            </tr>
            <tr>
                <td>Selling Price</td>
            </tr>
            <tr>
                <td><input type="text" name = "priceSell"><hr></td>
            </tr>
            <tr>
                <td><input type="checkbox">Display</td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
            <td>
                <input type="submit" name="btn" value="SAVE">
            </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>