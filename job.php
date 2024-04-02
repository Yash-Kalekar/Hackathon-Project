<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "defence";
$port = 3306;

$your_db_connection = new mysqli($host, $username, $password, $database, $port);

if ($your_db_connection->connect_error) {
    die("Connection failed: " . $your_db_connection->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect or handle the case where the user is not logged in
    header("Location: login.html");
    exit();
} 

// Fetch appointments associated with the logged-in user
$loggedInUser = $_SESSION['user']; // Assuming the username is stored in the session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job</title>

    <link rel="stylesheet" href="job.css">
       <!--BOX ICONS-->
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
</head>

<body>
    <!--HEADER-->
    <header class="header">
        <!--NAV-->
<div class="nav-container">
    <img class="logo1" src="image/emblem1.png" />
    <a href="index.php" class="logo">Home</a>
    <a href="login.html" class="logo">Login</a>
    <a href="schemes.html" class="logo">Schemes</a>
    <a href="job.php" class="logo">Jobs</a>
    <div class="user-info">
        <i class='bx bx-user' id="user-icon"></i>
        <?php 
            if (isset($_SESSION['user'])) {
                echo $_SESSION['user']; // Display the logged-in user's name
            } else {
                echo "Guest"; // Or handle the case where the user is not logged in
            }
        ?>
    </div>
</div>


    </header>

 <!-- Projects -->
 <section class="projects" id="projects">
    <div class="max-width">
      <h2 class="title">Defence Job Portal</h2>

      <div class="carousel owl-carousel">
        <div class="card">
          <div class="box">
            <img src="image/army.jpg" alt="">
            <div class="text">Indian Army</div>
            <p><b>Defending the nation's honor, one soldier at a time, the Indian Army marches with valor and pride</b></p>
            <a href="https://www.joinindianarmy.nic.in/default.aspx" target="blank" class="see-project-link">Check Now!!</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="image/navy2jpg.jpg" alt="">
            <div class="text">Indian Navy</div>
            <p><b>Navigating the seas with strength and precision, the Indian Navy safeguards our maritime boundaries</b></p>
            <a href="https://indiannavy.nic.in/" target="blank" class="see-project-link">Check Now!!</a>

          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="image/airforce.jpg" alt="">
            <div class="text">Indian Airforce</div>
            <p><b>Taking flight to protect the skies, the Indian Air Force soars with courage and determination</b></p>
            <a href="https://indianairforce.nic.in/" target="blank" class="see-project-link">Check Now!!</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="image/navy.jpg" alt="">
            <div class="text">Indian Coast Guard</div>
            <p><b>Braving the waves to ensure coastal safety, the Indian Coast Guard shields our shores with unwavering dedication</b></p>
            <a href="https://joinindiancoastguard.gov.in/" target="blank" class="see-project-link">Check Now!!</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="image/bsf.jpg" alt="">
            <div class="text">Border Security  Force</div>
            <p><b>Sentinels of our borders, BSF stands firm in defending the frontiers of our nation</b></p>
            <a href="https://attari.bsf.gov.in/" target="blank" class="see-project-link">Check Now!!</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="image/crpf.jpg" alt="">
            <div class="text">CRPF</div>
            <p><b>Upholding law and order with resilience, CRPF stands as a bulwark of peace and stability</b></p>
            <a href="https://crpf.gov.in/" target="blank" class="see-project-link">Check Now!!</a>
          </div>
        </div>            
        <div class="card">
          <div class="box">
            <img src="image/cisf.jpg" alt="">
            <div class="text">CISF</div>
            <p><b>Guardians of critical infrastructure, CISF stands vigilant in securing our nation's assets</b></p>
            <a href="https://www.cisf.gov.in/cisfeng/" class="see-project-link">Check Now!!</a>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <a href="index.html" class="see-project-link">Back To Home</a>
          </div>
        </div>
    </div>
  </section>

</body>

</html>