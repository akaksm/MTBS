<?php

require_once('../connect.php');

$id = isset($_POST['id']) ? $_POST['id'] : '';
$movieimg = isset($_POST['movieimg']) ? $_POST['movieimg'] : '';
$movieTitle = isset($_POST['movieTitle']) ? $_POST['movieTitle'] : '';
$movieGenre = isset($_POST['movieGenre']) ? $_POST['movieGenre'] : '';
$movieDuration = isset($_POST['movieDuration']) ? $_POST['movieDuration'] : '';
$movieRelDate = isset($_POST['movieRelDate']) ? $_POST['movieRelDate'] : '';
$movieDirector = isset($_POST['movieDirector']) ? $_POST['movieDirector'] : '';
$movieActors = isset($_POST['movieActors']) ? $_POST['movieActors'] : '';
$iframe = isset($_POST['iframe']) ? $_POST['iframe'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$rating = isset($_POST['rating']) ? $_POST['rating'] : '';

if ($id == '') {
    $sql = "INSERT INTO `movietable`(`movieimg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`, `iframe`, `description`, `rating`) VALUES ('$movieimg','$movieTitle','$movieGenre','$movieDuration','$movieRelDate','$movieDirector','$movieActors','$iframe','$description','$rating')";
} else {
    $sql = "UPDATE `movietable` SET `movieTitle`='$movieTitle',`movieGenre`='$movieGenre',`movieDuration`='$movieDuration',`movieRelDate`='$movieRelDate',`movieDirector`='$movieDirector',`movieActors`='$movieActors',`iframe`='$iframe',`description`='$description',`rating`='$rating' WHERE `movie_id` = $id";
}

$result = mysqli_query($con, $sql);

if ($result) {
    ?>
    <script>
        alert("Data inserted successfully")
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Error: Data could not be inserted.");
    </script>
    <?php
    die(mysqli_error($con));
}

mysqli_close($con);

header('Location: ./index.php');
?>
