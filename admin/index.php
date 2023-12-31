<?php

require_once('../connect.php');

$sql = "SELECT * FROM users";

$query = "SELECT movie_id, movieTitle FROM movietable";

$results = mysqli_query($con,$sql);
$movieresults = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
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
		<h1>Users</h1>

		<a href="create.php">Add New</a>

		<?php if ($results->num_rows > 0):?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>SN</th>
					<th>Name</th>
					<th>Sirname</th>
					<th>Email</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $sn=1;?>
				<?php while($row = $results->fetch_assoc()):?>
					<tr>
						<td><?php echo $sn++;?></td>
						<td><?php echo $row['fname'];?></td>
						<td><?php echo $row['lname'];?></td>
						<td><?php echo $row['cust_email'];?></td>
						<td><?php echo $row['cust_pass'];?></td>
						<td>
							<a href='edit.php?id=<?php echo $row['cust_id'];?>'>Edit</a>&nbsp;&nbsp;
							<a href='javascript:void(0)' onclick="deleteRecord(<?php echo $row['cust_id'];?>)">Delete</a>
						</td>
					</tr>
				<?php endwhile;?>
			</tbody>

		</table>
		<?php else:?>
			<h3>No Records</h3>
		<?php endif;?>
	</div>

	<div class="container">
		<h1>Movies</h1>

		<a href="addMovie.php">Add New</a>

		<?php if ($movieresults->num_rows > 0):?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>SN</th>
					<th>Movie ID</th>
					<th>Movie Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $snn=1;?>
				<?php while($row = $movieresults->fetch_assoc()):?>
					<tr>
						<td><?php echo $snn++;?></td>
						<td><?php echo $row['movie_id'];?></td>
						<td><?php echo $row['movieTitle'];?></td>
						<td>
							<a href='editMovie.php?id=<?php echo $row['movie_id'];?>'>Edit</a>&nbsp;&nbsp;
							<a href='javascript:void(0)' onclick="deleteMovie(<?php echo $row['movie_id'];?>)">Delete</a>
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

				window.location = 'delete.php?id='+cust_id;

			}
		}

		function deleteMovie(id) {
			var r = confirm('Are you sure?');

			if (r == true) {

				window.location = 'deleteMovie.php?id='+movie_id;

			}
		}

	</script>
</body>
</html>