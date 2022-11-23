<?php
session_start();
if(!isset($_SESSION['email'])){
     header("location:BLoginPage.php");
}
 else {
    

?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="../css//bootstrap.css">
    <link rel="stylesheet" href="../CSS_Local/navbar.css">
   <style>
    
            body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url('../images/airline1.jpg') ;
    background-size: cover;
}    
        
    </style>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-md  bg-dark navbar-dark">
          <div class="container">
              <a href="BAdminhomepage.php" class="navbar-brand " >Airline Reservation</a>
            <buttun class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
               <span class="navbar-toggler-icon"></span>
           </buttun>
           <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="Badmin_flight_view.php" class="nav-link">Flight_info</a>
                    </li>
                    <li class="nav-item">
                        <a href="BAdmin_add_flight.php" class="nav-link">Add Flight</a>
                    </li>
                    <li class="nav-item">
                        <a href="Bflight_report.php" class="nav-link">Book Ticket Report</a>
                    </li>
                </ul>
               
                
            
        </div>
              <div class="dropdown float-end" >
                            <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="../images/avatar-icon-png-8.jpg" width="20" style="border-radius: 50% ;vertical-align: middle;">
                               <?php echo $_SESSION['email']; ?>
                            </button>
                            <ul class="dropdown-menu float-end">
                                      
                                <li><a class="dropdown-item" href="BAddAdmin.php">Add Admin</a></li>
                                <li><a class="dropdown-item" href="BAdminChangePassword.php">Change Password</a></li>
                                
<!--                                <li><hr class="dropdown-divider"></li>-->
                                <li><a href="Blogout.php" class="nav-link"><img src="../images/logout.png" width="20" style="border-radius: 50% ;vertical-align: middle;">Logout</a></li>
                            </ul>
            </div>
            
            </div>
          </nav>
         <script src="../js/bootstrap.js"></script>
    </body>
</html>
 <?php
 
 }?>
