<?php
include "connection.php";
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Customer</title>
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
        <h1><center>CUSTOMER SIGN UP</center></h1><br><br><br><br>
        <form class="newcust" action="" method="post">

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Full Name" name="Cust_Name" required>

        <label for="age"><b>Age</b></label>
        <input type="text" placeholder="Enter Age" name="Cust_Age" required>

        <label for="dob"><b>DOB</b></label>
        <input type="date" placeholder="Enter DOB" name="Cust_DOB" required>

        <label for="sex"><b>Sex</b></label>
        <input type="text" placeholder="Enter Gender" name="Cust_Sex" required>

        <label for="mail"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="Cust_Email" required>

        <label for="phone"><b>Phone</b></label>
        <input type="tel" placeholder="Enter Phone Number" name="Cust_Phone" required>

        <label for="addr"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="Cust_Address" required>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Cust_Usrname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Cust_Pswd" required>

        <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
    <?php
    if(isset($_POST['submit']))
    {
      $count=0;
      $sql="SELECT Cust_Usrname from customer";
      $res=mysqli_query($db,$sql);

      while($row=mysqli_fetch_assoc($res))
      {
        if($row['Cust_Usrname'] == $_POST['Cust_Usrname'])
        {
          $count=$count + 1;
        }
      }
      if($count==0)
        {mysqli_query($db,"INSERT INTO `customer`(`Cust_Name`, `Cust_Age`, `Cust_DOB`, `Cust_Sex`, `Cust_Email`, `Cust_Phone`, `Cust_Address`, `Cust_Pswd`, `Cust_Usrname`) VALUES ('$_POST[Cust_Name]','$_POST[Cust_Age]','$_POST[Cust_DOB]','$_POST[Cust_Sex]','$_POST[Cust_Email]','$_POST[Cust_Phone]','$_POST[Cust_Address]','$_POST[Cust_Pswd]','$_POST[Cust_Usrname]');");
      ?>
      <script type="text/javascript">
      alert("Registration successfull");

      </script>
      <?php
    }
      else{
        ?>
        <script type="text/javascript">
        alert("The Username is already taken");

        </script>
        <?php
      }
    }
      ?>

  </body>
</html>
