<?php

require_once('../connect.php');


$id = isset($_POST['id']) ? $_POST['id'] : '';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['cuat_email'];
$pass = $_POST['cust_pass'];

$first_name = $mysqli->real_escape_string($fname);
$last_name = $mysqli->real_escape_string($lname);
$cust_email = $mysqli->real_escape_string($email);
$Cust_pass = $mysqli->real_escape_string($pass);
$cust_pass = password_hash($Cust_pass, PASSWORD_BCRYPT);

if ($id == '') {
	$sql = "INSERT INTO `users`(`fname`, `lname`, `cust_email`, `cust_pass`) VALUES ('$first_name','$last_name','$cust_email','$cust_pass')";
} else {
	$sql = "UPDATE `users` SET `fname`='$first_name',`lname`='$last_name',`cust_email`='$cust_email',`cust_pass`='$cust_pass' WHERE 'cust_id' = $id";
}
$result = mysqli_query($con,$sql);

if($result){
            ?>
            <script>
                alert("Data inserted successfully")
            </script>
            <?php
        }else{

            ?>
            <script>
                alert("Error: Data could not be inserted.");
            </script>
            <?php
            die(mysqli_error($con));
        }

		mysqli_close($con);

header('Location: ./admin/index.php');



