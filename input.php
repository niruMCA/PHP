<!DOCTYPE html>
<html>
<head>
	<title>user input</title>
		
		<h1>Wel come </h1>

</head>
<body>
	<center><h3><p>Form design </p></h3></center>

	<center>
		<form method="post" action="process.php">
			<table border="2">
				<tr>
					<td>id</td>
					<td> <input type="text" name="id" placeholder="Enter your id" required> </td>
					
				</tr>

				<tr><td>Name</td>
					<td><input type="text" name="name" placeholder="Enter your name" required=""></td> </tr>
				<tr>
					<td>Gender</td>	
				</tr>
				<tr>
					<td>Female</td>
					<td><input type="radio" name="gender" value="female"></td>

				</tr>
				<tr>
					<td>Male</td>
					<td><input type="radio" name="gender" value="male"></td>

				</tr>

				<tr>
					<td>Password</td>
					<td><input type="Password" name="password" placeholder="type your password"></td>
				</tr>
				<tr>
					<td>Univercity</td>
					<td>
						<input type="text" name=" univercity">
					</td>
				</tr>
				<tr>
					<td>SUBMIT</td>
					<td>
						<input type="submit" name="submit">
					</td>
				</tr>

			</table>
			
		</form>
	</center>

</body>
</html>