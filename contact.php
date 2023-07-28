<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">
    <title>KSM | CINEMA</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
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
          <a href="create.php" class="action_btn">Log In</a>
          <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </header>

      <section class="container">
        <form>
            <h1>Contact Us Form</h1>
            <input type="text" id="firstname" placeholder="First Name" required>
            <input type="text" id="lastname" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" readonly>
            <h4>Type Your Message Here...</h4>
            <textarea required></textarea>
            <button type="button" value="Send" id="button">Send</button>
        </form>
      </section>


      <footer>
        <div class="footer-content">
          <h3>KSM CINEMA</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque eos quis, esse ipsa autem magni aspernatur alias 
             tenetur numquam eum, ut amet officiis provident, praesentium consequatur doloremque illo laudantium! Maiores!</p>
          <ul class="socials">
            <li><a href="https://www.facebook.com/theakaksm/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/_akaksm" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com/in/kshitiz-malla-29476a213/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
          <ul class="socials list">
            <li><a href="about.php"><i>About Us</i></a></li>
            <li><a href="contact.php"><i>Contact Us</i></a></li>
            <li><a href="terms.php"><i>Terms & conditions</i></a></li>
            <li><a href="privacy.php"><i>Privacy Policy</i></a></li>
          </ul>
        </div>
      
        <div class="footer-bottom">
          <p>copyright &copy;2023 KSM CINEMA. designed by <span>KSM</span></p>
        </div>
      </footer>  
</body>
</html>