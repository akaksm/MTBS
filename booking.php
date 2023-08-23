<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/booking.css" />
    <title>KSM | Cinemas</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
    <script src="script/booking.js"></script>
  </head>
  <body>

  <?php include 'header.php'; ?>

  <div class="booking-overlay bookingwrap is-visible" >
    <div id="main-booking" class="bookingwrap is-visible">
        <div id="seatPrice-wrap" class="booking-left-panel">
            <div class="booking-details">
                <h3 class="movieName">Gadar 2</h3>
                <span class="booking-audi">Kalimati Trade Center, Kalimati &gt; Audi 1</span>
                <span class="booking-date">Aug 15, 2023</span>
                <span class="booking-time">08:00 AM</span>
            </div>
            <a id="closeSeats" class="sfPageSliderCloseBtn close-menu"></a>
        </div>
        <div class="booking-right-panel">
            <div class="seatplan">
                <div class="seat-status">
                    <ul>
                        <li><span class="sfAvailableSeat"></span>Available</li>
                        <li><span class="sfBlockedSeat"></span>Social Distancing</li>
                        <li><span class="sfSelectedSeat"></span>Selected</li>
                        <li><span class="sfBookedSeat"></span>Booked</li>
                        <li><span class="sfSoldSeat"></span>Sold</li>
                        <li><span class="sfPremiumSeat"></span>Premium</li>
                        <li class="mobile-notice" style="display:none">** Please use right side space if scroll do not work normally</li>
                    </ul>
                </div>
                <div class="divWebLock dn">
                    <label class="webLockMsg">Please contact respective counter if any tickets are available.</label>
                </div>
                <div id="seatPlanWithShow" class="sfSeatPlanGrid" name="24169" data-location="0">
                    <table class="tblSeatArrange" id="tblSeatTicketType_0">
                        <tbody>
                            <tr>
                                <td class="sfSeat" id="tdSeat_L1"><span class="sfSoldSeat sfHoldSeat seatDisable ">L1</span></td>
                                <td class="sfSeat" id="tdSeat_L2"><span class="sfSoldSeat sfHoldSeat seatDisable ">L2</span></td>
                                <td class="sfSeat" id="tdSeat_L3"><span class="sfSoldSeat sfHoldSeat seatDisable ">L3</span></td>
                                <td class="sfSeat" id="tdSeat_L4"><span class="sfSoldSeat sfHoldSeat seatDisable ">L4</span></td>
                                <td class="sfSeat" id="tdSeat_L5"><span class="sfSoldSeat sfHoldSeat seatDisable ">L5</span></td>
                                <td class="sfSeat" id="tdSeat_L6"><span class="sfSoldSeat sfHoldSeat seatDisable ">L6</span></td>
                                <td class="sfSeat" id="tdSeat_L7"><span class="sfSoldSeat sfHoldSeat seatDisable ">L7</span></td>
                                <td class="sfSeat" id="tdSeat_L8"><span class="sfSoldSeat sfHoldSeat seatDisable ">L8</span></td>
                                <td class="sfSeat" id="tdSeat_L9"><span class="sfSoldSeat sfHoldSeat seatDisable ">L9</span></td>
                                <td class="sfSeat" id="tdSeat_L10"><span class="sfSoldSeat sfHoldSeat seatDisable ">L10</span></td>
                                <td class="sfSeat" id="tdSeat_L11"><span class="sfSoldSeat sfHoldSeat seatDisable ">L11</span></td>
                                <td class="sfSeat" id="tdSeat_L12"><span class="sfSoldSeat sfHoldSeat seatDisable ">L12</span></td>
                                <td class="sfSeat" id="tdSeat_L13"><span class="sfSoldSeat sfHoldSeat seatDisable ">L13</span></td>
                                <td class="sfSeat" id="tdSeat_L14"><span class="sfSoldSeat sfHoldSeat seatDisable ">L14</span></td>
                                <td class="sfSeat" id="tdSeat_L15"><span class="sfSoldSeat sfHoldSeat seatDisable ">L15</span></td>
                                <td class="sfSeat" id="tdSeat_L16"><span class="sfSoldSeat sfHoldSeat seatDisable ">L16</span></td>
                                <td class="sfSeat" id="tdSeat_L17"><span class="sfSoldSeat sfHoldSeat seatDisable ">L17</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">K1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">K2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">K3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">K4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">K5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">K6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">K7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">K8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">K9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">K10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">K11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">K12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">K13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">K14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">K15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_K16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">K16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">J1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">J2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">J3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">J4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">J5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">J6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">J7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">J8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">J9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">J10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">J11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">J12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">J13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">J14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">J15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_J16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">J16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">I1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">I2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">I3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">I4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">I5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">I6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">I7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">I8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">I9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">I10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">I11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">I12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">I13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">I14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">I15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_I16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">I16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">H1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">H2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">H3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">H4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">H5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">H6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">H7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">H8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">H9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">H10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">H11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">H12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">H13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">H14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">H15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_H16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">H16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">G1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">G2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">G3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">G4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">G5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">G6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">G7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">G8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">G9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">G10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">G11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">G12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">G13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">G14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">G15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_G16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">G16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">F1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">F2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">F3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">F4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">F5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">F6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">F7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">F8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">F9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">F10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">F11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">F12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">F13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">F14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">F15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_F16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">F16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">E1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">E2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">E3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">E4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">E5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">E6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">E7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">E8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">E9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">E10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">E11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">E12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">E13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">E14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">E15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_E16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">E16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                                <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">D1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">D2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">D3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">D4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">D5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">D6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">D7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">D8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">D9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">D10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">D11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">D12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">D13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">D14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">D15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_D16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">D16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">C1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">C2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">C3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">C4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">C5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">C6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">C7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">C8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">C9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">C10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">C11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">C12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">C13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">C14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">C15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_C16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">C16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">B1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">B2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">B3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">B4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">B5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">B6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">B7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">B8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">B9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">B10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">B11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">B12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">B13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">B14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">B15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_B16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">B16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                            <tr>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A1"><span class="sfAvailableSeat cineSeats " data-seatid="20" id="spanSeat_20" rel="0">A1</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A2"><span class="sfAvailableSeat cineSeats " data-seatid="21" id="spanSeat_21" rel="0">A2</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A3"><span class="sfAvailableSeat cineSeats " data-seatid="22" id="spanSeat_22" rel="0">A3</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A4"><span class="sfAvailableSeat cineSeats " data-seatid="23" id="spanSeat_23" rel="0">A4</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A5"><span class="sfAvailableSeat cineSeats " data-seatid="24" id="spanSeat_24" rel="0">A5</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A6"><span class="sfAvailableSeat cineSeats " data-seatid="25" id="spanSeat_25" rel="0">A6</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A7"><span class="sfAvailableSeat cineSeats " data-seatid="26" id="spanSeat_26" rel="0">A7</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A8"><span class="sfAvailableSeat cineSeats " data-seatid="27" id="spanSeat_27" rel="0">A8</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A9"><span class="sfAvailableSeat cineSeats " data-seatid="28" id="spanSeat_28" rel="0">A9</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A10"><span class="sfAvailableSeat cineSeats " data-seatid="29" id="spanSeat_29" rel="0">A10</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A11"><span class="sfAvailableSeat cineSeats " data-seatid="30" id="spanSeat_30" rel="0">A11</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A12"><span class="sfAvailableSeat cineSeats " data-seatid="31" id="spanSeat_31" rel="0">A12</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A13"><span class="sfAvailableSeat cineSeats " data-seatid="32" id="spanSeat_32" rel="0">A13</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A14"><span class="sfAvailableSeat cineSeats " data-seatid="33" id="spanSeat_33" rel="0">A14</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A15"><span class="sfAvailableSeat cineSeats " data-seatid="34" id="spanSeat_34" rel="0">A15</span></td>
                                <td name="1" class="seatType_1 sfSeat" id="tdSeat_A16"><span class="sfAvailableSeat cineSeats " data-seatid="35" id="spanSeat_35" rel="0">A16</span></td>
                                <td class="coridor_1  sfCinemaHallCorridor"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sfScreenLocation">Screen</div>
        </div>
        <div class="content-right">
            <div class="sfGrandTotal">
                <h2>Total: </h2>
                <h2 class="redHeader">Rs.</h2>
                <h2 class="spanGrandTotal" id="spanMovieTotal">0.00</h2>
            </div>
            <div class="sfProceedButton">
                <span id="btnReserveTicket" class="btnReserveTicket btnProceed sfBigButton sfBlueButton sfFloatLeft">Proceed</span>
            </div>
        </div>
    </div>
  </div>


  <?php include 'footer.php'; ?>
    
  </body>
</html>