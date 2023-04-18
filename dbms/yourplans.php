<?php
include "connection.php";
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All plans</title>
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
          <li><a target="_self" href="plans.php">ALL INSURANCE</a></li>
          <!-- <li><a target="_self" href="login.php">LOGIN</a></li> -->
          <li><a target="_self" href="contact.php">CONTACT US</a></li>

          <li><a target="_self" href="logout.php">LOGOUT</a></li>
          <?php
            echo "Welcome " .$_SESSION['login_user'];
           ?>
        </ul>
      </nav>
    </header>
      <button type="button" name="button" onclick="history.back()">GO BACK</button>
    <main>
      <div class="container">
        <h1><center>ALL INSURACE PLANS</center></h1><br><br><br><br>
        <?php
          $res=mysqli_query($db,"SELECT p.* FROM plans p,pur_plans pp WHERE p.`Plan_ID` = pp.`Plan_ID` and pp.`Cust_Usrname` = '$_SESSION[login_user]';");

          echo "<table>";
          echo "<tr style='background-color: white;'>";
              echo "<th>"; echo " Plan ID"; echo "</th>";
              echo "<th>"; echo "Plan Name"; echo "</th>";
              echo "<th>"; echo "Type"; echo "</th>";
              echo "<th>"; echo "Yearly fee"; echo "</th>";
              echo "<th>"; echo "Term"; echo "</th>";
          echo "</tr>";

          while($row=mysqli_fetch_assoc($res))
          {
            echo "<tr>";
            echo "<td>"; echo $row['Plan_ID']; echo "</td>";
            echo "<td>"; echo $row['Plan_Name']; echo "</td>";
            echo "<td>"; echo $row['Type']; echo "</td>";
            echo "<td>"; echo $row['Yearly_fee']; echo "</td>";
            echo "<td>"; echo $row['Term']; echo "</td>";


            echo "</tr>";
          }
          echo "</table>";
;         ?>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>


  </body>
</html>
