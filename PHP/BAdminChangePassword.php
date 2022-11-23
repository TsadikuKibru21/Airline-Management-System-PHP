

<html>
<head>
    <title> change password</title>
    <link rel="stylesheet" type="text/css" href="../CSS_Local/style.css">   
</head>
    <body>
         <?php include './BAdminhomepage.php'; ?>
    <div class="login-box">
        <img src="../images/avatar.jpg" class="avatar">
        <h1>Change Password</h1>
            <form method="POST" action="#">
            
            <p>Old Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="required">
            <p>New Password</p>
            <input type="password" name="password1" placeholder="Enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="The pass Password Must Have One Uppercase,Number and Special Character and Must Be grater than 6" required="">
            <p>Confirm new Password</p>
            <input type="password" name="password2" placeholder="Enter Password" >
            <input type="submit" name="submit" value="change">
              
            </form>
        
        
        </div>
    <?php 
$sn = "localhost";
$un = "root";
$pas = "";
$db="airline_reservation_system";
// Create connection
$conn =new  mysqli($sn, $un, $pas,$db);
// Check connection

if (!$conn) {
die("Connection failed: ");
}
// echo "Connected successfully by using pros"."<br>";

if(isset($_POST['submit'])){

$pass=$_POST['password'];
$pass1=$_POST['password1'];
$pass2=$_POST['password2'];
$sq="select * from buser where Email = '{$_SESSION['email']}'";
$res=$conn->query($sq);
if ($res->num_rows >0){
     while( $rows = $res->fetch_assoc()){
       $oldpassword1=$rows['Password']; 
   }
if($oldpassword1==$pass){
    if($pass2==$pass1){
        $sql1 = "update  buser set Password='$pass1' where Password='$pass'";

if ($conn->query($sql1) === TRUE) { 
    echo ("<script>alert('The Password is Updated Succesfully ');</script>");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
 else {
       echo ("<script>alert('Password Does Not Match');</script>");
     
    }
}
 else {
       echo ("<script>alert('You Entered Wrong Old Password');</script>");
  
}
}


}
$conn->close();


?>
    </body>
  
</html>
