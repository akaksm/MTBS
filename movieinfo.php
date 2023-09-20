<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: create.php');
    exit;
}


if (isset($_GET['id'])) {
    $movieId = $_GET['id'];

    include "connect.php";

    
    $sql = "SELECT * FROM movietable WHERE movie_id = $movieId";

    if ($result = mysqli_query($con, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

           
            $iframeSrc = $row['iframe'];
            $movieTitle = $row['movieTitle'];
            $movieGenre = $row['movieGenre'];
            $description = $row['description'];
            $movieDirector = $row['movieDirector'];
            $movieActors = $row['movieActors'];
            $movieRelDate = $row['movieRelDate'];
            $movieDuration = $row['movieDuration'];

            
            mysqli_close($con);
        } else {
            echo '<h4 class="no-annot">Movie not found</h4>';
        }
    } else {
        echo "ERROR: Couldn't execute the query: " . mysqli_error($con);
    }
} else {
    echo '<h4 class="no-annot">Movie ID not provided</h4>';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/movieinfo.css">
    <title>KSM | CINEMA</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>

<body>
    
  <?php include 'header.php'; ?>

    <section class="movie-booking-info">

      <h1 class="h1"><span class="movie-details">Movie Details</span></h1>

      <div class="show-detail">

        <div class="movies-details">

          <div class="movie-trailer">
            <iframe id="videoFrame" width="100%" height="650" <?php echo $iframeSrc; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen="" style="width: 100%;"></iframe>
          </div>

          <div class="movies-info" itemscope="" itemtype="https://schema.org/Movie">
            <h1 class="h11"><?php echo $movieTitle; ?></h1>
            <h4><?php echo $movieGenre; ?></h4>
            <p itemprop="description"><?php echo $description; ?></p>
            <ul class="movie-cast">
              <li itemprop="director" itemscope="" itemtype="https://schema.org/Person">
                <span itemprop="name">Director :&nbsp;</span><?php echo $movieDirector; ?></li>
              <li itemprop="actor" itemscope="" itemtype="https://schema.org/Person">
                <span itemprop="name">Cast :&nbsp;</span> <?php echo $movieActors; ?></li>
              <li>
                <span>Release On :&nbsp;</span> <?php echo $movieRelDate; ?></li>
              <li>
                <span>Duration :&nbsp;</span> <?php echo $movieDuration; ?></li>
            </ul>
            <div class="detail-timing">

          </div>

        </div>
        </div>                                   
      </div>

      <div id="lytA_ctl20_showTimings" class="view-time">

        <div class="nowshowing-detail seat-status-info">

          <h2 class="inner-header"><span>Viewing Times</span></h2>

          <ul>
            <li>Sold <span class="sold">&nbsp;</span></li>
            <li>Fast-Filling <span class="booked">&nbsp;</span></li>
            <li>Available <span class="available">&nbsp;</span></li>
          </ul>

          <div class="selectShowDays">

            <ul id="ulShowDays">
              <li class="active" value="08/13/2023"><a href="javascript:void(0);" class="tomm">Today</a></li>
              <li class="" value="08/14/2023"><a href="javascript:void(0);" class="tomm">Tomm</a></li>
              <li class="" value="08/15/2023"><a href="javascript:void(0);" class="">15<br>Aug</a></li>
              <li class="" value="08/16/2023"><a href="javascript:void(0);" class="">16<br>Aug</a></li>
              <li class="" value="08/17/2023"><a href="javascript:void(0);" class="">17<br>Aug</a></li>
            </ul>

          </div>

        </div>

        <div class="view-show-time">

          <div class="audi-time">

            <div class="audi-info multiLocation ">

      				<p><span data-sage-model="locationname">Kalimati Trade Center, Kalimati</span></p>
              <p style="display:none;"><span data-sage-model="address" class="location-adddress">Kalimati -  Kathmandu</span></p>

      			</div>

            <div class="show-time-info-wrap">

              <div class="showtime-wrap">

              <ul class="show-time-info">
                <li><a data-sage-model="showtime" class="no-available" href="#">08:00 AM</a></li>
                <li><a data-sage-model="showtime" class="fast-filling" href="/booking.aspx/movieid/10357/showid/24110">03:30 PM</a></li>
                <li><a data-sage-model="showtime" class="fast-filling" href="/booking.aspx/movieid/10357/showid/24106">05:15 PM</a></li>
                <li><a data-sage-model="showtime" class="available" href="/booking.aspx/movieid/10357/showid/24107">08:45 PM</a></li>
              </ul>

            </div>

          </div>

        </div>

        <div class="audi-time">

          <div class="audi-info multiLocation ">

      		  <p><span data-sage-model="locationname">Eyeplex Mall, New Baneshwor</span></p>
            <p style="display:none;"><span data-sage-model="address" class="location-adddress">Kathmandu</span></p>

      	  </div>

          <div class="show-time-info-wrap">

            <div class="showtime-wrap">

              <ul class="show-time-info">
                <li><a data-sage-model="showtime" class="no-available" href="#">07:45 AM</a></li>
                <li><a data-sage-model="showtime" class="no-available" href="#">11:00 AM</a></li>
                <li><a data-sage-model="showtime" class="no-available" href="#">02:15 PM</a></li>
                <li><a data-sage-model="showtime" class="fast-filling" href="/booking.aspx/movieid/10357/showid/24115">05:30 PM</a></li>
                <li><a data-sage-model="showtime" class="available" href="/booking.aspx/movieid/10357/showid/24116">08:45 PM</a></li>
              </ul>

            </div>

          </div>

        </div>

        <!-- <div class="show-time-dom d-none">

          <div class="audi-time"><div class="audi-info multiLocation d-none">

      			<p><span data-sage-model="locationname"></span></p>
            <p style="display:none;"><span data-sage-model="address" class="location-adddress"></span></p>

      		</div>

          <div class="audi-info singleLocation d-none">

      		  <p><span data-sage-model="Screen"></span></p>

      	  </div>

          <ul class="show-time-info">
            <li><a data-sage-model="showtime" class="" href="#"></a></li>
            <div class="no-movie">No show Available</div>
          </ul>

        </div> -->



      </div>

    </section>

  <?php include 'footer.php'; ?>

</body>

</html>