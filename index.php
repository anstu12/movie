<?php

include('server.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>movie</title>
</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Future Cinemas</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a link href="index.php">Home</a></li>
                    <li class="menu-list-item"><a link href="#">My Tickets</a></li>
                    <li class="menu-list-item"><a href="#">Schedule</a></li>
                    <li class="menu-list-item"><a link href="#">Contact</a></li>
                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <ul class="profile-list">
                        <li class="profile-list-item"><a href="login.php">Login</a></li>
                        <li class="profile-list-item"><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Slideshow container -->
        <div class="slideshow-container">
            <?php
            $count = 1;
            $res = $db->query("SELECT * FROM featured");
            while ($row = $res->fetch_object()) {
                echo " 
                    <div class='mySlides'>
                        <img  class='slideshow-img'src='img/" . $row->image . "'>
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
                                        <iframe width='560' height='315' src='" . $row->trailer . "' title='YouTube video player' frameborder='0'allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;allowfullscreen;'></iframe>
                                    </div>
                                </div>
                            </div>
                        <button class='slideshow-item-button' id='open'><i class='fas fa-ticket-alt'></i>&nbsp;Buy Ticket</button>
                    </div>
                </div>";
                $count++;
            } ?>
            <!-- Full-width images with caption text -->
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <!-- Dots/circles-->
            <div style="text-align:center;">
                <br>
                <span class="slideshow-container dot" onclick="currentSlide(1)"></span>
                <span class="slideshow-container dot" onclick="currentSlide(2)"></span>
                <span class="slideshow-container dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="movie-list-container">
            <div class="movie-list-title">now showing</div>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <?php
                    $cnt = 4;
                    $asdf = $db->query("SELECT * FROM movielist");
                    while ($row = $asdf->fetch_object()) {
                        echo "
                            <div class='movie-list-item'>
                                <img  class='movie-list-item-img'src='img/" . $row->image . "'>
                                <div class = 'movielist-item-text'>
                                    <button class='movie-list-item-button' id='open' data-modal='modal" . $cnt . "'>WATCH</button>
                                    <div class='modal' id='modal" . $cnt . "'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                Heading
                                                <button class='modal-close' data-dismiss='modal" . $cnt . "'><i class='fas fa-times'></i></button>
                                            </div>
                                            <div class='modal-body'>
                                                <iframe width='560' height='315' src='" . $row->trailerLink . "' title='YouTube video player' frameborder='0'allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;allowfullscreen;'></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                        $cnt++;
                    }
                    ?>
                </div>
                <!-- <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/cherry.jfif">
                        <button class="movie-list-item-button" id="open">WATCH</button>
                        <button class="movie-list-item-button-buy" id="open">Buy Ticket</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/freeguy.jfif">
                        <button class="movie-list-item-button" id="open">WATCH</button>
                        <button class="movie-list-item-button-buy" id="open">Buy Ticket</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/oldguard.jfif">
                        <button class="movie-list-item-button" id="open">WATCH</button>
                        <button class="movie-list-item-button-buy" id="open">Buy Ticket</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/venom2.jfif">
                        <button class="movie-list-item-button" id="open">WATCH</button>
                        <button class="movie-list-item-button-buy" id="open">Buy Ticket</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="movie-list-container">
        <div class="movie-list-title">Coming soon</div>
        <div class="movie-list-wrapper">
            <div class="movie-list">
                <div class="movie-list-item">
                    <img class="movie-list-item-img" src="img/godzilla vs. kong.jfif">
                    <button class="movie-list-item-button" id="open">WATCH</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/mySlide.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/movielistmodal.js"></script>
    <!-- /* footer */ -->
</body>

</html>