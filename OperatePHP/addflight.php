<?php
$sn = "localhost";
$un = "root";
$pas = "";
$db="airline_reservation_system";
$conn =new  mysqli($sn, $un, $pas,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$flightno=$_POST['flightno'];
$flightname=$_POST['flightname'];
$source_city=$_POST['source'];
$destination_city=$_POST['destination'];
$airline=$_POST['airportname'];
$date=$_POST['date'];
$time=$_POST['time'];
$price=$_POST['ticketprice'];
$seats=$_POST['seat'];
$comment=$_POST['comment'];
//`Flight_no`, `Flight_name`, `Source`, `Destination`, `Airport`, `Date`, `Time`, `Price`, `Seat`, `Comment`
$sql1="select *from  flight_info where Flight_no='$flightno'";//and
$result1=$conn->query($sql1);

if ($result1->num_rows >0){
    include '../PHP/BAdmin_add_flight.php';//<h2>The Person is already Registered</h2>
    echo ("<script>alert('The Person is already Registered');</script>");
}
 else {
$sql = "insert into flight_info (Flight_no, Flight_name, Source,Destination,Airport,Date,Time,Price,Seat,Comment)
VALUES ('$flightno','$flightname','$source_city','$destination_city','$airline','$date','$time','$price','$seats','$comment')";

if ($conn->query($sql) === TRUE) {
   
    
     header("Location:../PHP/Badmin_flight_view.php",TRUE,301);
     echo ("<script>alert('New record created successfully');</script>");
     exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
$conn->close();

?>


