<?php 

  session_start();

  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Explore Mumbai</title>
  </head>

  <body>
    <!-- Header and Nav -->
    <header>
      <nav>
        <div class="main">
          <ul class="main-list">
            <li class="main-list-item"><a href="index.php">Home</a></li>
            <li class="active main-list-item">
              <a href="famousplaces.php">Famous Places</a>
            </li>
            <li class="main-list-item">
              <a href="restaurants.php">Restaurants</a>
            </li>
            <li class="main-list-item"><a href="stops.php">Bus Stops</a></li>
            <li class="main-list-item">
              <a href="hospitals.php">Hospitals</a>
            </li>
            <li class="main-list-item"><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
      <!-- // Header and Nav -->

      <!-- Title heading -->
      <div class="title">
        <span class="heading">Famous Places</span>
      </div>
    </header>
    <!-- // Title heading -->

    <!-- PAGE WRAPPER -->
    <div class="page-wrapper">
      <div class="history">
        <h1 class="history-heading1">Famous Places in Mumbai</h1>
        <hr />
      </div>
      <!-- IMAGE GALLERY -->
      <div class="image-gallery">
        <!-- IMAGE -->
        <div class="responsive">
          <div class="gallery">
            <a href="images/famousplaces/gatewayOfIndia.jpg" target="_blank"
              ><img
                width="200"
                height="200"
                src="images/famousplaces/gatewayOfIndia.jpg"
                alt="Gateway Of India"
                title="Gateway Of India"
            /></a>
            <div class="des"><strong>Gateway Of India</strong></div>
          </div>
        </div>
        <!-- // IMAGE -->

        <!-- IMAGE -->
        <div class="responsive">
          <div class="gallery">
            <a
              href="images/famousplaces/shrineShahAbdulLatif.jpg"
              target="_blank"
              ><img
                width="200"
                height="200"
                src="images/famousplaces/ColabaCauseway.jpg"
                alt="Shrine of Shah Abdul Latif Bhittai"
                title="Shrine of Shah Abdul Latif Bhittai"
            /></a>
            <div class="des">
              <strong>Colaba Causeway</strong>
            </div>
          </div>
        </div>
        <!-- IMAGE -->
        <div class="responsive">
          <div class="gallery">
            <a href="images/famousplaces/ElephantaCaves.png" target="_blank"
              ><img
                width="200"
                height="200"
                src="images/famousplaces/ElephantaCaves.png"
                alt="Shrine of Makhdoom Nooh"
                title="Shrine of Makhdoom Nooh"
            /></a>
            <div class="des">
              <strong>ElephantaCaves</strong>
            </div>
          </div>
        </div>
        <!-- // IMAGE -->
        <!-- IMAGE -->
        <div class="responsive">
          <div class="gallery">
            <a href="images/famousplaces/MarineDrive.jpg" target="_blank"
              ><img
                width="200"
                height="200"
                src="images/famousplaces/MarineDrive.jpg"
                alt="Minara Masjid Matiari"
                title="Minara Masjid Matiari"
            /></a>
            <div class="des"><strong>Marine Drive</strong></div>
          </div>
        </div>
        <!-- // IMAGE -->
        
        <!-- // IMAGE  -->
      </div>
      <!-- // IMAGE GALLERY-->
    </div>
    <!-- // PAGE WRAPPER-->

    <!-- Footer -->
    <footer>
      <div class="footer">
        <div class="footer-content">
          <!-- <div class="footer-section about">
            <h1 class="logo-text">
              <span class="logo-span">J</span>unaid
              <span class="logo-span">Q</span>ureshi
            </h1>
            <p class="footer-para">
              I am a creative, Web Developer with command on Latest Tech stacks
            </p>
            <div class="contact">
              <span><i class="fas fa-phone"></i>&nbsp; +9231-33084869</span>
              <span
                ><i class="fas fa-envelope"></i>&nbsp;
                qjunaid623@gmail.com</span
              >
            </div>
            <div class="socials">
              <a
                href="https://www.facebook.com/profile.php?id=100041078220896"
                target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
              <a
                href="https://www.linkedin.com/in/junaid-qureshi-34a180194/"
                target="_blank"
                ><i class="fab fa-linkedin"></i
              ></a>
              <a href="https://twitter.com/Junaid084869/" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="https://github.com/qjunaid623/" target="_blank"
                ><i class="fab fa-github"></i
              ></a>
            </div>
          </div> -->
        </div>
        <div class="footer-bottom">
          &copy; | Designed By Nishant Bhatia
        </div>
      </div>
    </footer>
    <!-- // Footer -->
  </body>
</html>
