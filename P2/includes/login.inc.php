<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $password = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit(); // Add exit to stop further execution
    }

    loginUser($conn, $username, $pwd);
} else {
    header("Location: ../login.php");
    exit(); // Add exit to stop further execution
}
?>
