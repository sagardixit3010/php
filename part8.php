<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Comments-->
    <?php
    //Single Line Comments
    /*
    Multi line Comments
    */
    ?>
    <!--Include Html in php-->
    <?php
    //Including the header.html using keyword include
    include "header.html";
    ?>
    <?php
    include "footer.html";
    ?>

    <!--Include PHP files-->

    <?php

    $title="My first post";
    $author="Sagar";
    $wordcount=400;
    include "article-header.php";
    ?>
    <?php
     include "demo.php";
     sayHi("Sagar");
     echo $feetInMile;
     ?>

  </body>
</html>
