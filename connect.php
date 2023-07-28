<?php

$con=new mysqli('localhost','root','','cinema_db');

if(!$con){
    die(mysqli_error($con));
}

?>