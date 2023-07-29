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
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>KSM | Cinemas</title>
  <link rel="shortcut icon" type="image/png" href="img/icon.png">
  <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>


  <section class="container">
    <div class="slider-wrapper">
      <div class="slider">
        <img id="slide-1" src="img/MI-4.jpg" alt="MI-4" >
        <img id="slide-2" src="img/img-2.jpg" alt="OPPENHEIMER" >
        <img id="slide-3" src="img/img-3.jpg" alt="JAWAN" >
        <img id="slide-4" src="img/img-3.webp" alt="SALAAR" >
      </div>
      <div class="slider-nav">
        <a href="#slider-1"></a>
        <a href="#slider-2"></a>
        <a href="#slider-3"></a>
        <a href="#slider-4"></a>
      </div>
    </div>
  </section>

  <section class="showing now">
      <h3>Now Showing</h3>
  </section>

  <section class="cards">

    <div class="bx">
      <img src="img/c1.jpeg" alt="MI-4">
      <div class="content">
        <h3>MI-4</h3>
        <p>Action, Drama, Fantsy</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c2.jpg" alt="MI-4">
      <div class="content">
        <h3>OPPENHEIMER</h3>
        <p>Drama, Biography</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c3.jpg" alt="MI-4">
      <div class="content">
        <h3>BARBIE</h3>
        <p>Comedy, Adventure</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c4.jpg" alt="MI-4">
      <div class="content">
        <h3>BAGAN</h3>
        <p>Social Drama</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c5.jpg" alt="MI-4">
      <div class="content">
        <h3>INSIDIOUS</h3>
        <p>Horror, Thriller</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c6.jpg" alt="MI-4">
      <div class="content">
        <h3>INDIANA JHONES</h3>
        <p>Action, Adventure</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c7.jpg" alt="MI-4">
      <div class="content">
        <h3>S P K K</h3>
        <p>Comedy, Drama,</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c8.jpg" alt="MI-4">
      <div class="content">
        <h3>BIHE PASS</h3>
        <p>Love Story</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

    <div class="bx">
      <img src="img/c9.jpg" alt="MI-4">
      <div class="content">
        <h3>JAARI</h3>
        <p>Drama</p>
        <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
      </div>
    </div>

  </section>

  <section class="showing next">
    <h3>Up Comming Next</h3>
</section>

<section class="cards">

  <div class="bx">
    <img src="img/c10.png" alt="MI-4">
    <div class="content">
      <h3>TALK TO ME</h3>
      <p>Horror, Thriller</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

  <div class="bx">
    <img src="img/c11.jpg" alt="MI-4">
    <div class="content">
      <h3>ROCKY AUR RANI</h3>
      <p>Comedu, Family, Drama</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

  <div class="bx">
    <img src="img/c12.jpg" alt="MI-4">
    <div class="content">
      <h3>MIG 2: THE TRENCH</h3>
      <p>Action, Adventure, Horror</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

  <div class="bx">
    <img src="img/c13.jpg" alt="MI-4">
    <div class="content">
      <h3>OMG 2</h3>
      <p>Comedy, Drama</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

  <div class="bx">
    <img src="img/c14.jpg" alt="MI-4">
    <div class="content">
      <h3>BLUE BEETLE</h3>
      <p>Action, Adventure</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

  <div class="bx">
    <img src="img/c15.jpg" alt="MI-4">
    <div class="content">
      <h3>JAWAN</h3>
      <p>Action, Thriller</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

  <div class="bx">
    <img src="img/c16.jpg" alt="MI-4">
    <div class="content">
      <h3>SALAAR</h3>
      <p>Action, Drama, Thriller</p>
      <h6><span>IMDB</span><i class="bi bi-star-fill"></i>9.0</h6>
    </div>
  </div>

</section>

<?php include 'footer.php'; ?>

</body>
</html>