
<?php 

if(isset($_GET['err'])){
    if($_GET['err'] == 'invalid_request'){
        echo "invalid request error..";
    }

    if($_GET['err'] == 'null'){
        echo "null username/password";
    }
}


?>

<html>
<head>
<title>Login</title>
</head>
<body>
    <form method="post" action="../Controls/loginCheck.php" enctype="">

    <fieldset>
        <legend>LOGIN</legend>

    <table>
        <tr>
            <td>
                <p>User Id: </p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="userid" value="">
            </td>

        </tr>
        <tr>
            <td>
                <p>Password : </p>
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="password" name="password" value="">
            </td>

        </tr>
        <tr>
            <td><input type="checkbox" name= "remember">Remember Me</td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>

        <tr>
            <td><input type="submit" name= "btn" value="Login"> <a href="../Views/Register.php">Register</a></td>
        </tr>




    </table>
    </fieldset>         
    </form>
</body>
</html>