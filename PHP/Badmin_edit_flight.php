<?php
$user = 'root';
$password = '';
$database = 'airline_reservation_system';
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "select *from  flight_info  where Flight_no='$id'";
    $result = $mysqli->query($sql);
     while ($rows = $result->fetch_assoc()) {
    
        $flightno = $rows['Flight_no'];
        $flightname = $rows['Flight_name'];
        $source = $rows['Source'];
        $destination = $rows['Destination'];
        $airport = $rows['Airport'];
        $date = $rows['Date'];
        $time = $rows['Time'];
        $price = $rows['Price'];
        $seats = $rows['Seat'];
      
    } 
   
}
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Flight</title>
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
<?php include 'Badminnav.php'; ?>
        <form class="registerclass"  method="POST">
            <center>

                <div>
                    <div class="form-group">
                        <div  class="col-sm-4"></div>
                        <div  class="col-sm-4">
                            <h2 style="text-align: center">Add Flight Info</h2>
                        </div>
                        
                        <div class="form-group" style=" display: flex;">
                            <label for="source" class="col-sm-3 control-label">Flight_no:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $flightno; ?>"  name="flightno" required minlength="4" title="Please enter flight no" >
                            </div>

                        </div>

                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Flight Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control"value="<?php echo $flightname ; ?>" name="flightname" required minlength="4" title="Please enter flight name">
                            </div>
                          </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Source City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $source ; ?>" name="source" required title="Please enter source ">
                            </div>
                        </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Destination_City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $destination ; ?>" name="destination" required title="Please enter destiny">
                            </div>
                        </div>
                           <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Airport Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $airport ; ?>" name="airportname" required minlength="6" title="Please enter airport name">
                            </div>
                        </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Date:</label>
                            <div class="col-sm-8">

                                <input type="date" class="form-control" value="<?php echo $date ; ?>" name="date" required title="please enter date of flight">
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Time:</label>
                            <div class="col-sm-8">

                                <input type="time" class="form-control" value="<?php echo $time ; ?>" name="time" required title="Please enter time of flight">
                            </div>
                        </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Ticket Price:</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" value="<?php echo $price ; ?>" name="ticketprice" name="ticketprice" required minlength="3" title="Please enter price of fligth">
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Available Seat</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" value="<?php echo $seats ; ?>" name="seat" required minlength="1" title="add number of seats">
                            </div>
                        </div>
                            
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Comment:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" name="comment" required minlength="4" title="add any comment">
                            </div>
                        </div>
                            
                        
                    </div>
                    <div class="form-group" >
                        <div class="col-sm-offset-3 col-sm-8">

                            <button class="btn-success" type="submit"  name="update" value="addflight">Update Flighgt</button>
<!--                            <button class="btn-danger" type="reset"  name="add" value="addflight">Cancel</button>-->
                        </div>
                    </div>
                    
                </div>
            </center>
        </form>

    </body>
</html>
<?php
if (isset($_POST['update'])) {

    $flightno = $_POST['flightno'];
    $flightname = $_POST['flightname'];
    $source_city = $_POST['source'];
    $destination_city = $_POST['destination'];
    $airline = $_POST['airportname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = $_POST['ticketprice'];
    $seats = $_POST['seat'];
    $comment = $_POST['comment'];

  
 $sql1 = "update  flight_info set Flight_no='$flightno',Flight_name='$flightname',Source='$source_city',Destination='$destination_city',Airport='$airline',Date='$date',Time='$time',Price='$price',Seat='$seats',Comment='$comment' where Flight_no='$id'";

if ($mysqli->query($sql1) === TRUE) { 
    echo ("<script>alert('The Record is Updated Succesfully ');</script>");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
   
  
    $mysqli->close();
}



?>