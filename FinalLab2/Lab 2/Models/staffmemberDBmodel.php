<?php 
    require_once "db.php";


    function addEmp($user){
        $con = getConnection();
        $sql = "insert into staffmemberdb values('', '{$user['PositionEmp']}', '{$user['FirstNameEmp']}', '{$user['LastNameEmp']}','{$user['dobEmp']}','{$user['ageEmp']}','{$user['genderEmp']}','{$user['addressEmp']}','{$user['phoneEmp']}','{$user['mailEmp']}','{$user['passwordEmp']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function showEmp(){
        $conn = getConnection();
        $sql = "select * from staffmemberdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>

        <th>Employee ID</th>
        <th>Employee Position</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Email Address</th>
        <th>Password</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['EmployeeID']}</td>
            <td>{$data['Position']}</td>
            <td>{$data['First Name']}</td>
            <td>{$data['Last Name']}</td>
            <td>{$data['DoB']}</td>
            <td>{$data['Age']}</td>
            <td>{$data['Gender']}</td>
            <td>{$data['Address']}</td>
            <td>{$data['PhoneNumber']}</td>
            <td>{$data['MailAddress']}</td>
            <td>{$data['Password']}</td>
        </tr>";
    }
}

    function delEmp($user){
        $conn = getConnection();
        $sql = "DELETE from staffmemberdb where EmployeeID='{$user['empID']}'";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function deleteUser(){
        
    }

    function getUserByID(){
        
    }
?>