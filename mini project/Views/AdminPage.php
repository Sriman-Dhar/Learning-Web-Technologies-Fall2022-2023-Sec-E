<?php
    session_start();
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
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table align="center">        
            <tr>
                <td>
                    <h1>Welcome <?php echo $_SESSION['user']['name']?></h1>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="../Views/Profile.php">Profile</a>
                </td>
            </tr>
            <tr align= "center">
                <td>
                    <a href="../Views/Changepassword.php">Change Password</a>
                </td>
            </tr>
            <tr align= "center">
                <td>
                    <a href="../Views/viewuser.php">View Users</a>
                </td>
            </tr>

            <tr align= "center">
                <td>
                    <a href="../Controls/logout.php">Logout</a>
                </td>
            </tr>
        </table>
    </fieldset>
    
</body>
</html>