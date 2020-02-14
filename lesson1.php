<?php
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
echo 34 + 23;




















































































?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Consequuntur hic ipsam libero, <?php echo "THAT'S DOPE";?>  necessitatibus officia quae quasi similique voluptate voluptatum! A dolorem doloremque excepturi provident sequi.
    Blanditiis dolore doloribus nam! Fugit!</p>