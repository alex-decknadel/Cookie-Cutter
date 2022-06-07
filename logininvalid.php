<?php session_start(); ?>
<!DOCTYPE html>
<!--
Title: Cookie Cutter Login Invalid Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/14/2017
Description: This document will provide users
             a form after they've failed to log into their 
             account on my Cookie Cutter website.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookie Cutter - Login</title>
    <link href="css/text.css" rel="stylesheet" type="text/css">
    <link href="css/loginpage.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <img src="images/cookielogo.gif" alt="company logo">
    </header>
    <main>
        <!--Create the main portion of the body-->
        <form action="authorize.php" method="post" id="loginform">
            <label>Username: </label>
            <input type="text" id="username" name="username" minlength="4" maxlength="20" required><br>
            <label>Password: </label>
            <input type="password" id="password" name="password" minlength="5" maxlength="32" required><br>
            <input type="submit" id="login" name="login" value="Login">
            <p id="homejoin"><a href="/student/adecknadel/index.php">Home</a> | <a href="/student/adecknadel/join.php">Join</a></p>
        </form>
        <p class="smalltext" id="incorrect">Login incorrect; please try again!</p>
        <p class="smalltext" id="reminder">remember username and password are CaSe sensitive</p>
    </main>
    <footer>
        <p>&copy;CookieCutter.com
            <?php echo date("Y");?>
        </p>
    </footer>
</body>

</html>
