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

            
            
        } else {
            echo '<h4 class="no-annot">Movie not found</h4>';
        }
    } else {
        echo "ERROR: Couldn't execute the query: " . mysqli_error($con);
    }

    $date = '2023-08-13';

    $sql = "SELECT t.name AS theater_name, t.location AS theater_location, s.date, s.start_time, s.status, s.screen_id
            FROM showtime s
            INNER JOIN theater t ON s.screen_id = t.theater_id
            WHERE s.movie_id = $movieId";
    $result = mysqli_query($con, $sql);


    $showtimes = [];


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $showtimes[] = $row;
        }
    }


    mysqli_close($con);
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
                <span itemprop="name">Director :&nbsp;</span><?php echo $movieDirector; ?>
              </li>
              <li itemprop="actor" itemscope="" itemtype="https://schema.org/Person">
                <span itemprop="name">Cast :&nbsp;</span> <?php echo $movieActors; ?>
              </li>
              <li>
                <span>Release On :&nbsp;</span> <?php echo $movieRelDate; ?>
              </li>
              <li>
                <span>Duration :&nbsp;</span> <?php echo $movieDuration; ?>
              </li>
            </ul>


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
                <!-- Generate date links dynamically -->
                <?php
                foreach ($showtimes as $showtime) {
                    $formattedDate = date('m/d/Y', strtotime($showtime['date']));
                    $isActive = ($showtime['date'] == $date) ? 'active' : '';
                    echo '<li value="' . $formattedDate . '"><a href="javascript:void(0);" class="' . $isActive . '">' . date('d', strtotime($showtime['date'])) . '<br>' . date('M', strtotime($showtime['date'])) . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="view-show-time">
        <?php
        foreach ($showtimes as $showtime) {
            echo '<div class="audi-time">';
            echo '<div class="audi-info multiLocation ">';
            echo '<p><span data-sage-model="locationname">' . $showtime['theater_name'] . ', ' . $showtime['theater_location'] . '</span></p>';
            echo '</div>';
            echo '<div class="show-time-info-wrap">';
            echo '<div class="showtime-wrap">';
            echo '<ul class="show-time-info">';
            
            
            $showtimeClass = 'no-available'; 
            if ($showtime['status'] === 'fast-filling') {
                $showtimeClass = 'fast-filling';
            } elseif ($showtime['status'] === 'available') {
                $showtimeClass = 'available';
            }
            
            echo '<li><a data-sage-model="showtime" class="' . $showtimeClass . '" href="booking.php?id=' . $movieId. '&screen_id='. $showtime['screen_id'] .'">' . date('h:i A', strtotime($showtime['start_time'])) . '</a></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

    </section>

  <?php include 'footer.php'; ?>

</body>

</html>