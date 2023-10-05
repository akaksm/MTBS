<?php

include 'dbconfig.php';

$sql = "SELECT * FROM tbl_guests";

$results = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guestbook</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<h1>Guestbook</h1>

	<a href="create.php">Add New</a>

	<?php if ($results->num_rows > 0):?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $sn=1;?>
			<?php while($row = $results->fetch_assoc()):?>
				<tr>
					<td><?php echo $sn++;?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['mobile'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['address'];?></td>
					<td>
						<a href='edit.php?id=<?php echo $row['id'];?>'>Edit</a>&nbsp;&nbsp;
						<a href='javascript:void(0)' onclick="deleteRecord(<?php echo $row['id'];?>)">Delete</a>
					</td>
				</tr>
			<?php endwhile;?>
		</tbody>

	</table>
	<?php else:?>
		<h3>No Records</h3>
	<?php endif;?>
	</div>

	<script type="text/javascript">
		function deleteRecord(id) {
			var r = confirm('Are you sure?');

			if (r == true) {

				window.location = 'delete.php?id='+id;

			}
		}

	</script>
</body>
</html>