<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Class and objects
    A class is a template for objects, and an
    object is an instance of class.
    -->

    <?php
       class Book{
         var $title;
         var $author;
         var $pages;
       }
       $book1 = new Book;
       $book1->title="Harry Potter";
       $book1->author="Jk Rowling";
       $book1->pages=400;

       $book2 = new Book;
       $book2->title="Lords of the Rings";
       $book2->author="Tolkien";
       $book2->pages=700;

      echo $book2->title;

    ?>

    <!--Constructors
    A constructor allows  to initialize
    an object's properties upon creation of the object.
    -->
    <?php
    class Bookn{
      var $title;
      var $author;
      var $pages;

      function __construct($Title,$Author,$Pages)//Parameterized constructor
      {
        $this->title=$Title;
        $this->author=$Author;
        $this->pages=$Pages;
      }
    }
    $book1 = new Bookn("Harry Potter","Jk Rowling",400);
    $book1->title="Hunger Games";
    $book2 = new Bookn("Lords of the Rings","Tolkien",700);
    echo $book2->title;
    ?>
  </body>
</html>
