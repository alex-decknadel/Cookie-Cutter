<?php session_start(); ?>
<!DOCTYPE html>
<!--
Title: Cookie Cutter About Us Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/14/2017
Description: This document will act as the about page
             for my Cookie Cutter website.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookie Cutter Corps - About Us</title>
    <link href="css/text.css" rel="stylesheet" type="text/css">
    <link href="css/text2.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!--Create the header for the webpage-->
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

    <!--Create the Site Menu for the webpage-->
    <nav>
        <ul class="submenu">
            <li>Site Menu:</li>
            <?php include("includes/menu.php"); ?>
        </ul>
    </nav>

    <!--Create the header for the webpage-->
    <main>
        <div class="largetext">
            <p id="pagetitle">About Us</p>
        </div>
        <div>
            <p class="about">We are dedicated to cookie cutters! That's all you need to know!</p>
        </div>
    </main>
    <footer class="smalltext">
        <?php
            echo date("m/d/Y");
        ?>
    </footer>

</body>

</html>
