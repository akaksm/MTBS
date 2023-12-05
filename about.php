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
    <link rel="stylesheet" href="css/about.css">
    <title>KSM | CINEMA</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <script src="https://kit.fontawesome.com/d0ece00d26.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="about">
        <div class="main">
            <img src="img/icon.png">
            <div class="about-text">
                <h1>About Us</h1>
                <h5>Developer & <span>Designer</span></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum delectus architecto aperiam voluptas dolorum libero commodi rerum eaque at magnam. Accusantium, dicta repellendus atque provident impedit numquam debitis assumenda consectetur.</p>
                <button type="button">Let's Talk</button>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    
</body>
</html>