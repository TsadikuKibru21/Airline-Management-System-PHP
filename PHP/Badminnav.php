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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Flight</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="/css/bootstrap.css"> -->
        <link rel="stylesheet" href="../CSS_Local/adminnavbar.css"/>
        <!-- <style>
    
            body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url('/images/airline1.jpg') ;
    background-size: cover;
}                
    </style> -->
    </head>
    <body>
        <div class="topnav">
            <a class="" href="BAdminhomepage.php">HomePage</a>
            <a href="Badmin_flight_view.php">Flight_info</a>
            <a href="BAdmin_add_flight.php">Add Flight</a>
            <a href="Bflight_report.php">Book Ticket Report</a>
             <div class="dropdown float-end" >
                            <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="../images/avatar-icon-png-8.jpg" width="20" style="border-radius: 50% ;vertical-align: middle;">
                               <?php echo $_SESSION['email']; ?>
                            </button>
                            <ul class="dropdown-menu float-end">
                                      
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                
<!--                                <li><hr class="dropdown-divider"></li>-->
                                <li><a href="Blogout.php" class="nav-link"><img src="../images/logout.png" width="20" style="border-radius: 50% ;vertical-align: middle;">Logout</a></li>
                            </ul>
            </div>
            
        </div>
      
</body>
 <?php
 
 }?>
