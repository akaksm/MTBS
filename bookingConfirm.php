<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: create.php');
    exit;
}

if (isset($_POST['movieId']) && isset($_POST['screenId']) && isset($_POST['selectedSeats'])) {
    $movieId = $_POST['movieId'];
    $screenId = $_POST['screenId'];
    $selectedSeatsQuery = $_POST['selectedSeats'];

    $selectedSeats = explode(',', $selectedSeatsQuery);

    $num = count($selectedSeats);

    $updatedSeatIDs = [];

    foreach ($selectedSeats as $seatID) {
    $updatedSeatID = $seatID + 1; // Increase the seat ID by one
    $updatedSeatIDs[] = $updatedSeatID;
}

    $updatedSeatIDsString = implode(",", $updatedSeatIDs);


    include "connect.php";

    $selectedSeatNumbers = [];

    if (!empty($updatedSeatIDsString)) {
        // Prepare the SQL query using the IN operator
        $sql = "SELECT seat_no FROM seat WHERE seat_id IN ($updatedSeatIDsString)";
        
        // Execute the query
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each seat number to the array
                $selectedSeatNumbers[] = $row['seat_no'];
            }
        } else {
            echo "Error executing SQL query: " . mysqli_error($con);
        }
    }



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

    $total = $num*$ticketPrice;

    include_once 'config.php'; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bookingConfirm.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>KSM | Cinemas</title>
  <link rel="shortcut icon" type="image/png" href="img/icon.png">
  <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>

<div class="sfContainer sfCol_100 sfInnerPage" id="sfInnerPage">

	<div class="sfContainer sfCol_100 sfInnerwrapper clearfix" id="sfInnerwrapper">

		<div class="sfModule ">

            
            <span class="sfPosition">Booking Confirmation</span>
            <div class="sfModulecontent clearfix">
                <div class="bookingContentWrapper">
                    <div class="sfBookingContent sfCol_65">
                        <div class="booking-cart">
                            <h3 class="booking-title">My Cart</h3>
                            <table width="100%" border="0" cellpadding="0" class="total-cart">
                                <tbody>
                                    <tr>
                                        <td>Ticket Total</td>
                                        <td class="sfTotal">Rs. <span id="lytA_ctl34_tdTicketTotal"><?php echo $total; ?></span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="coupon-wrapper">            
                                <table width="100%" border="0" cellspacing="0" class="ticket-charge">
                                    <tbody>
                                        <tr>
                                            <td class="sfBrdRgt sfBtdTop">Sub Total</td>
                                            <td class="sfBtdTop sfTotal"><span>Rs. &nbsp;</span><span id="lytA_ctl34_spanSubTotalTicket"><?php echo $total; ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="sfBrdRgt  sfTotal">Grand Total</td>
                                            <td class="sfTotal"><span>Rs. &nbsp;</span><span id="lytA_ctl34_spanTotal"><?php echo $total; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <h3 class="booking-title">Buy Online With</h3>
                            <ul class="booking-summary-payment">
                                <li>
                                    <span data-paymentid="3" class="lnkPayment" title="Pay by PayPal">
                                        <img src="img/paypal1.png">
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="selection sfCol_35">
                        <div class="sfUserSummary sfTactileNoiseBg">
                            <div class="summary-pannel">
                                <h6 class=" booking-title">Your Summary Panel</h6>
                                <ul class="sfSummaryDetails list-items">
                                    <li class="clearfix">
                                        <label>Movie</label>
                                        <span class="spanMovie"><?php echo $movieTitle; ?></span>
                                        <p></p>
                                    </li>
                                    <li class="clearfix">
                                        <label>Screen</label>
                                        <span class="spanScreen"><?php echo $theaterName."&nbsp&gt&nbsp".$theaterLocation; ?></span>
                                        <p></p>
                                    </li>
                                    <li class="clearfix">
                                        <label>Date</label>
                                        <span id="spanDate"><?php echo $showtimeDate; ?></span>
                                        <p></p>
                                    </li>
                                    <li class="clearfix">
                                        <label>Time</label>
                                        <span class="spanTime"><?php echo $showtimeStartTime; ?></span>
                                        <p></p>
                                    </li>
                                </ul>
                                <div class="sfSummaryDetails">
                                    <div class="clearfix">
                                        <label>Seats</label>
                                        <ul id="ulBookedSeats">
                                            <?php
                                            foreach ($selectedSeatNumbers as $selectedSeat) {
                                                echo "<li id='liSeat_$selectedSeat'>$selectedSeat</li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="sfGoldTxt sfPriMrgTop">Your Shopping Cart</h4>
                            <div id="divShoppingCart">
                                <div class="sfShoppingCartDetails ticketPricing ticket-summary">
                                    <h6 class="booking-title">Tickets</h6>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="sfCalculationTicket sfCalculationTable" id="tblTicketPurchase">
                                        <tbody>
                                            <tr>
                                                <td id="tdTicketTypeId_1" name="1">Recliner</td><td><?php echo $num; ?></td><td>*</td><td> Rs. <?php echo $ticketPrice; ?></td><td>=</td><td> Rs. <?php echo $total; ?></td>
                                            </tr>
                                            <tr style="display:none">
                                                <td id="tdTicketTypeId_2" name="2">Lounge</td>
                                                <td>0</td><td>*</td><td> Rs. <?php echo $total ?></td><td>=</td><td> Rs. 0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="sfCalculationTable">
                                        <tbody>
                                            <tr>
                                                <td class="sfBrdRgt sfBtdTop">Sub total</td>
                                                <td class="sfBtdTop"><span>Rs. &nbsp;</span><span id="spanSubTotalTicket"><?php echo $total; ?></span></td>
                                            </tr>
                                            <tr>
                                                <td class="sfBrdRgt  sfTotal">Total</td>
                                                <td class="sfTotal"><span>Rs. &nbsp;</span><span id="spanTotalTicket"><?php echo $total; ?></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
</div>

    <?php include 'footer.php'; ?>
</body>
</html>