<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Switch statement
    The switch statement is used to perform different
    actions based on different conditions.
    Syntax
    switch (n) {
    case label1:
      code to be executed if n=label1;
      break;
    case label2:
      code to be executed if n=label2;
      break;
    case label3:
      code to be executed if n=label3;
      break;
      ...
    default:
      code to be executed if n is different from all labels;
  }-->
    <form action="part7.php" method="post">
      What was your grade
      <input type="text" name="grade">
      <input type="submit">
    </form>
    <?php
    $grade=$_POST["grade"];
    switch($grade){
      case "A":
              echo "You did Amazing";
              break;
      case "B":
            echo "You did pretty good";
            break;
      case "C":
            echo "You did poorly";
            break;
      case "D":
            echo "You did very bad";
            break;
      case "F":
            echo "You Fail!";
            break;
      default:
        echo "Invalid grade";

    }
    ?>

<!--While Loop
  The while loop - Loops through a block of code as
  long as the specified condition is true.-->
 <?php
   $index=1;
   while($index<=5){
     echo "$index<br>";
     $index++;
   }
 ?>

 <!--Do While loop
 The do...while loop - Loops through a block of code once, and then
 repeats the loop as long as the specified condition is true.
 -->
 <?php
 $index=6;
 do{
   echo "$index<br>";
   $index++;
 }while($index<=5);
 ?>

 <!--For loop
 The for loop - Loops through a block of code a specified
 number of times.
-->
<?php
    $luckyNumbers=array(4,8,12,13,14,19,20);
    for($i=0;$i<count($luckyNumbers);$i++)
    {
        echo "$luckyNumbers[$i]<br>";
    }
?>


  </body>
</html>
