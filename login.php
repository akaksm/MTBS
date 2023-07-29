<?php



include 'connect.php';

if (isset($_POST['login_submit'])) {
    $loginUsername = mysqli_real_escape_string($con, $_POST['login_username']);
    $loginPassword = mysqli_real_escape_string($con, $_POST['login_password']);

    // Query the database to check if the username/email exists
    $loginQuery = "SELECT cust_id, fname, lname, cust_pass FROM users WHERE cust_email = ?";
    $stmt = mysqli_prepare($con, $loginQuery);
    mysqli_stmt_bind_param($stmt, 's', $loginUsername);
    mysqli_stmt_execute($stmt);
    $loginResult = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($loginResult) > 0) {
        $row = mysqli_fetch_assoc($loginResult);
        $hashedPassword = $row['cust_pass'];


        if (password_verify($loginPassword, $hashedPassword)) {

            session_start();
            $_SESSION['user_id'] = $row['cust_id'];
            $_SESSION['username'] = $row['cust_email']; 

            session_regenerate_id(true);

            header('Location: index.php');
            exit;
        } else {
            // Incorrect password
            ?>
            <script>
                alert("Incorrect password. Please try again.");
            </script>
            
            <?php
                header('Location: create.php');
                exit;
        }
    } else {
        // User not found
        ?>
        <script>
            alert("User not found. Please check your Email.");
        </script>
        <?php
    }
}
?>
