<?php include("includes/adminsecurity.php"); ?>

<!DOCTYPE html>
<!--
Title: Cookie Cutter Home Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 06/03/2017
Description: This document will act as the administration
             page for the administrator to manage the site.
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
            <p id="pagetitle">Coming soon!</p>
        </div>
    </main>
    <footer class="smalltext">
        <?php echo date("m/d/Y"); ?>
    </footer>

</body>

</html>
