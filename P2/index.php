<?php
    include_once 'header.php';

       // Define the path to the images folder
$imageFolder = 'images/';

// Specify the image filename
$imageFilename = 'TO (28).jpg';

// Construct the complete path to the image
$imagePath = $imageFolder . $imageFilename;
?>

<!-- Display the image -->
<img src="<?php echo $imagePath; ?>" alt="Example Image">

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</nav>

<div class="wrapper">

    <section class="index-intro">
        <h1>This is my Work</h1>
        <p>This is work done for ENE 212-0062/2022</p>
    </section>

    <section class="index-categories">
        <h2>Categories</h2>
        <div class="index-categories-list">
            <div>
                <h3>Link-1</h3>
            </div>

            <div>
                <h3>Link-2</h3>
            </div>

            <div>
                <h3>Link-3</h3>
            </div>
        </div>
    </section>

</div>

</body>
</html>
