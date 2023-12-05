<?php
include "connect.php"; 

if (
    isset($_POST['updatedSeatIDs']) && 
    isset($_POST['user_id']) &&
    isset($_POST['movieTitle']) &&
    isset($_POST['showtimeDate']) &&
    isset($_POST['ticketPrice'])
) {
    $updatedSeatIDsString = $_POST['updatedSeatIDs'];
    $user_id = $_POST['user_id'];
    $movieTitle = $_POST['movieTitle'];
    $showtimeDate = $_POST['showtimeDate'];
    $ticketPrice = $_POST['ticketPrice'];

    if (!empty($updatedSeatIDsString)) {
        $updateSeatQuery = "UPDATE seat SET is_booked = 1 WHERE seat_id IN ($updatedSeatIDsString)";

        if (mysqli_query($con, $updateSeatQuery)) {
            $bookingDate = date("Y-m-d H:i:s"); 
            $totalPrice = $ticketPrice * count(explode(',', $updatedSeatIDsString));

            $insertBookingQuery = "INSERT INTO booking (cust_id, movieTitle, seat_id, booking_date, total_price)
               VALUES ('$user_id', '$movieTitle', '$updatedSeatIDsString', '$bookingDate', '$totalPrice')";

            if (mysqli_query($con, $insertBookingQuery)) {
               echo "Booking successful! <a href='index.php'>Go back to home</a>";
            } else {
               echo "Error inserting booking data: " . mysqli_error($con);
            }
        } else {
            echo "Error updating seat status: " . mysqli_error($con);
        }
    }
} else {
    echo "Invalid request";
}
?>
