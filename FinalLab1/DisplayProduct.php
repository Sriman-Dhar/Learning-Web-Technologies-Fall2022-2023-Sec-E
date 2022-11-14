<?php

    $conn = mysqli_connect('localhost', 'root', '', 'productlist');

    $sql = "select * from products";
    $result = mysqli_query($conn, $sql);

        echo "<table border=1>
        
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th></th>
                <th></th>

            </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                $Profit = $data['SELL']-$data['BUY'];
                

        echo "
            <tr>
                <td>{$data['NAME']}</td>
                <td>{$Profit}</td>
                <td><a href="."EditProduct.php?update={$data['id']}"."s>edit</a></td>
                <td><a href="."DeleteProduct.php?Product={$data['id']}".">delete</a></td>
            </tr>";

    }            echo "</table>";



?>



