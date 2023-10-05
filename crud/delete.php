<?php
include 'dbconfig.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id =='') {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$sql = "DELETE FROM tbl_guests WHERE id = $id";

$result = $mysqli->query($sql);

header('Location: index.php');

?>