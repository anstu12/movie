<?php
include 'db.php';
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>

<!DOCTYPE html>

<html>

<head>
  <title>Home</title>
</head>

<body>
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
            <li class="profile-list-item"><a href="login.php">Login</li>
            <li class="profile-list-item"><a href="register.php">Register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>