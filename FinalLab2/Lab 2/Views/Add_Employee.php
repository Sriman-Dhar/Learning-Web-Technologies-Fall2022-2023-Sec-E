<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null Data Found!!";
        }
    }
?>

<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="post" action="addEmpCheck.php" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
        <table>
                <tr>
                    <td>Position: </td>
                    <td>
                        <input type="radio" name="PositionEmp" value="Doctor"/> Doctor
                        <input type="radio" name="PositionEmp" value="Nurse"/> Nurse
                        <input type="radio" name="PositionEmp" value="Receptionist"/> Receptionist
                        <input type="radio" name="PositionEmp" value="Accountant"/> Accountant
                        <input type="radio" name="PositionEmp" value="Laboratory Helper"/> Laboratory Helper
                        <input type="radio" name="PositionEmp" value="Pharmacist"/> Pharmacist

                    </td>                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="FirstNameEmp"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name= "LastNameEmp" value= ""></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dobEmp"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name= "ageEmp"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="genderEmp" value="Male"/> Male
                        <input type="radio" name="genderEmp" value="Female"/> Female
                        <input type="radio" name="genderEmp" value="Other"/> Other
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name= "addressEmp"></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="number" name= "phoneEmp"></td>
                </tr>
                <tr>
                    <td>Mail Address:</td>
                    <td><input type="mail" name= "mailEmp"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name = "passwordEmp"></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="btn" value="Submit"> 
                    </td>
                </tr>

            </table>
       
    </fieldset>
    </form>
    <a href="Staff Member Database.php"><button>BACK</button></a>

</body>
</html>