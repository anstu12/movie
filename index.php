<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
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
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item">Movies</li>
                    <li class="menu-list-item">Schedule</li>
                    <li class="menu-list-item">Cinemas</li>
                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <ul class="profile-list">
                        <li class="profile-list-item">Login</li>
                        <li class="profile-list-item">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with caption text -->
            <div class="mySlides">
                <img src="img/1.jfif" style="width:100%">
                <div class="slideshow-item-text">
                    <button class="slideshow-item-button" data-modal="modal1">
                        <i class=" fas fa-play-circle"></i>&nbsp;WATCH
                    </button>
                    <div class="modal" id="modal1">
                        <div class="modal-content">
                            <div class="modal-header">
                                Heading
                                <button class="modal-close" data-dismiss="modal1"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="modal-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/-FmWuCgJmxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <button class="slideshow-item-button" id="open"><i class="fas fa-ticket-alt"></i>&nbsp;Buy Ticket</button>
                </div>
            </div>
            <div class="mySlides">
                <img src="img/2.jfif" style="width:100%">
                <div class="slideshow-item-text">
                    <button class="slideshow-item-button" data-modal="modal2">
                        <i class=" fas fa-play-circle"></i>&nbsp;WATCH
                    </button>
                    <div class="modal" id="modal2">
                        <div class="modal-content">
                            <div class="modal-header">
                                Heading
                                <button class="modal-close" data-dismiss="modal1"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="modal-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/ND7VFJW9oco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <button class="slideshow-item-button" id="open"><i class="fas fa-ticket-alt"></i>&nbsp;Buy Ticket</button>
                </div>
            </div>
            <div class="mySlides">
                <img src="img/3.jfif" style="width:100%">
                <div class="slideshow-item-text">
                    <button class="slideshow-item-button" data-modal="modal3">
                        <i class=" fas fa-play-circle"></i>&nbsp;WATCH
                    </button>
                    <div class="modal" id="modal3">
                        <div class="modal-content">
                            <div class="modal-header">
                                Heading
                                <button class="modal-close" data-dismiss="modal1"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="modal-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/nxIOd1yDyVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <button class="slideshow-item-button" id="open"><i class="fas fa-ticket-alt"></i>&nbsp;Buy Ticket</button>
                </div>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <!-- Dots/circles-->
            <div style="text-align:center;">
                <br>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">NOW SHOWING</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/cherry.jfif">
                        <button class="movie-list-item-button" id="open">WATCH</button>
                        <button class="movie-list-item-button-buy" id="open">Buy Ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/mySlide.js"></script>
    <script src="js/modal.js"></script>
    <!-- /* footer */ -->
</body>

</html>