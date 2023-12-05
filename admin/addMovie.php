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
		<h1>Add Movie</h1>
		<form action="processMovie.php" method="post">
			<table>
				<tr>
					<td>Movie Image</td>
					<td><input class="form-control" type="file" id="image" accept="image/*" name="movieimg"></td>
				</tr>
				<tr>
					<td>Movie Title</td>
					<td><input class="form-control" type="text" name="movieTitle"></td>
				</tr>
				<tr>
					<td>Genre</td>
					<td><input class="form-control" type="text" name="Genre"></td>
				</tr>
				<tr>
					<td>Duration</td>
					<td><input class="form-control" type="text" name="movieDuration"></td>
				</tr>
				<tr>
					<td>Relese Date</td>
					<td><input class="form-control" type="date" name="movieRelDate"></td>
				</tr>
				<tr>
					<td>Director</td>
					<td><input class="form-control" type="text" name="movieDirector"></td>
				</tr>
				<tr>
					<td>Actors</td>
					<td><input class="form-control" type="text" name="movieActors"></td>
				</tr>
				<tr>
					<td>iframe</td>
					<td><input class="form-control" type="url" name="iframe"></td>
				</tr>
				<tr>
					<td>description</td>
					<td><textarea class="form-control" type="text" name="description" rows="10" cols="30"></textarea></td>
				</tr>
				<tr>
					<td>Rating</td>
					<td><input class="form-control" type="text" name="rating"></td>
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