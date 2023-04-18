<?php
include "connection.php";
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Plans</title>
    <link rel="stylesheet" href="plans.css">
    <link rel="stylesheet" href="utility.css">
  </head>
  <body>
    <header>
      <nav>
        <h1>HEALTH INSURANCE MANAGEMENT SYSTEM</h1>
        <ul>
          <li><a target="_self" href="homepage.php">HOME</a></li>
          <li><a target="_self" href="about.php">ABOUT US</a></li>
          <!-- <li><a target="_self" href="plans.php">ALL INSURANCE</a></li> -->
          <!-- <li><a target="_self" href="login.php">LOGIN</a></li> -->
          <li><a target="_self" href="contact.php">CONTACT US</a></li>
          <li><a target="_self" href="yourplans.php">YOUR PLANS</a></li>



          <li><a target="_self" href="logout.php">LOGOUT</a></li>

          <?php
            echo "Welcome " .$_SESSION['login_user'];
           ?>
        </ul>
      </nav>
    </header>
    <?php
    if($_SESSION['login_user'])
    {?>
      <main>
        <div class="container">
          <h1><center>ALL INSURANCE PLANS</center></h1><br><br><br><br>
          <div class="gallery">
    <a href="family.php" target="_self">
      <img src="Family-Floater-Health-Insurance-Policy-Benefits.png" width="600" height="400">
    </a>
    <div class="desc">Family Floater</div>
  </div>

  <div class="gallery">
    <a href="group.php" target="_self">
      <img src="group-vs-individual-health-insurance.png" width="600" height="400">
    </a>
    <div class="desc">Group Health Cover</div>
  </div>

  <div class="gallery">
    <a href="senior.php" target="_self">
      <img src="1103263-senior-citizens.jpg" width="600" height="400">
    </a>
    <div class="desc">Senior Citizen</div>
  </div>

  <div class="gallery">
    <a href="critical.php" target="_self">
      <img src="critical illness cover14.jpg" width="600" height="400">
    </a>
    <div class="desc">Critical Illness</div>
  </div>

  <div class="gallery">
    <a href="indiv.php" target="_self">
      <img src="images.png" width="600" height="400">
    </a>
    <div class="desc">Individual</div>
  </div>
        </div>
      </main>
      <?php
    }

     ?>

    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>

  </body>
</html>
