<?php

include 'dbconfig.php';


$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$name = $mysqli->real_escape_string($name);
$address = $mysqli->real_escape_string($address);
$email = $mysqli->real_escape_string($email);
$mobile = $mysqli->real_escape_string($mobile);

if ($id == '') {
	$sql = "INSERT INTO tbl_guests (name, address, email, mobile) VALUES ('$name','$address','$email','$mobile')";
} else {
	$sql = "UPDATE tbl_guests SET name = '$name', address = '$address', mobile = '$mobile', email = '$email' WHERE id = $id";
}
$mysqli->query($sql);

header('Location: index.php');



