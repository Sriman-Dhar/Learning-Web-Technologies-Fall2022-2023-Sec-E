<?php
require_once "db.php";

function addUser($user)
{
    $conn = getConnection();
    $sql = "insert into infodb values('', '{$user['userid']}', '{$user['name']}', '{$user['password']}', '{$user['email']}', '{$user['userType']}')";
    $status = mysqli_query($conn, $sql);

    $sql2 = "insert into logindb values('{$user['userid']}', '{$user['password']}', '{$user['userType']}', '')";
    $status2 = mysqli_query($conn, $sql2);

    return $status;
}
function loginUser($user)
{
    $conn = getConnection();
    $sql = "select * from logindb where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            if($row['role'] == "Admin")
            {
                header('Location: ../Views/AdminPage.php');
            }else{
                header('Location: ../Views/UserPage.php');
            }

        }
    } else {
        header('Location: ../Views/login.php');
    }
}
?>