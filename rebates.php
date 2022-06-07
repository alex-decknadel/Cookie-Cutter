<?php include("includes/security.php"); ?>

<!DOCTYPE html>
<!--
Title: Cookie Cutter Rebate Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/25/2017
Description: This document will act as the rebate page
             for members on my Cookie Cutter website.
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
            <p id="pagetitle">More Cookie Cutters just for you... in the future.</p>
        </div>
    </main>
    <footer class="smalltext">
        <?php echo date("m/d/Y"); ?>
    </footer>

</body>

</html>