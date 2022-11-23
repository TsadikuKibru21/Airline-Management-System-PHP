<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Download Ticket</title>
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
        <form class="registerclass" action="Bprint.php" name="myForm" method="POST">
            <center>

                <div>
                    <div class="form-group">
                        <div  class="col-sm-4"></div>
                        <div  class="col-sm-4">
                            <h2 style="text-align: center">Search Ticket</h2>
                        </div>

                        <div class="form-group" style=" display: flex;">
                            <label for="source" class="col-sm-3 control-label">PassportID:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control"   name="passportid" required minlength="4" title="Please enter passport ID" >
                            </div>

                        </div>
                         <div class="form-group" style=" display: flex;">
                            <label for="source" class="col-sm-3 control-label">Flight_no:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control"   name="flightno" required minlength="4" title="Please enter flight no" >
                            </div>

                        </div>
                        <div class="form-group" >
                        <div class="col-sm-offset-3 col-sm-8">
                            
                            <button class="btn-success" type="submit" id="book" name="download"> Download </button>

                        </div>
                    </div>
                        
                    </div>
                </div>
            </center>
        </form>
    </body>
</html>