<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="process.php" method="POST">
		<P>
			<label> username :</label>
			<input type="text" name="user" id="user">
		</P>
		<P>
			<label> password :</label>
			<input type="password" name="pass" id="pass">
		</P>
		<P>
			<input type="submit" value="login" id="btn">
		</P>
	</form>
</div>
</body>
</html>