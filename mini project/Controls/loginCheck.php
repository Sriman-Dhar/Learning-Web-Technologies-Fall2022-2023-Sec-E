<?php
session_start();
require_once "../Models/logindbmodel.php";
$Username = $_POST['userid'];
$Password = $_POST['password'];

if ($Username == "" || $Password == "") {
    header('location: ../views/login.php?err=null');
} else {
    $user = ['userid' => $Username, 'password' => $Password];
    $status = loginUser($user);
     if ($status) {
        //echo "";
    }


    echo "invalid user";
}

