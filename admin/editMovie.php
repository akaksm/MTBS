<?php
require_once('../connect.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id =='') {
	print "Invalid ID<br>";
	print "<a href='./admin/index.php'>Back to List Page</a>";
	exit;
}

$sql = "SELECT * FROM `movietable` WHERE movie_id = $id";

$result = mysqli_query($con,$sql);

if ($result->num_rows != 1) {
	print "Invalid ID<br>";
	print "<a href='.admin/index.php'>Back to List Page</a>";
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
		<h1>Update Movie</h1>
		<form action="processMovie.php" method="post">
            <input type="hidden" name="movie_id" value="<?php echo $row['movie_id'];?>">
			<table>
				<tr>
					<td>Movie Title</td>
					<td><input class="form-control" type="text" name="movieTitle" value="<?php echo $row['movieTitle'];?>"></td>
				</tr>
				<tr>
					<td>Genre</td>
					<td><input class="form-control" type="text" name="Genre" value="<?php echo $row['movieGenre'];?>"></td>
				</tr>
				<tr>
					<td>Duration</td>
					<td><input class="form-control" type="text" name="movieDuration" value="<?php echo $row['movieDuration'];?>"></td>
				</tr>
				<tr>
					<td>Relese Date</td>
					<td><input class="form-control" type="date" name="movieRelDate" value="<?php echo $row['movieRelDate'];?>"></td>
				</tr>
				<tr>
					<td>Director</td>
					<td><input class="form-control" type="text" name="movieDirector" value="<?php echo $row['movieDirector'];?>"></td>
				</tr>
				<tr>
					<td>Actors</td>
					<td><input class="form-control" type="text" name="movieActors" value="<?php echo $row['movieActors'];?>"></td>
				</tr>
				<tr>
					<td>iframe</td>
					<td><input class="form-control" type="url" name="iframe" value="<?php echo $row['iframe'];?>"></td>
				</tr>
				<tr>
					<td>description</td>
					<td><textarea class="form-control" type="text" name="description" rows="10" cols="30"><?php echo $row['description'];?></textarea></td>
				</tr>
				<tr>
					<td>Rating</td>
					<td><input class="form-control" type="text" name="rating" value="<?php echo $row['rating'];?>"></td>
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