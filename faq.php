<?php session_start(); ?>
<!DOCTYPE html>
<!--
Title: Cookie Cutter FAQ Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/14/2017
Description: This document will act as the FAQ page
             for my Cookie Cutter website.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookie Cutter Corps - Home Page</title>
    <link href="css/text.css" rel="stylesheet" type="text/css">
    <link href="css/text2.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <img src="images/cookielogo.gif" alt="company logo">
        <div class="first">
            <div class="titles">Welcome
                <span style="color:#F00"><?php if (isset($_SESSION['username'])) {print $_SESSION['username']; } ?></span> to Cookie Cutter.com</div>
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
        <div class="largetext">
            <p id="pagetitle">FAQ's</p>
        </div>
        <div class="questions">
            <p>Q. Why is this site even in existance?</p>
            <p class="answer">A. Because cookies are so darn good to eat!</p>
            <p>Q. I like cookies, does that mean I would like cookie cutters?</p>
            <p class="answer">A. Certainly! Cookies are great, so that means cookie cutters are even better!</p>
        </div>
    </main>
    <footer class="smalltext">
        <?php echo date("m/d/Y"); ?>
    </footer>

</body>

</html>
