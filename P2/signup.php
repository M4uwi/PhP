<?php
include_once 'header.php';
?>

<section class="signup-form">

    <h2>Sign up</h2>
    <div class="sign-up-form">
        <form action="includes/signup.inc.php" method="post">

            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match up!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Choose another username!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>All set!</p>";
        }
    }
    ?>
</section>
