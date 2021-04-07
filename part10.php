<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Getters and Setters
  Getter and setter strategies are utilized when
  we need to restrict the direct access to the variables by end-users.
  Getters and setters are methods used to define or retrieve
  the values of variables, normally private ones.-->
    <?php
    class Movie{
      public $title;
      private $rating;
      function __construct($title,$rating){
        $this->title=$title;
        $this->setRating($rating);
      }

      function getRating(){
        return $this->rating;
      }
      function setRating($rating){
        $this->rating=$rating;
      }
    }
    $avengers=new Movie("Avengers","PG-13");
    $avengers->setRating("NR");
    echo $avengers->getRating();
    ?>


    <!--Inheritance
    The property by which one class inherits
    the functionalities of another class-->
    <?php
    class Chef{
      function makeChicken(){
        echo "The chef makes chicken <br>";

      }
      function makeSalad(){
        echo "The chef makes salad<br>";
      }
      function makeSpecialDish(){
        echo "The chef makes bbq ribs<br>";
      }
    }

    class ItalianChef extends Chef{
      function makePasta(){
        echo "The chef makes pasta";
      }

      function makeSpecialDish()//This method overrides the parent methods
      {
        echo "The chef makes special chicken parms<br>";
      }

    }
    $chef= new Chef();
    $chef->makeChicken();

    $italianChef = new Chef();
    $italianChef->makeChicken();

    $chef= new Chef();
    $chef->makeSpecialDish();

    $italianChef = new ItalianChef();
    $italianChef->makeSpecialDish();

     ?>



  </body>
</html>
