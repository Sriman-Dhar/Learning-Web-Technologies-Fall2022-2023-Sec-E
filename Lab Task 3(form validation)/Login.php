<html>
<head>
	<title>Form Validation</title>
</head>
<body>
		<form action="Validation.php" method="post" enctype="">
			<fieldset>
				<legend><h2>Login</h2></legend>
				<table>
					<tr>
						<td>User Name :</td>
                        <td><input type="text" name="UserName" value=""></td>

					</tr>
					
                    <tr>
						<td>Password :</td>
                        <td><input type="password" name="password" value=""></td>

                    </tr>
				
                    <tr>
                        <td><input type="checkbox">Remember me</td>
                    </tr>
					
					
					<tr>
						<td>
							<input type="submit" name="" value="Submit">
							<a href="Register.html"> Forgot Password? </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>