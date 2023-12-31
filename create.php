<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $fname= mysqli_real_escape_string($con,$_POST['fname']);
    $lname= mysqli_real_escape_string($con,$_POST['lname']);
    $cust_email= mysqli_real_escape_string($con,$_POST['cust_email']);
    $pass= mysqli_real_escape_string($con,$_POST['cust_pass']);

    $cust_pass = password_hash($pass, PASSWORD_BCRYPT);

    $emailquery = " SELECT * FROM users WHERE cust_email='$cust_email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        ?>
        <script>
            alert("Email already exist.");
        </script>
        <?php
    }
    else{

        $sql="INSERT INTO `users`(`cust_id`, `fname`, `lname`, `cust_email`, `cust_pass`) VALUES ('','$fname','$lname','$cust_email','$cust_pass')";

        $result=mysqli_query($con,$sql);

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
    }

}

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/create.css">
    <title>KSM | Cinems</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
</head>
<body>

<?php include 'header.php'; ?>

<div class="wrapper">
   
<!----------------------------- Form box -----------------------------------> 

    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <form class="login-container" id="login" action="login.php" method="post" enctype="multipart/form-data">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <h2>Login</h2>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="login_username" placeholder="Username or Email" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="login_password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="login_submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>

        <!------------------- registration form -------------------------->
        <form name="registrationFormm" class="register-container" id="register" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <h2>Sign Up</h2>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="fname" placeholder="Firstname" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="lname" placeholder="Lastname" required>
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="cust_email" placeholder="Email" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="cust_pass" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check">I agree to terms & conditions</label>
                </div>
                <div class="two">
                    <label><a href="terms.php">Terms & conditions</a></label>
                </div>
            </div>
        </form>
    </div>
</div>  

<footer class="">
    <div class="footer-bottom">
        <p>copyright &copy;2023 KSM CINEMA. designed by <span>KSM</span></p>
      </div>
</footer>

<script src="script/create.js"></script>

</body>
</html>