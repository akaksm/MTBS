  <video autoplay loop muted plays-inline class="back-video">
    <source src="img/vid.mp4" type="video/mp4">
  </video>

  <script>
        // Get the video element
        const video = document.getElementById('myVideo');

        // Check if there is a saved playback position in localStorage
        const savedPosition = localStorage.getItem('videoPosition');

        if (savedPosition) {
            // Set the saved playback position
            video.currentTime = parseFloat(savedPosition);
        }

        // Add an event listener to save the playback position when the video ends
        video.addEventListener('ended', function () {
            // Save the current playback position in localStorage
            localStorage.setItem('videoPosition', video.currentTime);
        });
    </script>

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

        include 'connect.php';

        if (isset($_SESSION['user_id'])) {
          
          if (basename($_SERVER['PHP_SELF']) === 'profile.php' && isset($_SESSION['user_id'])) {
            echo '<a href="logout.php" class="action_btn">Logout</a>';
          } else {
            echo '<a href="profile.php" class="action_btn">Profile</a>';
          }
        } else {
        
          echo '<a href="create.php" class="action_btn">Login</a>';

        }
      ?>
      <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
  </header>