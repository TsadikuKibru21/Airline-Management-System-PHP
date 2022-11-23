<?php
$user = 'root';
$password = '';
$database = 'airline_reservation_system';
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
            $mysqli->connect_errno . ') ' .
            $mysqli->connect_error);
}
// SQL query to select data from database
$sql = "SELECT * FROM flight_info";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Available Flight</title>
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
        <?php include './BUserHomePage.php'; ?>
        <script src="../js/bootstrap.js"></script>
    <center>
        <div class="form-group">
            <div  class="col-sm-4"></div>
            <div  class="col-sm-4">
                <h2 style="text-align: center">Flight Details</h2>
            </div>
        </div>
    </center>
    <table class="table table-hover">
        <thead>
            <tr>  
                <th scope="col">Flight_no</th>
                <th scope="col">Flight_name</th>
                <th scope="col">Source_city</th>
                <th scope="col">Destination_city</th>
                <th scope="col">Airport_Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Ticket Price</th>
                <th scope="col">Available Seats</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
                ?>
                <tr>
                    <!--FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['Flight_no']; ?></td>
                    <td><?php echo $rows['Flight_name']; ?></td>
                    <td><?php echo $rows['Source']; ?></td>
                    <td><?php echo $rows['Destination']; ?></td>
                    <td><?php echo $rows['Airport']; ?></td>
                    <td><?php echo $rows['Date']; ?></td>
                    <td><?php echo $rows['Time']; ?></td>
                    <td><?php echo $rows['Price']; ?></td>
                    <td><?php echo $rows['Seat']; ?></td>
                    <td><a class="btn btn-success" href="BUser_to_book_ticket.php?deleteid=<?php echo $rows['Flight_no'];?>" >Book_Ticket</a></td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</body>
</html>
