
<?php
//prompt function
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type your name.";
    $name = prompt($prompt_msg);

    $output_msg = "Hello there ".$name."!";
    echo($output_msg);

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","airline_reservation_system");
//start connection
$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connect){
  die("Database connection Error".mysql_error());
  }
 ?>