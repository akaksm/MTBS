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
      <?php
    // Check if the user is logged in (session is set)
    if (isset($_SESSION['user_id'])) {
        if (isset($_SESSION['user_id'])) {
            echo '<a href="logout.php" class="action_btn">Logout</a>';
        } else {
            echo '<a href="profile.php" class="action_btn">Profile</a>';
        }
    } else {
      // If not logged in, show "Login" button and link it to the login page
      echo '<a href="create.php" class="action_btn">Login</a>';
    }
    ?>
      <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
  </header>