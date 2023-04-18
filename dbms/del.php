<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete plan</title>
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
          <li><a target="_self" href="homepage.php">LOGOUT</a></li>
        </ul>
      </nav>
    </header>
      <button type="button" name="button" onclick="history.back()">GO BACK</button>
    <main>
      <div class="container">
        <h1><center>DELETE PLAN</center></h1><br><br><br><br>
        <?php
          $res=mysqli_query($db,"SELECT * FROM `plans`;");

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
        <form class="add" action="" method="post">

        <label for="id"><b>PlanID</b></label>
        <input type="text" placeholder="Enter Plan ID" name="id" required>


        <button type="submit" name="submit">Delete Plan</button>
        </form>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
    <?php
    if(isset($_POST['submit']))
    {
      mysqli_query($db,"DELETE FROM plans WHERE Plan_ID = '$_POST[id]';");

     ?>
     <script type="text/javascript">
     alert("Delete successful");

     </script>
     <?php
    }
      ?>

  </body>
</html>
