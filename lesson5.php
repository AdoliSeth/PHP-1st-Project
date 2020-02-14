<?php
//Loops are used to execute the same block of code again and again as long as a certain condition is true
//1. while - loops through a code as long as the specified condition is true
//while(condition){//if true it loops
//    code to execute
//}
$x = 0;//initializes the starting pint of the loop
while($x < 10){//condition being tested
    echo $x. 'Hello world <br>';
    $x++;//increment value/operation
}

$x = 0;
while ($x <= 20){
    if($x == 10){
        echo $x."The middle of the range <br>";
    }else{
        echo $x. "Hello world <br>";
    }
    $x++;
}
//printing out numbers divisible by 3 using modulus
$x = 0;
while ($x <= 50){
    if($x % 3 == 0){
        echo $x. "Divisible by 3 <br>";
    }
    $x++;
}

//printing out numbers divisible by 2 using modulus
$x = 0;
while ($x <= 30){
        echo $x. "Divisible by 2 <br>";
    $x+=2;
    }



//2. do...while - loops through a block of code once,  and then repeats the loop as long as the specified
////condition is true
//do{
//    code to execute
//}while(condition)
$y = 0;
do{//echo 1st then check condition
    echo $y .'<br>';
    $y++;
}while($y <= 5);//check condition later

//3. for - loops through a block of code a specified number of times
//for(initial counter; test counter; increment counter){
//    code to execute if condition is true
//}
for ($x = 0; $x < 100; $x++){
    echo $x. '<br>';
}

//Assignment


for ($x = 0; $x < 100; $x++){
    if ($x % 3 == 0 and $x % 5 == 0){
        echo $x. 'FIZZBUZZ<br>';
    }elseif ($x % 3 == 0){
        echo $x. 'FIZZ <br>';
    }elseif ($x % 5 == 0){
        echo $x. 'BUZZ <br>';
    }else{
        echo $x.'<br>';
    }
}



//foreach - ;loops through a block of code for each element in an array
?>