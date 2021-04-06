<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!--URL paramaters -->
    <form action="part4.php" method="get">
      Name:<input type="text" name="name">
      <input type="submit">
    </form>

    <?php
    if (isset($_GET["num1"] ) && isset($_GET["num2"])){
      echo $_GET["name"];
      // URl modification
      // localhost:4000/name=JOhn&age=70
      // without implictly mentioning it in the html we can access through url
      echo $_GET["age"];
    }



    ?>

<!-- POST vs GET
GET is used to request data from a specified resource.
POST is used to send data to a server to create/update a resource.
-->

<!--GET method-->
<form action="part4.php" method="get">
  Password:<input type="password" name="password"><br>
  <input type="submit">
</form>
<br>
<
  <?php
  echo $_GET["password"];
  ?>

<!--POST method-->
  <form action="part4.php" method="post">
    Password:<input type="password" name="password"><br>
    <input type="submit">
  </form>
  <br>
  <
    <?php
    echo $_POST["password"];//more secure than GET and it dosen't display on url
    ?>






  </body>
</html>
