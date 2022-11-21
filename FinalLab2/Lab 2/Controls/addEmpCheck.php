<?php 
    session_start();
    require_once "Models/staffmemberDBmodel.php";

	
    $positionEMP = $_POST['PositionEmp'];
    $firstnameEMP = $_POST['FirstNameEmp'];
    $lastnameEMP = $_POST['LastNameEmp'];
    $birthEMP = $_POST['dobEmp'];
    $ageEMP = $_POST['ageEmp'];
    $genderEMP = $_POST['genderEmp'];
    $addressEMP = $_POST['addressEmp'];
    $phoneEMP = $_POST['phoneEmp'];
    $mailEMP = $_POST['mailEmp'];
    $passwordEMP = $_POST['passwordEmp'];


    if($positionEMP == "" || $firstnameEMP == "" || $lastnameEMP == "" || $birthEMP == "" ||$ageEMP == "" || $genderEMP == "" || $addressEMP == "" || $phoneEMP == "" || $mailEMP == "" || $passwordEMP == "") {
        header('location: Add_Employee.php?err=null');
    }else{
        $user = ['PositionEmp'=> $positionEMP, 'FirstNameEmp'=>$firstnameEMP, 'LastNameEmp'=>$lastnameEMP, 'dobEmp'=>$birthEMP, 'ageEmp'=>$ageEMP, 'genderEmp'=>$genderEMP, 'addressEmp'=>$addressEMP, 'phoneEmp'=>$phoneEMP, 'mailEmp'=>$mailEMP, 'passwordEmp'=>$passwordEMP];
        $status = addEmp($user);
		if($status){
			header('location: Staff Member Database.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>