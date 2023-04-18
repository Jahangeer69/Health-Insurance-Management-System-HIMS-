<?php
include "connection.php";
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer</title>
    <link rel="stylesheet" href="excust.css">
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
          <li><a target="_self" href="login.php">LOGIN</a></li>
          <li><a target="_self" href="contact.php">CONTACT US</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="container">
        <h1><center>CUSTOMER LOGIN</center></h1><br><br><br><br>
        <form class="excust" action="" method="post">
         <label for="Cust_Usrname"><b>Username</b></label>
         <input type="text" placeholder="Enter Username" name="Cust_Usrname" required method="get">
         <label for="Cust_Pswd"><b>Password:</b></label>
         <input type="password" placeholder="Enter Password" name="Cust_Pswd" required method="get">
         <button type="submit" name="login">Login</button>
        </form>
         <p>New User? <a href="newcust.php">Sign up here</a></p>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
    <?php
    if(isset($_POST['login']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `customer` WHERE `Cust_Usrname` ='$_POST[Cust_Usrname]' && `Cust_Pswd` ='$_POST[Cust_Pswd]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
        <script type="text/javascript">
        alert("The username and password does not exist")
        </script>
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['Cust_Usrname'];
        ?>
        <script type="text/javascript">
        window.location="plans.php"

        </script>
        <?php
      }
    }
     ?>
  </body>
</html>
