<?php session_start(); ?>

<!DOCTYPE html>
<!--
Title: Cookie Cutter Home Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/14/2017
Description: This document will act as the home page 
             for my version of the Cookie Cutter website.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookie Cutter Corps - Home Page</title>
    <link href="css/text.css" rel="stylesheet" type="text/css">
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
            <p id="pagetitle"><a href="/student/adecknadel/join.php">Become a member</a> today for web only special offers and insider news.</p>
        </div>
        <div class="largetext">
            <p>Featured Cookie Cutter of the Week</p>
            <img src="images/weeklyspec.jpg" alt="featured cutter">
            <p>Impress your friends with this cool mouse-faced cookie cutter! Join today for more awesome cookie cutter designs!</p>
        </div>
    </main>
    <footer class="smalltext">
        <?php echo date("m/d/Y"); ?>
    </footer>

</body>

</html>
