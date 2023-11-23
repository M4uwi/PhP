<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP Project 1</title>
    <link rel="stylesheet" href="style.css">
    <title>Centered Image</title>

</head>

<body>

<nav>
    <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo '<li><a href="profile.php">Profile Page</a></li>';
                echo '<li><a href="includes/logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="signup.php">Signup</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>

<!-- Your content goes here -->

</body>
</html>
