<?php
session_start();

// Destroy the session to log the user out
session_destroy();

// Redirect the user back to login.php
header('Location: index.php');
exit;
?>
