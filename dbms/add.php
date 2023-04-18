<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add new plan</title>
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
          <!-- <li><a target="_self" href="login.php">LOGIN</a></li> -->
          <li><a target="_self" href="contact.php">CONTACT US</a></li>
          <li><a target="_self" href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
    </header>
      <button type="button" name="button" onclick="history.back()">GO BACK</button>
    <main>
      <div class="container">
        <h1><center>ADD NEW PLAN</center></h1><br><br><br><br>
        <form class="add" action="" method="post">

        <label for="id"><b>PlanID</b></label>
        <input type="text" placeholder="Enter Plan ID" name="id" required>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Plan Name" name="name" required>

        <label for="type"><b>Type</b></label>
        <input type="text" placeholder="Enter Type(FF,GH,SC,CI,IN)" name="type" required>

        <label for="fee"><b>Fee</b></label>
        <input type="text" placeholder="Enter Yearly fee" name="fee" required>

        <label for="term"><b>Term</b></label>
        <input type="text" placeholder="Enter Term" name="term" required>

        <button type="submit" name="submit">Add Plan</button>
        </form>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
    <?php
    if(isset($_POST['submit']))
    {
      mysqli_query($db," INSERT INTO `plans` VALUES ('$_POST[id]','$_POST[name]','$_POST[type]','$_POST[fee]','$_POST[term]');");

     ?>
     <script type="text/javascript">
     alert("Plan added successfully");
     </script>
     <?php
    }
      ?>

  </body>
</html>
