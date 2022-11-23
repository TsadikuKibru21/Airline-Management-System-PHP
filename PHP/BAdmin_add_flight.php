<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add Flight</title>
    <style>
    
    body{
margin: 0;
padding: 10;
font-family: sans-serif;
background: url('../images/airline1.jpg') ;
background-size: cover;
}    
form{
    padding: 20px;
}
</style>
</head>
<body>
<?php include './BAdminhomepage.php';?>
    <form class="registerclass" onsubmit="return validate();" action="../OperatePHP/addflight.php" method="POST">
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

                                <input type="text" class="form-control"  name="flightno" required minlength="4" title="Please enter flight no" >
                            </div>

                        </div>

                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Flight Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" name="flightname" required minlength="4" title="Please enter flight name">
                            </div>
                          </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Source City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" name="source" required title="Please enter source ">
                            </div>
                        </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Destination_City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" name="destination" required title="Please enter destiny">
                            </div>
                        </div>
                           <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Airport Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" name="airportname" required minlength="6" title="Please enter airport name">
                            </div>
                        </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Date:</label>
                            <div class="col-sm-8">

                                <input type="date" class="form-control" name="date" required title="please enter date of flight">
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Time:</label>
                            <div class="col-sm-8">

                                <input type="time" class="form-control" name="time" required title="Please enter time of flight">
                            </div>
                        </div>
                            <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Ticket Price:</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" name="ticketprice" name="ticketprice" required minlength="3" title="Please enter price of fligth">
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Available Seat</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" name="seat" required minlength="1" title="add number of seats">
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

                            <button class="btn-success" type="submit"  name="add" value="addflight">ADD FLIGHT</button>
                            <button class="btn-danger" type="reset"  name="add" value="addflight">Cancel</button>
                        </div>
                    </div>
                    
                </div>
            </center>
        </form>
</body>
</html>