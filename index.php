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
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="chatbot.js" defer></script>
    <!--LINK FOR CSS-->
    <link rel="stylesheet" href="index.css">
    <!--==Fav-icon=====================-->
    <link rel="shortcut icon" href="images/fav-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--==Font-Awesome-for-icons=====-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">-->
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
    <marquee>
        <h1 id="nf"><b>INDIA DELIVERS TWO DORNIER-228 TRANSPORT AIRCRAFT TO GUYANA!</b></h1>
    </marquee>
    <!--main-->

    <section class="main">
        <div class="left">
            <h3>The backbone of India's defense, where valor meets duty:</h3>
            <h1>The Armed Forces of India..</h1>
        </div>

        <button class="chatbot-toggler">
            <span class="material-symbols-rounded">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
          </button>
          <div class="chatbot">
            <header>
              <h2>Chatbot</h2>
              <span class="close-btn material-symbols-outlined">close</span>
            </header>
            <ul class="chatbox">
              <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hi there 👋<br>How can I help you today?</p>
              </li>
            </ul>
            <div class="chat-input">
              <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
              <span id="send-btn" class="material-symbols-rounded">send</span>
            </div>
          </div>
      

    </section>

    <!--main-->
    <!--==Team===========================-->
    <section id="our-team">

        <!--**heading*****************-->
        <div class="our-team-heading">
            <h3>Meet Our Gems</h3>
            <p>They never 
                 bring sorrow to our beloved citizens </p>
        </div>

        <!--**team-container***********-->
        <div class="team-box-container">
            <!-- Swiper -->
            <div class="swiper mySwiperteam">
                <div class="swiper-wrapper">
                    <!--**1***-->
                    <div class="swiper-slide">
                        <!--**box**-->
                        <div class="team-box">
                            <!--img-->
                            <div class="team-img">
                                <img alt="" src="image/admiral.jpg">
                            </div>
                            <!--text-->
                            <div class="team-text">
                                <strong>General Manoj Pande</strong>
                                <span>He joined the 61st course of the National Defence Academy (NDA) in January 1979.
                                    Pande was commissioned into the Bombay Sappers, a regiment in the Corps of
                                    Engineers, in December 1982. As the Chief of the Army Staff (COAS), he assumed the role of Honorary Colonel of
                                    the Sikh Light Infantry Regiment.
                                </span>

                            </div>
                        </div>
                    </div><!--end-slide-->
                    <!--**1***-->
                    <div class="swiper-slide">
                        <!--**box**-->
                        <div class="team-box">
                            <!--img-->
                            <div class="team-img">
                                <img alt="" src="image/Lt_Gen_Upendra_Dwivedi_Vice_Chief_of_Army_Staff (1).jpg">
                            </div>
                            <!--text-->
                            <div class="team-text">
                                <strong>Lieutant General Upendra Dwivedi </strong>
                                <span>Lieutenant General Upendra Dwivedi PVSM, AVSM is a serving general officer of the Indian Army. He currently serves as the 46th Vice Chief of Army Staff.He previously held the appointment of General Officer Commanding-in-Chief Northern Command, prior to that he served as the Deputy Chief of the Army Staff.
                                </span>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!--**box**-->
                        <div class="team-box">
                            <!--img-->
                            <div class="team-img">
                                <img alt="" src="image/chiefmarshal.jpg">
                            </div>
                            <!--text-->
                            <div class="team-text">
                                <strong>Admiral Radhakrishnan Hari Kumar</strong>
                                <span>On November 30, 2021, Admiral Hari Kumar assumed command as the 25th Chief of the
                                    Naval Staff, succeeding Admiral Karambir Singh.
                                    Admiral Radhakrishnan Hari Kumar PVSM, AVSM, VSM, ADC is a distinguished serving
                                    flag officer in the Indian Navy.
                                </span>
                            </div>
                        </div>
                    </div><!--end-slide-->
                    <!--**1***-->
                    <div class="swiper-slide">
                        <!--**box**-->
                        <div class="team-box">
                            <!--img-->
                            <div class="team-img">
                                <img alt="" src="image/currentdefmin.jpg">
                            </div>
                            <!--text-->
                            <div class="team-text">
                                <strong>Air Chief Marshal VR Chaudhari</strong>
                                <span>Air Chief Marshal VR Chaudhari PVSM AVSM VM ADC, commissioned in 1982, is an
                                    experienced Indian Air Force pilot with over 3800 hours of operational flying, and a
                                    graduate of the National Defence Academy and Defence Services Staff College</span>
                            </div>
                        </div>
                    </div><!--end-slide-->
                    <!--**1***-->
                    <div class="swiper-slide">
                        <!--**box**-->
                        <div class="team-box">
                            <!--img-->
                            <div class="team-img">
                                <img alt="" src="image/currdefmin2.jpg">
                            </div>
                            <!--text-->
                            <div class="team-text">
                                <strong>Shri Rajnath Singh</strong>
                                <span>The current Defence Minister of India is Shri Rajnath Singh. He has been in the
                                    position since May 31, 2019. He is a member of the Bharatiya Janata Party (BJP) and
                                    has been a Member of Parliament (MP) from the Lucknow constituency in Uttar
                                    Pradesh since 2014.</span>
                            </div>
                        </div>
                    </div><!--end-slide-->
                    <!--**1***-->
                    
                        </div>
                    </div><!--end-slide-->
                </div><!--wrapper-end-->
                <div class="swiper-pagination"></div>
            </div><!--swiper-end-->



        </div>

    </section><!--team-end-->

    <!--History-->
    <div class="our-team-heading">
        <h3>Have a quick glance at the past</h3>
       
    </div>
    <article class="card">
        <img
          class="card__background"
          src="image/kargil.jpg"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">The Kargil War, 1999</h2>
            
          </div>
        </div>
      </article>

      <article class="card">
        <img
          class="card__background"
          src="image/2ipkw3.jpg"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">1st Indo-Pak War, 1947</h2>
           
          </div>
        </div>
      </article>

      <article class="card">
        <img
          class="card__background"
          src="image/2ipw.jpg"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">2nd Indo-Pak War, 1965</h2>
           
          </div>
        </div>
      </article>

      <article class="card">
        <img
          class="card__background"
          src="image/sinoindo.jpg"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Indo-Chinese War, 1967</h2>
           
          </div>
        </div>
      </article>


    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none"
        })
    </script>

    <!-- Swiper JS -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>-->

    <!-- Initialize Swiper -->

</body>
<script>
    /*--team--*/
    var swiper = new Swiper(".mySwiperteam", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            560: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            950: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1250: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
</script>

</html>