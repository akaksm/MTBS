<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: create.php');
    exit;
}

$seatData = [];

if (isset($_GET['id']) && isset($_GET['screen_id'])) {
    $movieId = $_GET['id'];
    $screenId = $_GET['screen_id'];

    include "connect.php";

    $sqlMovie = "SELECT m.movieTitle, t.name AS theater_name, t.location AS theater_location, s.date AS showtime_date, s.start_time AS showtime_start_time, s.ticket_price
    FROM movietable m
    JOIN showtime s ON m.movie_id = s.movie_id
    JOIN screen sc ON s.screen_id = sc.screen_id
    JOIN theater t ON sc.theater_id = t.theater_id
    WHERE m.movie_id =$movieId";
    $resultMovie = $con->query($sqlMovie);

    if ($resultShowtime = mysqli_query($con, $sqlMovie)) {
        if ($resultShowtime->num_rows > 0) {
            $rowShowtime = $resultShowtime->fetch_assoc();
            $movieTitle = $rowShowtime['movieTitle'];
            $theaterName = $rowShowtime['theater_name'];
            $theaterLocation = $rowShowtime['theater_location'];
            $showtimeDate = $rowShowtime['showtime_date'];
            $showtimeStartTime = $rowShowtime['showtime_start_time'];
            $ticketPrice = $rowShowtime['ticket_price'];
            
        } else {
            echo '<h4 class="no-annot">Movie not found</h4>';
        }
    } else {
        echo "ERROR: Couldn't execute the query: " . mysqli_error($con);
    }

    $fetch_seat_query="SELECT seat_no, is_booked FROM seat WHERE screen_id = $screenId";
    $fetch_seat_query_result=mysqli_query($con,$fetch_seat_query);
    $seat_status=array();
    if($fetch_seat_query_result)
    {
        $total_seats=mysqli_num_rows($fetch_seat_query_result);
        while($row=mysqli_fetch_assoc($fetch_seat_query_result))
        {
            $seat_no[]=$row["seat_no"];
            $seat_status[]=$row["is_booked"];
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/booking.css" />
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
    <title>KSM | Cinemas</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
  </head>
  <body>


      <video autoplay loop muted plays-inline class="back-video">
        <source src="img/vid.mp4" type="video/mp4">
      </video>


    <div class="main">

        <div class="booking-overlay bookingwrap is-visible" >
            <div id="main-booking" class="bookingwrap is-visible">
                <div id="seatPrice-wrap" class="booking-left-panel">
                    <div class="booking-details">
                        <h3 class="movieName"><?php echo $movieTitle; ?></h3>
                        <span class="booking-audi"><?php echo $theaterName."&nbsp&gt&nbsp".$theaterLocation; ?></span>
                        <span class="booking-date"><?php echo $showtimeDate; ?></span>
                        <span class="booking-time"><?php echo $showtimeStartTime; ?></span>
                    </div>
                    <a class="close-menu"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>
        </div>

        <div class="movie-container">
          <label> Your movie:</label>
          <select id="movie">
            <option value="<?php echo $ticketPrice; ?>"><?php echo $movieTitle; ?></option>
          </select>
        </div>

        <ul class="showcase">
          <li>
            <div class="seat"></div>
            <small>Available</small>
          </li>
          <li>
            <div class="seat selected"></div>
            <small>Selected</small>
          </li>
          <li>
            <div class="seat sold"></div>
            <small>Sold</small>
          </li>
        </ul>
        <div class="container">
          <div class="screen"></div>
            <?php
                for ($row = 'A'; $row <= 'F'; $row++) {
                    echo "<div class='row'>";             
                    for ($i = 1; $i <= 8; $i++) {
                        $seatNumber = $row . $i;
                        $seatId = (ord($row) - ord('A')) * 8 + $i - 1; 
                        $seatClass = $seat_status[$seatId] == "1" ? 'seat sold' : 'seat';
                    
                        echo "<div id='$seatId' class='$seatClass'>$seatNumber</div>";
                    }               
                    echo "</div>";
                }
            ?>
        </div>
        <p class="text">
          You have selected <span id="count">0</span> seat for a price of RS.<span
            id="total"
            >0</span
          >
        </p>
        <form action="bookingConfirm.php" method="post">
          <!-- Other form fields if any -->
          <input type="hidden" id="selectedSeatsInput" name="selectedSeats" value="">
          <input type="hidden" name="movieId" value="<?php echo $movieId; ?>">
          <input type="hidden" name="screenId" value="<?php echo $screenId; ?>">
          <button type="submit" class="btn">Proceed</button>
        </form>
    </div>
    <script src="script/booking.js"></script>
  </body>
</html>
