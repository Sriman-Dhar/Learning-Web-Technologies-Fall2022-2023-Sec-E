<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital Staff Member</title>
</head>
<body>
<a href="Hospital Record.php"><button>BACK</button></a>

    <fieldset>
        <legend>Staff DataBase</legend>
<table align= "center">
<!-- Main Table -->
        <table align= "center">
                    <tr>
                        <td colspan="3"><a href="Views/Add_Employee.php"><button>Add Empolyee</button></a></td>
                        <td colspan="3"><a href="Views/Remove Employee.php"><button>Remove Empolyee</button></a></td>

                    </tr>
                    
        </table>


</table>
<?php
session_start();
//require_once "Models/staffmemberDBmodel.php";
echo "<center><h3>Staff Members:</h3></center>";
$status = showEmp();
?>

    </fieldset>
</body>
</html>
