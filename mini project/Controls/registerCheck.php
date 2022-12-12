<?php 
    session_start();
    require_once "../Models/logindbmodel.php";

    $id             = $_POST['userid'];
    $password       = $_POST['password'];
    $conpassword    = $_POST['conpassword'];
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $type           = $_POST['userType'];


     if($id == "" || $password == "" || $conpassword == ""|| $name == "" || $email == ""|| $type == "") {
        header('location: ../Views/Register.php?err=null');
    }else{
        if($password == $conpassword){
            $user = ['userid'=> $firstName, 'password'=>$password, 'name' => $name, 'email'=>$email, 'userType'=>$type];
            $status = addUser($user);
            $_SESSION['user'] = $user;
            if($status){
                $user = ['name' => $status['name']];
                $_SESSION['user'] = $user;
                header('location: ../Views/logInPatient.php');
            }else{
                echo "Database error...";
            }
        }   else{
            echo "Password Does not Match!!";
        }
    }
