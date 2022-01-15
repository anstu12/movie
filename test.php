<?php
$con = mysqli_connect("localhost", "root", "", "project_movie");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$movieId = 26;

$sql = "SELECT * FROM `movielist` WHERE `movieId`=$movieId";

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        $link = $row[8];
    }
    mysqli_free_result($result);
}

?>

<!DOCTYPE html>
<html>

<head>

    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background: #272727;
            font-family: "Montserrat", sans-serif;
        }

        .navMenu {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .navMenu a {
            color: #f6f4e6;
            text-decoration: none;
            font-size: 1.2em;
            text-transform: uppercase;
            font-weight: 500;
            display: inline-block;
            width: 80px;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .navMenu a:hover {
            color: #fddb3a;
        }

        .navMenu .dot {
            width: 6px;
            height: 6px;
            background: #fddb3a;
            border-radius: 50%;
            opacity: 0;
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .navMenu a:nth-child(1):hover~.dot {
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .navMenu a:nth-child(2):hover~.dot {
            -webkit-transform: translateX(110px);
            transform: translateX(110px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .navMenu a:nth-child(3):hover~.dot {
            -webkit-transform: translateX(200px);
            transform: translateX(200px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .navMenu a:nth-child(4):hover~.dot {
            -webkit-transform: translateX(285px);
            transform: translateX(285px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }
    </style>

</head>

<body>

    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo "$link" ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

    <nav class="navMenu">
        <a href="#">Home</a>
        <a href="#">My Tickets</a>
        <a href="#">Schedule</a>
        <a href="#">Contact</a>
        <div class="dot"></div>
    </nav>

</body>

</html>