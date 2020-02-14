<?php //
////Php operators:used to perform operation on variables and values
//1. Arithmetic ops
//used with numerical values
//1. + Addition
echo 3 + 3;
echo "<br>";
$sum = 4 + 3;
echo "The sum of 4 + 3 is ".$sum;
echo "<br>";
echo $sum;
echo "<br>";

//2. - Minus
echo 3 - 3;
echo "<br>";
$sub = 4 - 3;
echo "The sub of 4 - 3 is " .$sub;
echo "<br>";
echo $sub;
echo "<br>";

//3. * Mult
echo 3 * 3;
echo "<br>";
$mult = 4 * 3;
echo "The sub of 4 * 3 is " .$mult;
echo "<br>";
echo $mult;
echo "<br>";

//4. / Div
echo 3 / 3;
echo "<br>";
$div = 4 / 3;
echo "The sub of 4 / 3 is " .$div;
echo "<br>";
echo $div;
echo "<br>";

//5. % modulus
echo 3 % 3;
echo "<br>";
$mod = 4 % 3;
echo "The sub of 4 % 3 is " .$mod;
echo "<br>";
echo $mod;
echo "<br>";

//6. ** Exponential
echo 3 ** 3;
echo "<br>";
$expo = 4 ** 3;
echo "The sub of 4 ** 3 is " .$expo;
echo "<br>";
echo $expo;
echo "<br>";
//2. Assignment
//used to write values to variables
//=;
echo '<br>';
$gender = 'Male';
//+= : addition assignment
$a=100;
$b=200;
$a = $a + $b;
echo $a;
echo "<br>";
$a=100;
$b=200;
//$a = $a + $b;
$a += $b;
echo $a;
echo "<br>";
//-= : subtraction assignment
//*= : multiplication assignment
///= : division assignment
//%= : modulus assignment
//**= : exponential assignment

////3. Comparison
//used to compare two values
//COMPARISON OPS RETURN A BOOLEAN DATA TYPE ONLY
//comparison in Php is written as double assignment
//1. ==equals: Returns true if two values are equal
echo '<br>';
$x = 10;
$y = 10;
$check = $x == $y; //Returns true
 var_dump($check);
 echo '<br>';
 $db_username = 'Johndoe';
 $db_password = '1234pass';
// Data from user
$username = 'Johndoe';
$password = '1234pass';
//check if data from user matches data from database:user = ops
$authenticate = $username == $db_username; //returns true
var_dump($authenticate);
echo '<br>';
//change user username
$username = 'Kevindoe';
$authenticate = $username == $db_username; //returns false
var_dump($authenticate);
echo '<br>';
//2.===:identical:returns if two values/variables are equal and they are of the same data type
$check = $username === 'Johndoe';
var_dump($check);
echo '<br>';
$check = 21 === '21';
var_dump($check);
echo '<br>';
//3.!= not equal to: returns true if one variable is not equal to another variable
$email = 'example@example.com';
$check = $email != 'johndoe@gmail.com';
var_dump($check);
echo '<br>';
//4.!==: not identical: returns true if one variable is not equal to another variable, or they are not of the same data type
$name = 'Kevin Doe'; //String
$age = 21; //Integer
$check = $name !== $age;
var_dump($check);
echo '<br>';
$check = 21 !== '21';
var_dump($check);
echo '<br>';
//5. >greater than: returns true if a variable value is greater than the other
$check = 3 > 2;
var_dump($check); //returns true
echo '<br>';
$check = '3' > 2;
var_dump($check);
echo '<br>';
//6. < less than: returns true if a variable value is less than the other
$check = 'seth' < 'emma';
var_dump($check); //returns true
echo '<br>';
//4. Logical
//The PHP logical operators are used to combine conditional statements.
//1. and : returns true if both conditions are true
echo '<br>';
$check = 100 == 100 and 200 ==200;
var_dump($check);
echo '<br>';
$age = 18;
$country = 'Kenya';
$check = $age == '18' and $country == 'Kenya';
var_dump($check);
echo '<br>';
$check = $age >= 17 and $country == 'Kenya';
var_dump($check);
echo '<br>';

//2.or : return true if either one of the condition is true
$check = $age == 17 or $country != 'Kenya';
var_dump($check);
echo '<br>';
$check = $age == 17 or $country == 'Kenya';
var_dump($check);
echo '<br>';
$check = $country == 'Kenya' or $age == 17;
var_dump($check);
echo '<br>';
?>