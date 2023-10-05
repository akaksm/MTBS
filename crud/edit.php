<?php
include 'dbconfig.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id =='') {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$sql = "SELECT * FROM tbl_guests WHERE id = $id";

$result = $mysqli->query($sql);

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
	<title>Update Guest</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1>Update Guest</h1>
<form action="process.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<table>
	<tr>
		<td>Name</td>
		<td><input class="form-control"  type="text" name="name" value="<?php echo $row['name'];?>"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input class="form-control"  type="text" name="address" value="<?php echo $row['address'];?>"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input class="form-control"  type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input class="form-control"  type="text" name="email" value="<?php echo $row['email'];?>"></td>
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