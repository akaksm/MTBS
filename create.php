<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: create.php');
    exit;
}

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
            // Handle database insertion failure
            ?>
            <script>
                alert("Error: Data could not be inserted.");
            </script>
            <?php
            die(mysqli_error($con));
        }
    }

}

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
    <video autoplay loop muted plays-inline class="back-video">
        <source src="img/vid.mp4" type="video/mp4">
      </video>
    
      <header>
    
    
        <div class="navbar">
    
          <div class="logo"><a href="index.php">KSM CINEMA</a></div>
          <ul class="links">
            <li><a href="index.php" >Home</a></li>
            <li><a href="about.php" >About</a></li>
            <li><a href="services.php" >services</a></li>
            <li><a href="contact.php" >Contact</a></li>
          </ul>
          <a href="create.php" class="action_btn" onclick="login()">Log In</a>
          <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </header>

      

 <div class="wrapper">
   

<!----------------------------- Form box -----------------------------------> 
<!-- <form method="post">    -->
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
        <form name="registrationFormm" class="register-container" id="register" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" action="#">
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



<script>


    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

<script>
    function validateForm() {
        var fname = document.forms["registrationForm"]["fname"].value;
        var lname = document.forms["registrationForm"]["lname"].value;
        var email = document.forms["registrationForm"]["cust_email"].value;
        var password = document.forms["registrationForm"]["cust_pass"].value;
        var rememberMe = document.getElementById("register-check").checked;

        // Check if any of the required fields are empty
        if (fname === '' || lname === '' || email === '' || password === '') {
            alert('Please fill in all the fields.');
            return false;
        }

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailRegex)) {
            alert('Please enter a valid email address.');
            return false;
        }

        // Validate password complexity
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;
        if (!password.match(passwordRegex)) {
            alert('Password must be between 8 and 16 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character.');
            return false;
        }

        // Validate the checkbox (I agree to terms and conditions)
        if (!rememberMe) {
            alert('Please check the Remember Me box.');
            return false;
        }

        return true;

        // Validate login form
        var loginUsername = document.forms["registrationFormm"]["login_username"].value;
        var loginPassword = document.forms["registrationFormm"]["login_password"].value;

        if (loginUsername === '' || loginPassword === '') {
            alert('Please fill in both Username/Email and Password fields for login.');
            return false;
        }

        return true; 
    }
</script>



</body>
</html>