<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
//  Php Data types
//  Variables store different data types and theses data tyes do different things
//  Php has the following data types
//  1. String
//  These are sequrnce of characters in double or single quotes
  echo "Hello world";
  echo 'Hello world';
  echo '<br>';
//  String functions
//  function; code that does repetitive tasks
//  counting characters; use strlen() function
  echo strlen( 'Hello world');
  $letters_in_my_name = strlen("John Graham Doe");
  echo $letters_in_my_name;
  strlen($letters_in_my_name);
  echo '<br>';
//  counting words in a string: use str_word_count() function
  echo str_word_count( 'Coding in php is awesome');
  echo '<br>';
  $words_in_my_name = str_word_count('John Doe Graham');
  echo $words_in_my_name;
  str_word_count($words_in_my_name);
  echo '<br>';
//Reversing a string :use strrev() function
  echo strrev( 'Kobe Bryant');
  echo '<br>';
  $name = "Kobe Bryant";
  echo strrev($name);
  echo '<br>';
//  Searching a text within a string: use strpos() function
  echo strpos("I am Kenyan", "Kenyan");
  echo "<br>";
//  Replace a text in a string : use str_replace()
  echo str_replace('Kenyan', 'Ugandan', 'I am Kenyan');
  echo "<br>";
//  2. Integers
//  Non decimal numbers
  $numbers_of_cows = 18;
  echo $numbers_of_cows;
  echo "<br>";
  var_dump($numbers_of_cows);
  echo "<br>";
  var_dump($name);//checks a datatypes of a variable
  echo "<br>";
  echo is_int($numbers_of_cows);
  echo "<br>";
  echo is_int($name);
  echo "<br>";
  echo is_long($numbers_of_cows);
  echo "<br>";

//  3. Float
//  Numbers with decimal points
  $height = 3.5;
  echo $height;
  echo "<br>";
  echo is_float($height);
  echo "<br>";
  echo is_double($height);
  echo "<br>";
  var_dump(is_float($height));
  echo "<br>";

//  casting/transforming/changing float to an integer
  $volume_float = 709.523;
  $volume_integer = (int)$volume_float;
  echo $volume_integer;
  echo "<br>";
  //  casting/transforming/changing float to an integer
  $age_string = "23";
  $age_integer = (int)$age_string;
  echo $age_integer;
  echo "<br>";
//  4. Boolean
  $is_tall = true;
  $is_lightskin = false;
  echo $is_lightskin;
  echo "<br>";

  function hello(){
      echo "Hello world";
  }
  hello();


//  5. Array
//  6. Object
//  7. Null









  $name = "Jane";
  echo $name

  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>