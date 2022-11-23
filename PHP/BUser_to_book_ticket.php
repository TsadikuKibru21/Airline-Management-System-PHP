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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Book Ticket</title>
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
        <form class="registerclass" name="myForm" method="POST">
            <center>

                <div>
                    <div class="form-group">
                        <div  class="col-sm-4"></div>
                        <div  class="col-sm-4">
                            <h2 style="text-align: center">Book Ticket</h2>
                        </div>

                        <div class="form-group" style=" display: flex;">
                            <label for="source" class="col-sm-3 control-label">Flight_no:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $flightno; ?>"  name="flightno" required minlength="4" title="Please enter flight no" readonly>
                            </div>

                        </div>

                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Flight Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control"value="<?php echo $flightname; ?>" name="flightname" required minlength="4" title="Please enter flight name" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Source City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $source; ?>" name="source" required title="Please enter source " readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Destination_City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $destination; ?>" name="destination" required title="Please enter destiny" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Airport Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $airport; ?>" name="airportname" required minlength="6" title="Please enter airport name" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Date:</label>
                            <div class="col-sm-8">

                                <input type="date" class="form-control" value="<?php echo $date; ?>" name="date" required title="please enter date of flight" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Time:</label>
                            <div class="col-sm-8">

                                <input type="time" class="form-control" value="<?php echo $time; ?>" name="time" required title="Please enter time of flight" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Ticket Price:</label>
                            <div class="col-sm-8">

                                <input type="number" name="price" class="form-control" value="<?php echo $price; ?>" name="ticketprice" name="ticketprice" required minlength="3" title="Please enter price of fligth" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Available Seat</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" value="<?php echo $seats; ?>" id="seat" name="seat" required minlength="1" title="add number of seats" readonly>
                            </div>
                        </div>


                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Number of Seats:</label>
                            <div class="col-sm-8">

                                <select class="form-control"id="seats" name="seats">
                                    <!--                    (please select:)-->
                                    <option value="1" selected>1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Class:</label>
                            <div class="col-sm-8">

                                <select class="form-control" id="classs" name="classs">
                                    <!--                    (please select:)-->
                                    <option value="Regular" selected>Regular Class</option>
                                    <option value="first">First Class</option>
                                    <option value="second">Second Class</option>
                                    <option value="economic">Economic Class</option>
                                    <option value="bussines">Business Class</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="form-group" style="display: flex;">
                        <label for="destiny" class="col-sm-3 control-label">Passport ID:</label>
                        <div class="col-sm-8">

                            <input type="text" name="passport" class="form-control" required minlength="3" title="Please enter your passport ID " >
                        </div>
                    </div>
                    <div class="form-group" >
                        <div class="col-sm-offset-3 col-sm-8">
                            <input type='hidden' id="payed"  name='payed'  readonly="">
                            <input type='hidden' id="total" name='total' readonly="">
                            <button class="btn-success" type="submit" onclick="calculate()" id="book"   name="book" value="addflight">Book Ticket</button>

                            <!--                            <button class="btn-danger"  <button>Calculate</button> type="reset"  name="add" value="addflight">Cancel</button>-->
                        </div>
                    </div>

                </div>
            </center>
        </form>
        <script type="text/javascript">
            var name = '';
            function calculate() {
                let Aseat = document.myForm.seat.value;
                //var Aseat = parseFloat((document.getElementById("seat").value));
                parseFloat(Aseat);
                let Rseat = document.myForm.seats.value;
                parseFloat(Rseat);
                //var Rseat = parseFloat((document.getElementById("seats").value));
                let price = document.myForm.price.value;
                parseFloat(price);
                //var price = parseFloat((document.getElementById("price").value));
                let Bclass = document.myForm.classs.value;
                //var Bclass = parseFloat((document.getElementById("classs").value));
                 function getSum(a, b){
                        while (b != 0) {
                            var carry = a & b;  //calculate if is there any carry we need to add
                            a = a ^ b;   // a is used to hold the sum
                            b = carry << 1;  //b is used to hold left shift carry
                        }
                        return a;
                        }
                var total = 1.0;
                if ((Aseat - Rseat) >= 0) {
                    if (Bclass == "Regular") {
                        total = price * Rseat;
                        //price++=Rseat;
                    } else if (Bclass == "first") {
                        //5% above  
                     
                        var percent=price * 0.05;
                        var prt=getSum(price,percent);
                        total=prt * Rseat;
                        
                    } else if (Bclass == "second") {
                        //10% above
                        var percent=price * 0.1;
                        var prt=getSum(price,percent);
                        total=prt * Rseat;
                    } else if (Bclass == "economic") {
                        //15% above
                        var percent=price * 0.15;
                        var prt=getSum(price,percent);
                        total=prt * Rseat;
                    } else {
                        //20 above
                       var percent=price * 0.2;
                        var prt=getSum(price,percent);
                        total=prt * Rseat;
                    }
                } else {
                    total = 0;
                }

                document.forms['myForm']['total'].value = total;
                func();
            }
            var name = '';
            function func() {

                var total = document.myForm.total.value;
                var name = prompt("Enter money " + total + " Birr");
                document.forms['myForm']['payed'].value = name;
            }
        </script>

    </body>
</html>
<?php
if (isset($_POST['book'])) {

    $flightno = $_POST['flightno'];
    $flightname = $_POST['flightname'];
    $source_city = $_POST['source'];
    $destination_city = $_POST['destination'];
    $airline = $_POST['airportname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = (float) $_POST['price'];
    $seats = $_POST['seat'];
    $Aseats = (float) $_POST['seat'];
    $Rseat = (float) $_POST['seats'];
    $class = $_POST['classs'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airline_reservation_system";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $pasp = $_POST['passport'];

    $sql1 = "select * from buser where PassportID='$pasp'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
        // output data of each row
        if (($Aseats - $Rseat) >= 0) {
            //update flight enfo
            $Payment = $_POST['payed'];
            $total = $_POST['total'];

            $newAseat = $Aseats - $Rseat;
            //echo 'payed before com' . $Payment1;
            if ($Payment >= $total) {
                $sql2 = "select * from flight_report where PassportID='$pasp' and Flight_no='$flightno'";
                $result2 = $conn->query($sql2);
                if ($result2->num_rows > 0) {
                    echo ("<script>alert('You Have Already Has This Tickect  Download It');</script>");
                } else {
                    //(PassportID,Flight_no,Source,Destination,Date,Time,Reserved_seat,Reserved_class,Payed_Amount,Change)
                    $change = $Payment - $total;
                    $sql3 = "insert into flight_report VALUES ('$pasp','$flightno','$source_city','$destination_city','$date','$time','$Rseat','$class','$Payment','$change')";
                    if ($conn->query($sql3) === TRUE) {
                        $sql4 = "update  flight_info set Seat='$newAseat' where Flight_no='$flightno'";
                        $conn->query($sql4);
                        //<h2>The Person is already Registered</h2> echo '<center><h2>Booked Succesfully </h2></center>';
                        echo ("<script>alert('You Booked Ticket Successfully You can Download It');</script>");
                    } else {
                        echo "Error: " . $sql3 . "<br>" . $conn->error;
                    }
                }

                //echo $total; 
            } else {
                echo ("<script>alert('You Entered Less Amount');</script>");
            }
        } else {
            echo ("<script>alert('There is no Available space please Wait Another Flight ');</script>");

            
            exit();
        }
    } else {

//    header("Location: BUserFlight_view_after_login.php");
        echo ("<script>alert('You Entered Wrong Passport Id');</script>");
    }


    $conn->close();
}
?>