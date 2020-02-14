John doe <br>
<?php
//A function is a block of statements that can be used repeatedly in a program
//A function will not execute automatically when a page loads
//A function will be executed by a call to the function

//function creation/declaration
function greetings1(){
    echo "Hello world, I am a PHP developer <br>";
}
//a function with parameters
function greetings2($name){
    echo "Hello world, my name is $name and I am a PHP developer<br>";
}

//function with more than one parameter
function greetings3($name, $country, $age){
    echo "Hello world, my name is $name <br> and I am a php developer, from $country <br>
            I am $age years old <br>";
}

//functions with default arguments
function greetings4($county = 'Kiambu'){
    echo "$county <br>";
}

//calling/using the function
greetings1();
greetings1();
greetings1();
greetings1();
greetings1();

greetings2('JohnDoe');

greetings3('JohnDoe', 'Kenya', '2');

greetings4();//without default argument
greetings4('Mombasa');//without default arguments

//functions that return a value: use return statement
function greetings5(){
    return "I ma a GEEK ONJI";
}

//calling a function that returns a value
//create a variable that will store the returned value
$jocker = greetings5();
echo $jocker. "<br>";

function calculateDeni($geek1,$geek2,$geek_default=300){
    $sum = $geek1 + $geek2 + $geek_default;
    return $sum;
}
$amount1 = calculateDeni('100', '200');
$amount2 = calculateDeni('100', '200', '500');
echo "TOTAL: $amount1 <br>";
$totalAmount = $amount1 + $amount2;
echo $totalAmount. "<br>";

//A function that takes an array as an argument
function loopArray($name_of_array){
    foreach ($name_of_array as $item){
        echo '$item <br>';
    }
}

$hobby = array ('Reading','Listening to music','Watching movies', 'talking');
loopArray($hobby);

function loopArray2($name_of_array, $myforeach=true){
    if ($myforeach){
        //if foreach
        echo "FOR EACH LOOP EXECUTING <br>";
        foreach ($name_of_array as $item){
            echo "$item <br>";
        }
    }else{
        echo "FOR LOOP EXECUTING <br>";
        for($x = 0 ; $x < count ($name_of_array); $x++){
            echo "$name_of_array[$x] <br>";
        }
    }



}

//loopArray2($hobby);
$hobby = array ('Reading','Listening to music','Watching movies', 'talking');
loopArray2($hobby);

function areaCircle($radius, $cm = true){
    $area = 3.142 * $radius * $radius;
    if ($cm){
//        if unit of measurement is cm
        echo "The area in centimeter is $area cm sqaure <br>";
    }else{
//        if unit of measurement is cm
        echo "The area in meters is $area m sqaure <br>";
    }
}
areaCircle(7);//in cm
areaCircle(7, $cm=false);//in m


?>