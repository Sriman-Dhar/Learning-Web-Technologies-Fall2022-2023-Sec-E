<html>
<head>
	<title>Register Profile</title>
</head>
<body>
		<form action="CheckAccount.php" method="post" enctype="">
			<fieldset>
				<legend><h2>Registration</h2></legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=""></td>
					</tr>
				
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value=""></td>
					</tr>

                    <tr>
						<td>User Name</td>
						<td><input type="text" name="id" value=""></td>
					</tr>
					
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>

                    <tr>
						<td>Confirm Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>

                    <tr>
                    <td>gender</td>
                    <td>
                        <input type="radio" name="gender" value=""/> Male
                        <input type="radio" name="gender" value=""/> Female
                        <input type="radio" name="gender" value=""/> Other
                    </td>
                    </tr>

                    <tr>
						<td>DOB</td>
						<td><input type="date" name="date" value=""></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
                        <td><input type="submit" name="" value="Reset"></td>

					</tr>

				</table>
			</fieldset>
		</form>
</body>
</html>