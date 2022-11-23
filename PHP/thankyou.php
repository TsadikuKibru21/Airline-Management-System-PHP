<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/CSS_Local/Login.css">
  
</head>
<body>
    <nav class="navbar navbar-expand-md  bg-dark navbar-dark">
        <div class="container">
            <a href="BHomePage.html" class="navbar-brand " >Airline Reservation</a>
           <buttun class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
               <span class="navbar-toggler-icon"></span>
           </buttun>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="#flight-info" class="nav-link">Flight Info</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-us" class="nav-link">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="Bsignup.html" class="nav-link">Sign Up</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <div class="box">
        <h2>Login</h2>
        <form >
            <div class="inputBox" >
                <input type="text" name="" required="">
                <label id="lb" >Username</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="" required="">
                <label id="lb1">Password</label>
            </div>
            <input type="submit" name="" value="Login">
            <input type="reset" name="" value="Cancel">
        </form>
    </div>
    <?php
    
    
    
    ?>
    <!-- <center>
        <form class="admin_page_login" action="" method="post">
            <fieldset style="width: 500px; margin:auto; padding: 20px; margin-top: 150px; border-bottom-color:red; ">

            
                <!--<div><h3 style="color: yellow;size: 50px;font: bold">Admin Login Page</h3></div><br> comment 
                <div class="form-group" style=" display: flex;">
                    <label for="firstName" class="col-sm-3 control-label " style="margin-left: 40px;">User Name:</label>
                    <div class="col-sm-8">

                        <input type="text" class="form-control" id="email" name="email" required title="please enter your email address before!" placeholder="email address...">
                    </div>
                </div>
                <div class="form-group" style="display: flex;">
                    <label for="pass" class="col-sm-3 control-label " style="margin: 20px;">Password:</label>
                    <div class="col-sm-8">

                        <input style="margin-top: 20px;" type="password" class="form-control" value="" placeholder="password..." name="pass" required="" title="please enter the password before">
                    </div>
                </div><br>
                <div class="form-group" style="margin-top: 10px;" >
                    <div class="col-sm-offset-3 col-sm-8">

                        <button type="submit"  class="btn btn-default btn-success" onClick="return validate()" name="login" value="Login">Login</button>
                        <button type="reset" class="btn btn-default btn-success" style="margin-left: 20px;">Reset</button>
                    </div>
                </div>
                
                
                 </fieldset>
            </form>
    </center> -->
    <script src="/js/bootstrap.js"></script>
</body>
</html>
