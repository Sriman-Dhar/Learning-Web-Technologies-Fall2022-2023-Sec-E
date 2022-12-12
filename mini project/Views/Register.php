<?php

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "null username/password";
    }
}
?>

<html>

<head>
    <title>Signup</title>
</head>

<body>
    <form method="post" action="../Controls/registerCheck.php" enctype="">
        <fieldset>
            <legend>REGISTRATION</legend>


            <table>

                <tr>
                    <td>
                        <p>ID: </p>
                    </td>

                </tr>
                <tr>
                <td>
                        <input type="text" name="userid" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Password: </p>
                    </td>
                </tr>
                <tr>
                <td>
                        <input type="password" name="password" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Confirm password: </p>
                    </td>
                </tr>
                <tr>
                <td>
                        <input type="password" name="conpassword" value="">
                </td>
                </tr>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name= "name"></td>
                </tr>

                <tr>
                    <td>
                        <p>Email: </p>
                    </td>
                </tr>
                <tr>
                <td>
                        <input type="text" name="email" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>User type [User/Admin]</p>
                    </td>
                </tr>
                <tr>
                <td>

                    <select name="userType">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    
                    </select>

                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>

                    <td><input type="submit" name="btn" value="Register" /> <a href="..Views/login.php">Login</a></td>



                </tr>
            </table>

        </fieldset>
    </form>
</body>

</html>