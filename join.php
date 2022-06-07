<?php session_destroy(); ?>
<!DOCTYPE html>
<!--
Title: Cookie Cutter Join Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/14/2017
Description: This document will provide users
             a form to subscribe to my Cookie Cutter
             website.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookie Cutter Corps - Home Page</title>
    <link href="css/text.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/joinpage.css" rel="stylesheet" type="text/css">
    <script src="js/validation.js"></script>
</head>

<body>
    <header>
        <img src="images/cookielogo.gif" alt="company logo">
        <div class="first">
            <div class="titles">Welcome to Cookie Cutter.com</div>
            <div class="text">
                "Cookie Cutter.com is dedicated to our customers' unique cookie cutting needs."
            </div>
        </div>
    </header>

    <nav>
        <ul class="submenu">
            <li>Site Menu:</li>
            <?php include("includes/menu.php"); ?>
        </ul>
    </nav>

    <main>
        <div class="jointoday">
            <p id="joinmessage">Sign up today for member-only offers!</p>
        </div>
        <form action="includes/dups.php" method="post" id="joinform" onSubmit="return validator(this)">
            <label>Username</label>
            <input type="text" id="username" name="username"><br>
            <label>Password</label>
            <input type="password" id="password" name="password"><br>
            <label>Confirm Password</label>
            <input type="password" id="confirm" name="confirm"><br>
            <label>Email Address</label>
            <input type="text" id="email" name="email"><br>
            <input type="checkbox" id="newsletter" name="newsletter">
            <label id="checkboxlabel">Yes, I would like to be<br>
            informed of site updates<br>
            via an occasional newsletter.
            </label><br>
            <input type="submit" id="submit" name="submit" value="Submit">
        </form>
    </main>
    <footer class="smalltext">
        <?php echo date("m/d/Y"); ?>
    </footer>
</body>

</html>
