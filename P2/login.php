<?php
    include_once 'header.php'
?>

    <section class = "signup-form">
      
    <h2>Log in</h2>
    <div class = "sign-up-form">
    <form action="includes/login.inc.php" method="post">
    
    <input type = "text" name="uid" placeholder="Username/Email...">
    <input type = "text" name="pwd" placeholder="Password...">
    <button type ="submit" name="submit">Log in</button>

    </form>
    </div>
    
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>incorrect info try again!</p>";
       }
    }
    ?>

</section>





   