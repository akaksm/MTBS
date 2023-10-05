<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KSM | Cinemas</title>
  	<link rel="shortcut icon" type="image/png" href="img/icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1>Add User</h1>
<form action="process.php" method="post">
<table>
	<tr>
		<td>First Name</td>
		<td><input class="form-control" type="text" name="fname"></td>
	</tr>
	<tr>
		<td>Sirname</td>
		<td><input class="form-control" type="text" name="lname"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input class="form-control" type="email" name="cust_email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input class="form-control" type="password" name="cust_pass"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</td>
	</tr>
</table>
</form>
</div>
</body>
</html>