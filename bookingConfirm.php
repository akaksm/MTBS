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
                                        <td class="sfTotal">Rs. <span id="lytA_ctl34_tdTicketTotal">250.00</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="coupon-wrapper">            
                                <table width="100%" border="0" cellspacing="0" class="ticket-charge">
                                    <tbody>
                                        <tr>
                                            <td class="sfBrdRgt sfBtdTop">Sub Total</td>
                                            <td class="sfBtdTop sfTotal"><span>Rs. &nbsp;</span><span id="lytA_ctl34_spanSubTotalTicket">250.00</span></td>
                                        </tr>
                                        <tr>
                                            <td class="sfBrdRgt  sfTotal">Grand Total</td>
                                            <td class="sfTotal"><span>Rs. &nbsp;</span><span id="lytA_ctl34_spanTotal">250.00</span></td>
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
                                        <span class="spanMovie">Jawan</span>
                                        <p></p>
                                    </li>
                                    <li class="clearfix">
                                        <label>Screen</label>
                                        <span class="spanScreen">Eyeplex Mall, New Baneshwor &gt; Audi 1</span>
                                        <p></p>
                                    </li>
                                    <li class="clearfix">
                                        <label>Date</label>
                                        <span id="spanDate">09/19/2023</span>
                                        <p></p>
                                    </li>
                                    <li class="clearfix">
                                        <label>Time</label>
                                        <span class="spanTime">09:00 PM</span>
                                        <p></p>
                                    </li>
                                </ul>
                                <div class="sfSummaryDetails">
                                    <div class="clearfix">
                                        <label>Seats</label>
                                        <ul id="ulBookedSeats">
                                            <li id="liSeat_82">H9</li>
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
                                                <td id="tdTicketTypeId_1" name="1">Recliner</td><td>1</td><td>*</td><td> Rs. 250.00</td><td>=</td><td> Rs. 250.00</td>
                                            </tr>
                                            <tr style="display:none">
                                                <td id="tdTicketTypeId_2" name="2">Lounge</td>
                                                <td>0</td><td>*</td><td> Rs. 250.00</td><td>=</td><td> Rs. 0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="sfCalculationTable">
                                        <tbody>
                                            <tr>
                                                <td class="sfBrdRgt sfBtdTop">Sub total</td>
                                                <td class="sfBtdTop"><span>Rs. &nbsp;</span><span id="spanSubTotalTicket">250.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="sfBrdRgt  sfTotal">Total</td>
                                                <td class="sfTotal"><span>Rs. &nbsp;</span><span id="spanTotalTicket">250.00</span></td>
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