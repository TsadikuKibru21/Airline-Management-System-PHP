

<?php
$sn = "localhost";
$un = "root";
$pas = "";
$db="airline_reservation_system";

$fullname=$_POST['name'];
$email=$_POST['email'];
$PassprtId=$_POST['pasport'];
$password=$_POST['password'];

// Create connection

$conn =new  mysqli($sn, $un, $pas,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1="select *from  buser where PassportId='$PassprtId'";
$result1=$conn->query($sql1);

if ($result1->num_rows >0){
    include '../PHP/BSignUp.php';//<h2>The Person is already Registered</h2>
    echo ("<script>alert('The Person is already Registered');</script>");
}
 else {
$sql = "insert into buser (Full_Name, Email, PassportId,Password,userType)
VALUES ('$fullname','$email','$PassprtId','$password','user')";

if ($conn->query($sql) === TRUE) {
    include '../PHP/BSignUp.php';//<h2>The Person is already Registered</h2>
    echo ("<script>alert('New record created successfully');</script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
$conn->close();
?>