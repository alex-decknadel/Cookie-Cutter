<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >= 1) { ?>
<li><a href="/student/adecknadel/index.php">Home</a></li>
<li><a href="/student/adecknadel/aboutus.php">About Us</a></li>
<li><a href="/student/adecknadel/faq.php">FAQ's</a></li>
<li><a href="/student/adecknadel/rebates.php">Rebates</a></li>
<li><a href="/student/adecknadel/includes/logoff.php">Logoff</a></li>
<?php } else { ?>
<li><a href="/student/adecknadel/index.php">Home</a></li>
<li><a href="/student/adecknadel/aboutus.php">About Us</a></li>
<li><a href="/student/adecknadel/faq.php">FAQ's</a></li>
<li><a href="/student/adecknadel/join.php">Join Today!</a></li>
<li><a href="/student/adecknadel/login.php">Login</a></li>
<?php } ?>
<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >= 5) { ?>
<li><a href="/student/adecknadel/admin.php" style="color:red">Admin</a></li>
<?php } ?>