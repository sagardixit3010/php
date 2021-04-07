<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Functions
    A function is a block of statements that can be used repeatedly in a program.-->
    <?php
    function sayHi($name,$age)//Parameterized function
    {
      echo "Hello $name, you are $age <br>";
    }
    sayHi("Mike",40);
    sayHi("Max",32);
    sayHi("Oscar",34);
    ?>
    <!--Return statement in function
    -->
    <?php
    function cube($num){
      return pow($num,3);//return the value to the called function
    }

    $cubed=cube(2);
    echo $cubed;
    ?>
    <!-- If statement-->
    <?php
      $isMale=true;
      $isTall=false;

      if($isMale && $isTall) // And(&&) Or(||) Negation(!)

      {
        echo "You are tall male";
      }
      elseif($isMale && !$isTall){//elseif
        echo "You are a short male";
      }elseif(!isMale && $isTall){
        echo "You are not male but  are tall";
      }
      else{
        echo "You are not male and not tall";
      }

    ?>

    <?php

    //If statement working with conditions
    //Comparision operators(>=,<=,!=,==,>,<)

    function getMax($num1,$num2,$num3){
      if($num1 >= $num2 && $num1>=$num3){
        return $num1;
      }elseif($num2>=$num1 && $num2>=$num3){
        return $num2;
      }
      else {
        return $num3;
      }
    }
    echo getMax(30,780,90);
    ?>


<!--Building calculator-->
<form action="part6.php" method='post'>
  First Number:<input type="number" name="num1"><br>
  OP:<input type="text" name="op"><br>
  Second Number:<input type="number" name="num2"><br>
  <input type="submit">
</form>

 <?php
  $num1=$_POST["num1"];
  $num2=$_POST["num2"];
  $op=$_POST["op"];
  if($op=="+"){
    echo $num1+$num2;
  }elseif($op=="-"){
    echo $num1-$num2;
  }elseif($op=="*"){
    echo $num1*$num2;
  }elseif($op=="/"){
    echo $num1/$num2;
  }else{
    echo "Invalid operator";
  }


  ?>





  </body>
</html>
