<?php
     session_start();
      if(!isset($_SESSION['username']))
      {
          session_destroy();
          header("location:securityCode.php");
      }
      $username=$_SESSION['username'];
?>


<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="../basicstyling.css">
         <link rel="stylesheet" type="text/css" href="adminDashboard.css">
    </head>
    <body>
         <div class="welcome_text">
               <h2 class="text_dark">Welcome User  <?php echo $username ;?>  </h2>
         </div>
         <div class="side_bar_nav">
               <ul>
                    <li> <a href="adminDashboard.php" class="text_angel">Home</a>  </li>
                    <li> <a href="#" class="text_angel">Add Admin</a>  </li>
                    <li> <a href="usersData.php" class="text_angel">Users Data</a>  </li>
               </ul>
         </div>
    </body>
</html>