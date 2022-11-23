
<?php


$sn = "localhost";
$un = "root";
$pas = "";
$db="airline_reservation_system";
$emaila_ddress =$_POST["username"];
$password= $_POST["password"];
// Create connection
$conn =new  mysqli($sn, $un, $pas,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($emaila_ddress=='admin@gmial.com' && $password=='123123' ){
     header("Location:../PHP/BAdminhomepage.php",TRUE,301);
     exit();
}
 else {
$sql1="select *from  buser where Email='$emaila_ddress' and Password='$password'";
$result1=$conn->query($sql1);
if ($result1->num_rows >0){
    header("Location:../PHP/BUserHomePage.php",TRUE,301);
     exit();
}
 else {
     include '../PHP/BLoginPage.php';//<h2>The Person is already Registered</h2>
    echo ("<script>alert('Username or Password is incorrect');</script>");
}
}



///////////////////////////////


?>
