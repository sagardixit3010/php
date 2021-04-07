<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!--Arrays
An array stores multiple values in one single variable
-->

    <?php

    $friends=array("Sagar","Sanju","Sachin","Jim");
    $friends[1]="Dwight";//arrays can be manipulated
    echo $friends[1];

    $friends[4]="Angel";
    echo $friends[4];//Add at 4th index

    //Count the number of elements in array

    echo count($friends);

     ?>

  <!--Checkboxes
Let the user select one or more options of a limited number of choices.
-->
  <form action="part5.php" method="post">
    Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
  </form>

  <?php
    $fruits =$_POST["fruits"];
    echo $fruits[1];

  ?>
<!--Associative Array(=>)
Key-Value Pair
Keys should be unique-->

<form action="part5.php" method="post">
  <input type="text" name="student">
  <input type="submit">
</form>

<?php
  $grades = array("Sagar"=>59,"Sachin"=>80,"Sanju"=>10);
  $grades["Sachin"]=90;//Modify the value using key
  echo $grades["Sachin"];//Accessing elements using key
 ?>

<?php
  $grades = array("Sagar"=>59,"Sachin"=>80,"Sanju"=>10);
  echo $grades[$_POST["student"]];
?>

  </body>
</html>
