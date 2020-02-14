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
    <h1><?php
//Php comments
// Php files can contain text, HTML, CSS, Javascript and PHP code
// PHP code is executed on the server, and the result is returned to the browser as plain HTML
// PHP files have extension ".php"
echo "John Doe <br>";//phpstatement: MUST end with semi-colon
//echo:outs data
//"John Doe": data to be displayed on the browser as HTML
echo "Coding in php is awesome <br>";
echo "<h1>Coding in php is awesome </h1><br>";
print "Learning to code is dope <br>";

//Variables
//A variable starts with the $ sign, followed by the name of the variable
//A variable name must start with a letter or the underscore character
//A variable name cannot start with a number
//A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9 and _ )
//Variable names are case sensitive ($age and $AGE are two different variables)

$name = "John Doe <br>";
$Name = "John Doe <br>";
$_country = "Kenya <br>";
$age = 22;

echo $age;
echo "<br>";
echo $name;
$favCar = "BMW";
$countryoforigin = "Germany";

//Joining two sentences
echo "This is my $favCar from $countryoforigin <br>";
echo " This is my " .$favCar. " from " .$countryoforigin;

//Joining two variables
echo $favCar.$countryoforigin;

//maths
echo 34 + 23;?>
</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
?>