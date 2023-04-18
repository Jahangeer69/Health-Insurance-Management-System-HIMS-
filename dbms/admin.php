<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About us</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="utility.css">
  </head>
  <body>
    <header>
      <nav>
        <h1>HEALTH INSURANCE MANAGEMENT SYSTEM</h1>
        <ul>
          <li><a target="_self" href="homepage.php">HOME</a></li>
          <li><a target="_self" href="about.php">ABOUT US</a></li>
          <li><a target="_self" href="plansall.php">ALL INSURANCE</a></li>
          <!-- <li><a target="_self" href="login.php">LOGIN</a></li> -->
          <li><a target="_self" href="contact.php">CONTACT US</a></li>
          <li><a target="_self" href="homepage.php">LOGOUT</a></li>
          <?php
            echo "Welcome admin";
           ?>
        </ul>
      </nav>
    </header>

    <main>
      <div class="container">
        <h1><center>ADMIN</center></h1><br><br><br><br>
        <div class="add">
          <a href="add.php">
          <center><img src="add.png">
          </a>
        </div>
        <div class="del">
          <a href="del.php">
          <center><img src="del.jpg">
          </a>
        </div>
      </div>

    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
  </body>
</html>
