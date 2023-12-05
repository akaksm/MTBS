<?php

session_start();

include 'connect.php';

$userID = $_SESSION['user_id'];
$profileQuery = "SELECT * FROM users WHERE cust_id='$userID'";
$profileResult = mysqli_query($con, $profileQuery);
$profileData = mysqli_fetch_assoc($profileResult);

$ticketHistoryQuery = "SELECT b.movieTitle, b.booking_date, b.seat_id, b.total_price, s.seat_no
                       FROM booking b
                       INNER JOIN seat s ON b.seat_id = s.seat_id
                       WHERE b.cust_id='$userID'";

$ticketHistoryResult = mysqli_query($con, $ticketHistoryQuery);

if (isset($_POST['update_profile'])) {
    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $updateQuery = "UPDATE users SET fname='$firstName', lname='$lastName', cust_email='$email' WHERE cust_id='$userID'";
    mysqli_query($con, $updateQuery);

    header('Location: profile.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>KSM | Cinemas</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="profile-section">
        <div class="container">
            <h2>My Profile</h2>
            <div class="profile-info">
                <form action="" method="post" class="form-box">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" id="first_name" value="<?php echo $profileData['fname']; ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" value="<?php echo $profileData['lname']; ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="<?php echo $profileData['cust_email']; ?>"required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update_profile" value="Update Profile">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="ticket-history-section">
        <div class="ticket-container">
            <h2>My Ticket History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Movie Title</th>
                        <th>Booking Date</th>
                        <th>Seat Number</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($ticketHistoryData = mysqli_fetch_assoc($ticketHistoryResult)): ?>
                        <tr>
                            <td><?php echo $ticketHistoryData['movieTitle']; ?></td>
                            <td><?php echo $ticketHistoryData['booking_date']; ?></td>
                            <td><?php echo $ticketHistoryData['seat_no']; ?></td>
                            <td><?php echo $ticketHistoryData['total_price']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>

</body>
</html>
