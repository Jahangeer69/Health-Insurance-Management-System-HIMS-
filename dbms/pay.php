<?php
include "connection.php";
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment</title>
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
        </ul>
      </nav>
    </header>
    <button type="button" name="button" onclick="history.back()">GO BACK</button>
    <main>
      <div class="container">
        <h1><center>PAYMENT</center></h1><br><br><br><br>
        <br><br><br>
        <form class="pay" action="" method="post">

          <!-- <label for="Username"><b>Name</b></label>
          <input type="text" placeholder="Enter Username" name="Username" required> -->

          <label for="Plan_ID"><b>PlanID</b></label>
          <input type="text" placeholder="Enter Plan ID" name="Plan_ID" required>


        <label for="Card_No"><b>Card</b></label>
        <input type="text" placeholder="Enter Card Number" name="Card_No" required>
        <br><br><br><br>


           <!-- <h3>Card Expiration</h3>
           <div class="selection">
               <div class="date">
                   <select name="months" id="months">
                       <option value="Jan">Jan</option>
                       <option value="Feb">Feb</option>
                       <option value="Mar">Mar</option>
                       <option value="Apr">Apr</option>
                       <option value="May">May</option>
                       <option value="Jun">Jun</option>
                       <option value="Jul">Jul</option>
                       <option value="Aug">Aug</option>
                       <option value="Sep">Sep</option>
                       <option value="Oct">Oct</option>
                       <option value="Nov">Nov</option>
                       <option value="Dec">Dec</option>
                     </select>
                     <select name="years" id="years">
                       <option value="2028">2028</option>
                       <option value="2027">2027</option>
                       <option value="2026">2026</option>
                       <option value="2025">2025</option>
                       <option value="2024">2024</option>
                       <option value="2023">2023</option>
                     </select>
               </div>
               <br><br><br> -->
               <div class="cards">
                   <img src="mc.png" width="100" height="70">
                   <img src="vi.png" width="100" height="70">
                   <img src="pp.png" width="100" height="70">
               </div>
           </div>
       </div>
       <center><button type="submit" name="submit">Confirm</button>
         </form>

   </div>
        </div>
      </div>
    </main>
    <footer class="flex-all-center">
    <p>Copyright &copy; Health Insureance</p>
    </footer>
    <?php
    if(isset($_POST['submit']))
    {
      mysqli_query($db," INSERT INTO `payment`(`Plan_ID`,`Card_No`,`Cust_Usrname`) VALUES ('$_POST[Plan_ID]','$_POST[Card_No]','$_SESSION[login_user]');");
      mysqli_query($db," INSERT INTO `pur_plans`(`Plan_ID`,`Cust_Usrname`,`Iss_Date`,`Mat_Date`) VALUES ('$_POST[Plan_ID]','$_SESSION[login_user]',curdate(),date_add(curdate(),interval 7 year));");


     ?>
     <script type="text/javascript">
     alert("Payment successful");
     </script>
     <?php
    }
      ?>
  </body>
</html>
