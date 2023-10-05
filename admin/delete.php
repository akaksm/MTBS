<?php
require_once('../connect.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id =='') {
	print "Invalid ID<br>";
	print "<a href='index.php'>Back to List Page</a>";
	exit;
}

$sql = "DELETE FROM users WHERE custid = $id";

$result = $mysqli->query($sql);

header('Location: .admin/index.php');

?>