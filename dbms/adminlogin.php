<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
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
        <h1><center>ADMIN LOGIN</center></h1><br><br><br><br>
        <form class="adminlogin" action="" method="post">
        <label for="Adm_Usrname"><b>Username</b></label>
         <input type="text" placeholder="Enter Username" name="Adm_Usrname" required method="get">
         <label for="Adm_Pswd"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="Adm_Pswd" required method="get">
         <button type="submit" name="login">Login</button>
       </form>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
    <?php
    if(isset($_POST['login']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE `Adm_Usrname` ='$_POST[Adm_Usrname]' && `Adm_Pswd` ='$_POST[Adm_Pswd]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
        <script type="text/javascript">
        alert("The admin does not exist")
        </script>
        <?php
      }
      else
      {
          $_SESSION['login_user'] = $_POST['Adm_Usrname'];
        ?>
        <script type="text/javascript">
        window.location="admin.php"

        </script>
        <?php
      }
    }
     ?>
  </body>
</html>
