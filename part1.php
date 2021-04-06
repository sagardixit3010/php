
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // Installed the Atom platform along with the php.
    // Setting done for the environment variable.
    // Using the command php -S localhost:4000 connected the php to the server.

    /*---------- Basic printing formats in PHP----------*/
     echo("hello");
     echo "hello";

    /*----------Writing Html inside in php-------------*/
    echo "<h1>Hello World! I am Sagar</h1>";
    echo "<p>This is a paragraph</p>";


    /*---------Variables-----------------------------*/
    $characterName="Sagar";//String(muttable in php)
    $characterAge=30;//INteger

    echo "Hey I am $characterName<br>";
    echo "My age was $characterAge<br>";

    //modification to the age variable
    $characterAge=50;//Variables can be modified and can be used repeatedly
    echo "My current age is $characterAge<br>";

    /*---------Data Type----------------*/
    //Data type is the type of data which may be integer,decimal,boolean,null
    $dt1=30;//INteger
    $dt2='Hey';//String
    $dt3= true;

    /*--------Strings----------------*/
    //Strings are sequence of characters
    echo "Paris<br>";
    $phrase="Traversy Media";
    echo "$phrase<br>";
    //STRING OPERATION
    //1.String to lower case(strtolower($variable_name))
    echo strtolower($phrase);
    //2.String to upper case(strtoupper($variable_name))
    echo strtoupper($phrase);
    //3.Length of string(strlen($variable_name))
    echo strlen($phrase);
    //4. Indexing
    echo "<br>$phrase[2]<br>";//prints a as indexing starts from 0 to n-1
     $phrase[0]="M";
     echo $phrase;
     //5.String replace function(str_replace(substring,replacestring,variable_name))
     $max="Ninty eight";
     echo "<br>".str_replace("Ninty","Sixty",$max);
     //6.Substring(substr($variable_name,start_index,no_of_characters))
     echo substr($max,2,6);

     /*-------------Numbers------------*/
     echo 8;//printing directly
     echo 623+2342;//arithmetic operation +,-,*,/,%(mod operator)
     echo (4+5)*10;//BODMAS rule
     $num=10;
     $num++;//increment num=num+1
     $num--;//decrement num=num-1
     $num+=30;//$num=$num+30
     echo $num."<br>";

     echo abs(-30);//absolute value
     echo pow(2,4); //power function
     echo sqrt(144);//square root function
     echo max(2,10);// maximum value would be displayed o/p:10
     echo min(2,10);// minimum value would be displayed o/p:2
     echo round(3.7);//round it to int value
     echo ceil(3.3);//round to upper value o/p:4
     echo floor(3.9);//round to lower int value o/p:3
    ?>

  </body>
</html>
