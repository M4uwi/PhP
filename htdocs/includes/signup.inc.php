<?php

        //grabbing the data
if(isset($_POST["submit"]))
{

    $uid = $_POST["uid"];
    $uid = $_POST["pwd"];   
    $uid = $_POST["pwdRepeat"];
    $uid = $_POST["email"];

        //instantiate signupcontr class
    
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new signupcontr($uid, $pwd, $pwdRepeat, $email);
    
        //running error handlers and user signup
        $signup->signupUser();

        //going back to front page
        header("Location: ../index.");
}
