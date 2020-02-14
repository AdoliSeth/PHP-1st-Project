<?php
//Conditional statements are used to perform different actions based on different conditions
//To allow your code to perform different actions based on different variables
//php has the following if conditional statements
//
//1. if statement - executes some code if one condition is true
//2. if...else statement - executes some code if a condition is true and another code if that condition is false
//3. if...elseif...else statement - executes different codes for more than two conditions
//switch statement - selects one of many blocks of code to be executed

//1. if statement - executes some code if one condition is true
//if(condition){
//    'code to execute';
//}
$age = 16;
if($age == 16){
    echo "You can code";
}
echo '<br>';
$age = 16;
if($age > 16){
    echo "You can code";
}
echo '<br>';
$age = 16;
if($age < 17){
    echo "You can code";
}
echo '<br>';

//2. if...else statement - executes some code if a condition is true and another code if that condition is false
if($age > 17){
    echo 'You are old enough to code';
}else{
    echo 'False; age is not greater than 17';
}
echo '<br>';
$_age = 17;
if ($_age < 18){
    echo 'You cannot drive . UNDER AGE';
}else{
    echo 'You can drive';
}
echo '<br>';
$db_name = 'Nike';
$user_name = 'John';
if($user_name != $db_name){
    echo '<p style="color: red">Your credentials are wrong <a href="#">Login</a></p>';
}else{
    echo '<p style="color: green">Welcome to our index page></p>';
}
    echo '<br>';

//3. if...elseif...else statement - executes different codes for more than two conditions

//if(condition){
//    code to execute if true;
//}elseif (condition2){
//    code to execute if true;
//}elseif(condition3){
//    code to execute if true;
//}else{
//    code to execute above conditions are false;
//}

$color = 'Blue';
if($color == 'Red'){
    echo '<h1>MAN U FAN</h1>';
}elseif($color == 'White'){
    echo '<h1>TOTE FAN</h1>';
}elseif($color == 'Blue'){
    echo '<h1>CHELSEA FAN</h1>';
}else{
    echo 'None of the above';
}
echo '<br>';

//switch statement - selects one of many blocks of code to be executed
//switch (n){
//    case label1:
//        code to execute if n = label1
//        break

//    case label2:
//        code to execute if n = label1
//        break

//    case label3:
//        code to execute if n = label1
//        break
//
//    default{
//            code to execute if the above conditions are false
//    }
//}

$color =  'white';
switch ($color){
    case 'blue':
        echo '<p>CHELSEA FAN</p>';
        break;

    case 'red':
        echo '<p>MAN U FAN</p>';
        break;

    case 'white':
        echo '<p>TOTE FAN</p>';
        break;

    default:
            echo 'None of the above';
        echo '<br>';
}

echo '<br>';
$grade = 'A';
switch ($grade){
    case 'A':
        echo '80 marks';
        echo '<br>';

    case 'B':
        echo '70 marks';
        echo '<br>';

    case 'C';
        echo '60 marks';
        echo '<br>';

    case 'D';
        echo '50 marks';
        echo '<br>';

    default :
        echo 'None of the above';
        echo '<br>';
}







?>