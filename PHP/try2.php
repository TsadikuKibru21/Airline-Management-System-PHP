
<?php
$num1=10;
  function prompt($prompt_msg) {
        echo("<script> var answer = prompt('" . $prompt_msg . "'); </script>");

        $answer = "<script>document.write(answer); </script>";
        return($answer);
    }
 //program
$prompt_msg = "Please Enter number";
$num2 = prompt($prompt_msg);
echo $num2;
echo '   ';
if($num1>$num2){
    echo 'number 1 win';
}
 else {
    echo 'number 2 win';
}
?>
