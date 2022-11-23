<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../CSS_Local/registeruser.css">
    
  
</head>
<body>
<?php include './BAdminhomepage.php';?>

    <div class="box">
        <h2>Register Admin</h2>
        <form action="" name="myform"  method="POST" >
            <div class="inputBox" >
<!--                //pattern="[a-zA-Z]{3,}-->
<input type="text" name="name" required="" pattern="[a-zA-Z\s]+"  title="Name Must be Alphabet!">
                <label id="lb" >Full Name</label>
            </div>
            <div class="inputBox" >
                <input type="email" name="email" required=""7299
                       >
                <label id="lb1" >Email Address</label>
            </div>
            <div class="inputBox" >
                <input type="text" maxlength="10" name="pasport" pattern="[E]{1}[T]{1}[0-9]{2,}" title="PassportID must Start With ET" required="">
                <label id="lb2" >Passport Id</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" id="txtPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="The pass Password Must Have One Uppercase,Number and Special Character and Must Be grater than 6" required="">
                <label id="lb3" >Password</label>
            </div>
            
            <div class="inputBox" >
                <input type="password" name="cpassword" id="txtConfirmPassword" required="">
                <label id="lb4">Confirm Password</label>
            </div>
            <input type="submit"  name="register"  value="Register">
            <input type="reset" name="" value="Cancel">
        </form>
    </div>
    <script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("txtPassword");
        var txtConfirmPassword = document.getElementById("txtConfirmPassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
</script>
    <script src="../JavaScript/validateregistration.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>

<?php
if(isset($_POST['register'])){
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
   //<h2>The Person is already Registered</h2>
    echo ("<script>alert('The Person is already Registered');</script>");
}
 else {
$sql = "insert into buser (Full_Name, Email, PassportId,Password,userType)
VALUES ('$fullname','$email','$PassprtId','$password','admin')";

if ($conn->query($sql) === TRUE) {
    //<h2>The Person is already Registered</h2>
    echo ("<script>alert('New record created successfully');</script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
$conn->close();
}
?>
