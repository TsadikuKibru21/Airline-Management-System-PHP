<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="/CSS_Local/adminnavbar.css"/>
        <link rel="stylesheet" href="bootstrap/css/style.css">
        <style>
    
            body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url('/images/airline1.jpg') ;
    background-size: cover;
}                
    </style>
    </head>
    <body>
    <div class="topnav">
            <a class="active" href="#">HomePage</a>
            <a href="#">Flight_info</a>
            <a href="BAdmin_add_flight.html">Add Flight</a>
            <a href="#">Book Ticket Report</a>
             <a href="#">Manage Users</a>
            <a  style="float: right"href="thankyou.php">logout</a>
        </div>
        <center>
        <?php
        echo("hello worldd");
        echo("Date is: ".date('j-m-y,h:i:s'));
        ?>
        </center>
    </body>

</html>
