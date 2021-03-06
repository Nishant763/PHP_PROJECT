<?php 

  session_start();

  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">



<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

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
          <li class="active main-list-item"><a href="index.php">Home</a></li>
          <li class="main-list-item"><a href="famousplaces.php">Famous Places</a></li>
          <li class="main-list-item"><a href="restaurants.php">Restaurants</a></li>
          <li class="main-list-item"><a href="stops.php">Bus Stops</a></li>
          <li class="main-list-item"><a href="hospitals.php">Hospitals</a></li>
          <li class="main-list-item"><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
    <!-- // Header and Nav -->

    <!-- Title heading -->
    <div class="title">
      <span class="heading">Hi! 
        
      <?php echo $_SESSION['username']; ?><br>
        Welcome To Mumbai
    
    
      </span>
    </div>
  </header>
  <!-- // Title heading -->

  <!-- History section -->
  <div class="page-wrapper">
    <main>
      <section>
        <div class="page-wrapper">
          <div class="history">
            <h1 class="history-heading1">History of Mumbai</h1>
            <span class="history-caption">"Mumbai is built on what was once an archipelago of seven islands: Isle of Bombay, Parel, Mazagaon, Mahim, Colaba, Worli, and Old Woman's Island (also known as Little Colaba).[64] It is not exactly known when these islands were first inhabited. Pleistocene sediments found along the coastal areas around Kandivali in northern Mumbai suggest that the islands were inhabited since the South Asian Stone Age.[65] Perhaps at the beginning of the Common Era, or possibly earlier, they came to be occupied by the Koli fishing community."</span>
            <hr />

            <!-- Etymology -->
            <h3 class="history-heading2">Etymology</h3>
            <p class="history-para">
              The name Mumbai is derived from Mumbā or Mahā-Ambā—the name of the patron goddess (kuladevata) Mumbadevi of the native Koli community—[38] and ā'ī meaning "mother" in the Marathi language,
               which is the mother tongue of the Koli people and the official language of Maharashtra.[22][39] The Koli people originated in Kathiawad and Central Gujarat, and according to some sources they brought their 
               goddess Mumba with them from Kathiawad (Gujarat), where she is still worshipped.[23][24] However, other sources disagree that Mumbai's name was derived from the goddess Mumba.
            </p>
            <!-- // Etymology -->
            <!-- Demography -->
            <h3 class="history-heading2">Demography</h3>
            <p class="history-para">
              According to the 2011 census, the population of Mumbai city was 12,479,608. The population density is estimated to be about 20,482 persons per square kilometre. The living space is 
              4.5 square metres per person.[312] Mumbai Metropolitan Region was home to 20,748,395 people by 2011.[7] Greater Mumbai, the area under the administration of the MCGM, has a literacy rate of 94.7%, higher than the national 
              average of 86.7%. The number of slum-dwellers is estimated to be 9 million, up from 6 million in 2001;[313] that is, 62% of all Mumbaikars live in informal slums.
            </p>
            <!-- // Demography -->
            <!-- History and Administration -->
            <h3 class="history-heading2">History and Administration</h3>
            <p class="history-para">
              Mumbai is built on what was once an archipelago of seven islands: Isle of Bombay, Parel, Mazagaon, Mahim, Colaba, Worli, and Old Woman's Island (also known as Little Colaba).[64] It is not exactly known when these islands were first inhabited. Pleistocene sediments found along the coastal areas around Kandivali in northern Mumbai suggest that the islands were inhabited since the South Asian Stone Age.[65] Perhaps at the beginning of the Common Era, or possibly earlier, they came to be occupied by the Koli fishing community.
              <!-- <ul class="history-list">
                <li> <a href="https://en.wikipedia.org/wiki/Hala_Taluka" target="_blank"> Hala</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Matiari_Taluka" target="_blank"> Matiari</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Saeedabad_Taluka" target="_blank"> Saeedabad</a></li>
              </ul> -->

            </p>
            <!-- // History and Administration -->
            <!-- Agriculture -->
            <h3 class="history-heading2">Economy</h3>
            <p class="history-para">Mumbai is India's largest city (by population) and is the financial and commercial capital of the country as it generates 6.16% of the total GDP.[31][145][188] It serves as an economic hub of India, contributing 10% of factory employment, 25% of industrial output, 33% of income tax collections, 60% of customs duty collections, 20% of central excise tax collections, 40% of India's foreign trade and ₹40 billion (US$560 million) in corporate taxes.[189] Along with the rest of India, Mumbai has witnessed an economic boom since the liberalisation of 1991, the finance boom in the mid-nineties and the IT, export, services and outsourcing boom in the 2000s.[190] Although Mumbai had prominently figured as the hub of economic activity of India in the 1990s, the Mumbai Metropolitan Region is presently witnessing a reduction in its contribution to India's GDP.</p>
            <!-- // Agriculture -->
            <!-- Famous Things -->
            <h3 class="history-heading2">Famous Things</h3>
            <!-- <p class="history-para">This district is famous for its Handicrafts mainly <strong>Kaashi</strong> and
              <strong>Ajrak</strong> produced specially in <strong>Hala</strong>.</p> -->

            <!-- Image Gallery -->
            <div class="row">
              <div class="column">
                <img src="images/gateway.jpg">

              </div>
              <div class="column">
                <img src="images/hillRoad.jpg">


              </div>
              <div class="column">
                <img src="images/taj.jpg">
              </div>
              <div class="column">
                <img src="images/nightL.jpg">

              </div>

            </div>


            <!-- // Famous Things -->
          </div>
        </div>
      </section>
    </main>
  </div>
  <!-- // History section -->

<!-- Footer -->
<footer>
  <div class="footer">
    
    <div class="footer-bottom">
      &copy; | Designed By Nishant Bhatia
    </div>
  </div>
</footer>
<!-- // Footer -->
</body>

</html>