<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<!--Building a calculator-->

    <form action="part3.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <input type="submit">
    </form>

    <?php
    if (isset($_GET["num1"] ) && isset($_GET["num2"]))//validation 
     {
      $num1=$_GET["num1"];
      $num2=$_GET["num2"];

      echo $num1+$num2;
    }

    ?>
<!--Building a mad libs game-->

<form action="part3.php" method="get">
  Color:<input type="text" name="color"><br>
  Plural Noun:<input type="text" name="pluralNoun"><br>
  Celebrity:<input type="text" name="celebrity"><br>
  <input type="submit">
</form>

<?php
if (isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])) {

  $color=$_GET["color"];
  $pluralNoun=$_GET["pluralNoun"];
  $celebrity=$_GET["celebrity"];
  echo "Roses are $color<br>";
  echo "$pluralNoun are blue <br>";
  echo "I love $celebrity <br>";
}


?>



  </body>
</html>
