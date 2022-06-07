<!DOCTYPE html>
<!--
Title: Cookie Cutter Rebate Page
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/25/2017
Description: This document will act as a landing page when 
             someone tries to use a name already taken.
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
            <div class="titles">Welcome to Cookie Cutter.com</div>
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
            <p id="pagetitle">This username is already taken. Please try another username.</p>
        </div>
    </main>
    <footer class="smalltext">
        <?php echo date("m/d/Y"); ?>
    </footer>

</body>

</html>