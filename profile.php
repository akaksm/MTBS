<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to login.php
    header('Location: create.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your header content here -->
</head>
<body>

    <!-- Your navigation bar and other content here -->

    <!-- Profile Dashboard -->
    <div class="profile-dashboard">
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        <p>Email: <?php echo $_SESSION['cust_email']; ?></p>
        <!-- Add more user information here -->

        <!-- Log out button -->
        <form action="logout.php" method="post">
            <input type="submit" value="Log Out">
        </form>
    </div>

    <!-- Your footer content here -->

</body>
</html>
