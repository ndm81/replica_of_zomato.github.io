<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<h1 align="center">Admin Login</h1>
		<form action="login.php" method="post">
			<table align="center">
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="Username" required></td>
					</tr>
					
					<td>Password</td>
					<td>
						<input type="Password" name="parse" required></td>
					</tr>

					<tr>
						<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
					</tr>
			</table>
		</form>
</body>
</html>

<? php