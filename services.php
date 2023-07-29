<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: create.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/services.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>KSM | Cinemas</title>
  <link rel="shortcut icon" type="image/png" href="img/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>
<body>


<?php include 'header.php'; ?>

  <div class="section">
    <div class="title">
      <h1>Our Services</h1>
    </div>
    <div class="services">
      <div class="card">
        <div class="icon">
          <i class="fas fa-calendar"></i>
        </div>
        <h2>Planning</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti porro iure perferendis velit incidunt esse ad maxime quas, quasi vero quidem enim eveniet laborum recusandae. Quisquam enim quibusdam vitae architecto.</p>
        <a href="" class="button">Read More</a>
      </div>
      <div class="card">
        <div class="icon">
          <i class="fas fa-wrench"></i>
        </div>
        <h2>Renovation</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti porro iure perferendis velit incidunt esse ad maxime quas, quasi vero quidem enim eveniet laborum recusandae. Quisquam enim quibusdam vitae architecto.</p>
        <a href="" class="button">Read More</a>
      </div>
      <div class="card">
        <div class="icon">
          <i class="fas fa-handshake"></i> 
        </div>
        <h2>Support</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti porro iure perferendis velit incidunt esse ad maxime quas, quasi vero quidem enim eveniet laborum recusandae. Quisquam enim quibusdam vitae architecto.</p>
        <a href="" class="button">Read More</a>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
    
</body>
</html>