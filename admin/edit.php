<?php
require_once('../connect.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id =='') {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$sql = "SELECT * FROM users WHERE cust_id = $id";

$result = mysqli_query($con,$sql);

if ($result->num_rows != 1) {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$row = $result->fetch_assoc();
?>
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
<h1>Update User</h1>
<form action="process.php" method="post">
<input type="hidden" name="cust_id" value="<?php echo $row['cust_id'];?>">
<table>
	<tr>
		<td>First Name</td>
		<td><input class="form-control"  type="text" name="fname" value="<?php echo $row['fname'];?>"></td>
	</tr>
	<tr>
		<td>Sirname</td>
		<td><input class="form-control"  type="text" name="lname" value="<?php echo $row['lname'];?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input class="form-control"  type="email" name="cust_email" value="<?php echo $row['cust_email'];?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input class="form-control"  type="password" name="cust_pass" value="<?php echo $row['cust_pass'];?>"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input class="btn btn-primary" type="submit" name="submit" value="Update">
		</td>
	</tr>
</table>
</form>
</div>
</body>
</html>