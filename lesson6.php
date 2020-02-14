<?php
//An array is a special variable, which can hold one value at a time.
//to create an array, use the array() function
//php has 3 types of arrays
//1. indexed array
//2. Associative array
//3. Multidimensional array

//1. indexed array
//creating an array
$shopping_list = array("Soap", "Sugar", "Mkate", "Maize flour", "Rice", "Omo", "Milk");

//Accessing array values: use index numbers
echo $shopping_list[4]. '<br>';
$get_rice = $shopping_list[4];
echo $get_rice. '<br>';
echo "Today I will eat $shopping_list[4] and $shopping_list[6] <br>";
echo 'Today I will eat $shopping_list[4] and $shopping_list[6] <br>';
echo 'Today I will eat'. $shopping_list[4] . ' and ' .$shopping_list[6]. '<br>';
//counting the number of times in an indexed array: use count() function
$num_items = count($shopping_list)-1;
echo $num_items. '<br>';
//looping through an indexed array
//for loop

for ($i = 0; $i <= $num_items; $i++){
    echo "$i $shopping_list[$i] <br>";
}

//foreach loop: syntax
//foreach ($nameofarray as $variable_to_hold_item_per_loop){
//    echo $variable_to_hold_item_per_loop;
//}
foreach ($shopping_list as $item){
    echo "$item <br>";
}

//Associative array
$shopping_list2 = array("Soap"=>"500g", "Sugar"=>"1kg", "Mkate"=>"800g", "Maize flour"=>"5kg", "Rice"=>"1kg", "Omo"=>"2kg", "Milk"=>"1ltr");
//Accessing items in an associative array
$seth = $shopping_list2['Maize flour'];
echo $seth. '<br>';

//looping through associative array
foreach ($shopping_list2 as $my_key => $my_value){
    echo "KEY: $my_key => VALUE: $my_value <br>";
}

$users = array(
    "1" => array("JohnDoe","Johndoe@gmail.com","pass4321"),
    "2" => array("MaryDoe","Marydoe@gmail.com","pass1234word"),
    "3" => array("Mike Graham","mike@gmail.com","pass4321"),
    "4" => array("Jane Doe","jane@gmail.com","pass4321"),
    "5" => array("Paul","paul@gmail.com","pa4321"),
);
foreach ($users as $my_key => $my_value){
    foreach ($my_value as $value){
        echo "ID NO $my_key is $value <br>";
    }
}

?>
