<?php
//SUPERGLOBALS
//Some predefined variables in PHP are "superglobals", which means that they are always accessible
//regardless of scope - and youcan access them from any function, class or file without
//having to do anything special
//The PHP superglobal variables are:
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

//1. $_SERVER
//Has informtion for paths, headers
//$_SERVER['Element']
//Find location of php file
echo $_SERVER['PHP_SELF']. '<br>';
//finding host name
echo $_SERVER['SERVER_NAME']. '<br>';
echo $_SERVER['HTTP_HOST']. '<br>';
//request method
echo $_SERVER['REQUEST_METHOD']. '<br>';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $name = $_REQUEST['jina'];
    $email = $_REQUEST['arafa'];
    echo "NAME IS $name and EMAIL is $email <br>";
}

//Collecting data using the $_POST[]
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['jina'];
    $email = $_POST['email'];
    echo 'USING THE $_POST[]'. '<br>';
    echo "NAME IS $name and EMAIL is $email <br>";
}

?>
<h1>Collecting data using the $_REQUEST</h1>
<form action="lesson8.php" method="post">
    <input type="text" name="jina" placeholder="Enter name...">
    <input type="email" name="arafa" placeholder="Enter email...">
    <input type="submit" value="Send data">
</form>
<h1>Collecting data using the $_POST</h1>
<!--we use $_POST to collect data from a form using the post method-->
<!--$_GET: used to collect data sent via the URL-->
<?php
//Receive data usig $_GET[]
$the_name = $_GET['name'];
$the_age = $_GET['age'];
echo "$the_name <br>";
echo "$the_age <br>";
?>
<a href="lesson8.php?name=Antony&age=23">Send</a>

