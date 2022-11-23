<?php
$user = 'root';
$password = '';
$database = 'airline_reservation_system';
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from flight_info where Flight_no='$id'";
    $result = $mysqli->query($sql);
    if($result){
         header("Location:../PHP/Badmin_flight_view.php",TRUE,301);
         exit();
         echo 'deleted Succesfully';
    }
    else{
        die('Connect Error (' .$mysqli->connect_errno . ') ' .$mysqli->connect_error);
    }
    $mysqli->close();
}

?>