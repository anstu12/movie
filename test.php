<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "project_movie");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>

<!doctype html>
<html>

<head>
</head>

<body>
    <div class="movie-list-item">
        <img class="movie-list-item-img" src="img/venom2.jfif">
        <button class="movie-list-item-button" id="open">WATCH</button>
        <div class='slideshow-item-text'>
            <button class='slideshow-item-button' data-modal='modal" . $count . "'>
                <i class=' fas fa-play-circle'></i>&nbsp;WATCH
            </button>
            <div class='modal' id='modal" . $count . "'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        Heading
                        <button class='modal-close' data-dismiss='modal" . $count . "'><i class='fas fa-times'></i></button>
                    </div>
                    <div class='modal-body'>
                        <iframe width='560' height='315' src='" . $row->trailer . "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;allowfullscreen;'></iframe>
                    </div>
                </div>
            </div>
            <button class="movie-list-item-button-buy" id="open">Buy Ticket</button>
        </div>
        <script src="js/modal.js"></script>
</body>

</html>