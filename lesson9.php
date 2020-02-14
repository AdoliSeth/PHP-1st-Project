<?php
//input: username, firstname, lastname, email, password, confirm_password
//algorithm: step by step solution to a problem
//1. define empty variables to store incoming data
$username = $firstname = $lastname = $email = $password1 = $password2 = '';
//2. define empty variables to store errors
$username_err = $firstname_err = $lastname_err = $email_err = $password1_err = $password2_err = '';
//3. check request method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //3.1 grab data using the $POST superglobal
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
    $

    echo $username, $firstname, $lastname, $email, $password1, $password2;
    if(empty($username)){
        //check if empty
        $username_err = "Please fill in username";
    }else{
        //if not empty clean data
        $username = mwoshomwosho($username);
    }

    if(empty($firstname)){
        //check if empty
        $firstname_err = "Please fill in firstname";
    }else{
        //if not empty clean data
        $firstname = mwoshomwosho($firstname);
    }

    if(empty($lastname)){
        //check if empty
        $lastname_err = "Please fill in lastname";
    }else{
        //if not empty clean data
        $lastname = mwoshomwosho($lastname);
    }

    if(empty($email)){
        //check if empty
        $email_err = "Please fill in email";
    }else{
        //if not empty clean data
        $email = mwoshomwosho($email);
    }

    if(empty($password1)){
        //check if empty
        $password1_err = "Please fill in password";
    }

    if(empty($password2)){
        //check if empty
        $password2_err = "Please fill in confirm password";
    }

    //check if passwords matched
    if ($password1 != $password2){
        $password1_err = "Passwords did not match";
    }else{
        //check the number of characters
        if(strlen($password1)<8){
            $password1_err = "Password is less than 8 characters";
        }
    }
}
//4. echo received data

function mwoshomwosho($data){
    //remove white spaces
    $data = trim($data);
    //remove slashes
    $data = stripcslashes($data);
    //remove special characters
    $data = htmlspecialchars($data);
    //return a clean data
    return $data;

}

?>
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'])?>>" method="post">
    <fieldset>
        <label for="">Username</label><span style="color: red">*</span>
        <span style="color: orangered"><?php echo $username_err ?></span><br>
        <input type="text" name="username" placeholder="Enter username"><br>

        <label for="">Firstname</label><span style="color: red">*</span>
        <span style="color: orangered"><?php echo $firstname_err ?></span><br>
        <input type="text" name="firstname" placeholder="Enter firstname"><br>

        <label for="">Lastname</label><span style="color: red">*</span>
        <span style="color: orangered"><?php echo $lastname_err ?></span><br>
        <input type="text" name="lastname" placeholder="Enter lastname"><br>

        <label for="">Email</label><span style="color: red">*</span>
        <span style="color: orangered"><?php echo $email_err ?></span><br>
        <input type="email" name="email" placeholder="Enter email"><br>

        <label for="">Password</label><span style="color: red">*</span>
        <span style="color: orangered"><?php echo $password1_err ?></span><br>
        <input type="password" name="pass1" placeholder="Enter password"><br>

        <label for="">Confirm password</label><span style="color: red">*</span>
        <span style="color: orangered"><?php echo $password2_err ?></span><br>
        <input type="password" name="pass2" placeholder="Confirm password"><br>

        <button type="submit" name="signup-btn">Sign up</button>
    </fieldset>
</form>
