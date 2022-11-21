<?php
session_start();
    require_once "../Models/staffmemberDBmodel.php";
    $searchEMP = $_POST['empID'];

    if ($searchEMP == "") {
        echo "Empty!!";

    }else {
        {
            $user = ['empID'=> $searchEMP];
            $status = delEmp($user);
            if($status){
                header('location: ../Views/Staff Member Database.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>