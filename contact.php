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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">
    <title>KSM | CINEMA</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>
<body>
    
<?php include 'header.php'; ?>

      <section class="container">
        <form>
            <h1>Contact Us Form</h1>
            <input type="text" id="firstname" placeholder="First Name" required>
            <input type="text" id="lastname" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" readonly>
            <h4>Type Your Message Here...</h4>
            <textarea required></textarea>
            <button type="button" value="Send" id="button">Send</button>
        </form>
      </section>


      <?php include 'footer.php'; ?> 
</body>
</html>