<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
	<h2>Registration</h2>
	<form action="new.php" method="POST">
		<table>
			<tr><td>Full Name: </td><td><input type="text" name="name" placeholder="Full Name"></td></tr>
			<tr><td>Email: </td><td><input type="email" name="email" placeholder="Email"></td></tr>
			<tr><td>Phone Number: </td><td><input type="tel" name="phone" placeholder="Phone Number"></td></tr>
			<tr><td>Date of Birth: </td><td><input type="date" name="date" placeholder="Phone Number"></td></tr>
			<tr><td>Password: </td><td><input type="password" name="pass1" placeholder="Password"></td></tr>
			<tr><td>Confirm Password: </td><td><input type="password" name="pass2" placeholder="Confirm Password"></td></tr>
			<tr><td>Gender: </td><td><input type="radio" name="gender" value="Male">Male
                                     <input type="radio" name="gender" value="Female">Female
                                     <input type="radio" name="gender" value="Others">Others
			</td></tr>
			<tr><td></td><td><input type="submit" name="btn" value="Submit"></td></tr>
		</table>
	</form>

</body>
</html>