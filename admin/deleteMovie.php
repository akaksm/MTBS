<?php
require_once('../connect.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id =='') {
	print "Invalid ID<br>";
	print "<a href='.admin/index.php'>Back to List Page</a>";
	exit;
}

$query = "DELETE FROM `movietable` WHERE movie_id = $id";

$movieresults = $mysqli->query($query);

header('Location: .admin/index.php');

?>