
<?php 
// session_start(); 
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","airline_reservation_system");
//start connection
$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connect){
  die("Database connection Error".mysql_error());
  }

  //if redirected from login.php
  if(isset($_POST['username'])){
    $user = mysqli_real_escape_string($connect,$_POST['username']);
    $pass = md5($_POST['password']);
    //check
    $login = mysqli_query($connect,"SELECT * FROM users
                WHERE First_Name = '{$user}' AND Password = '{$pass}'");
    if(mysqli_num_rows($login)>=1){
      $emp_array = mysqli_fetch_array($login);
      $_SESSION['username'] = $user;
      $_SESSION['emp_id'] = $emp_array['id'];
      $_SESSION['user_id'] = $emp_array['id'];
      
      $_SESSION['transaction']=0;
      if($emp_array['admin']==1) $_SESSION['admin']=1;
      if($emp_array['admin']==2) $_SESSION['admin']=2;
    }
    else{
      $temp=1;
    }
    if(isset($_SESSION['username']))
    header("Location: index.php");
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="CSS_Local/Login.css">
  
</head>

<body>
<?php include 'Bnavbar.php';?>
    <div class="box">
        <h2>Login</h2>
        <form action="BLoginPage.php" method="GET">
            <div class="inputBox" >
                <input type="text" name="username" required="">
                <label id="lb" >Username</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" required="">
                <label id="lb1">Password</label>
            </div>
            <input type="submit" name="" value="Login">
            <input type="reset" name="" value="Cancel">
        </form>
    </div>

    <!-- //php
//     $dbServername="127.0.0.1";
//     $dbUsername="root";
//     $dbPassword="";
//     $dbName="airline_reservation_system";
//     $name=$_GET["username"];
//     $pass=$_GET["password"];
   
    
//     $conn =new  mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
// // Check connection

// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// //echo "Connected successfully by using pros"."<br>";
// $sq="select * from users where First Name = '$name' and Password = '$pass'";
// $res=$conn->query($sq);

// if($res->num_rows>0){
// header("Location:BSignUp.php",TRUE,301);
//    exit();
// //echo "LOGIN successfully";
// }
// else{
//   echo "Invalid username and password";
// }

// $conn->close();
   -->

    <script src="/js/bootstrap.js"></script>
</body>
</html>


