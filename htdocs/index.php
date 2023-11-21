<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Homepage</title>

</head>

<body>
    <header>
        <h1>Welcome to My Homepage</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="login.inc.php">Login</a>
        <a href="signup.inc.php">SignUp</a>
    </nav>
    <div id="search-container">
        <div id="search-box">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-button">Search</button>
        </div>
    </div>
</body>


<section class = "index-login">
    <div class = "wrapper">
        <div class = "index-login-signup">
        <h4> SIGN UP </h4>
        <p>Dont have an account yet? Sign up here</p>
        <form action = "includes/signup.inc.php" method = "post">
            <input type = "text" name="uid"placeholder="username">
            <input type = "password" name="pwd" placeholder="password">
            <input type = "password" name="pwdrepeat" placeholder="Repeat password">
            <input type = "text" name ="email" placeholder="E-mail">
            <br>
            <button type = "submit">Sign Up</button>
        </form>
    </div>
    <div class = "index-login-logout">
        <h4>LOGIN</h4>
        <p>Already have an account? Log in here</p>
        <form action = "includes/login.inc.php" method = "post">
            <input type = "text" name="uid"placeholder="username">
            <input type = "password" name="pwd" placeholder="password">
            <br>
            <button type = "submit">LOGIN</button>
        </form>
    </div>
    </div>
  </section>

<body>
    <header>
        <h1>Welcome to My Homepage</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="login.inc.php">Login</a>
        <a href="signup.inc.php">SignUp</a>
    </nav>
    <div id="search-container">
        <div id="search-box">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-button">Search</button>
        </div>
    </div>
</body>
</html>
