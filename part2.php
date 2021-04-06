<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<!--Getting the user input-->
  <form action="part2.php" method="get">
    <!--Form for inputting name and submit it-->
    Name:<input type="text" name="username">
    Age:<input type="number" name="age">
    <input type="submit">

  </form>
  <br>

  <?php
    echo $_GET["username"]."<br>";//gets the name from the form in the html, and echos the name1
    echo "Your age is".$_GET["age"];//age is displayed
   ?>



  </body>
</html>
