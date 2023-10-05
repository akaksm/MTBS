<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Guest</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1>Add Guest</h1>
<form action="process.php" method="post">
<table>
	<tr>
		<td>Name</td>
		<td><input class="form-control" type="text" name="name"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input class="form-control" type="text" name="address"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input class="form-control" type="text" name="mobile"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input class="form-control" type="text" name="email"></td>
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