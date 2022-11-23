<?php
$user = 'root';
$password = '';
$database = 'airline_reservation_system';
$servername = 'localhost';
$conn = new mysqli($servername, $user, $password, $database);
if (isset($_POST['download'])) {
    $passport = $_POST['passportid'];
    $flightno = $_POST['flightno'];
    $sql = "select *from  flight_report  where Flight_no='$flightno' and PassportID='$passport'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
         echo '           ETHIOPIAN  AIRLINES     '."<br>"."<br>";
         echo "Passport ID:-      ". $row['PassportID']."<br>";
         echo "Flight Number:-    ".$row['Flight_no'] . "<br>";
         echo "Source City:-      ".$row['Source'] . "<br>";
         echo "Destination City:- ".$row['Destination'] . "<br>";
         echo "Date:-             ".$row['Date']. "<br>";
         echo "Time:-             ".$row['Time']. "<br>";
         echo "Reserved Seats:-   ".$row['Reserved_seat']. "<br>";
         echo "Class of Seat:-    ".$row['Reserved_class']. "<br>";
         echo "Payed Amount:-     ".$row['Payed_Amount']. "<br>";
         echo "Change:-           ".$row['Change'];
        }
        echo ("<script type='text/javascript'>window.print();</script>");
    } else {
       
//        header("Location:BDownload_Ticket.php",TRUE,301);
        include './BDownload_Ticket.php';
        echo ("<script>alert('You Do not Book Ticket Yet');</script>");
          
    }
    
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Download Ticket</title>
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
    <center>
        <a href="BDownload_Ticket.php"  type="submit" class="btn-success" >Back</a>
    </center>

   </body>
</html>

