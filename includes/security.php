<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >= 1) { ?>
<?php session_start(); ?>
<?php } else { ?>
<?php
unset($_SESSION);
session_destroy(); 
header('Location: /student/adecknadel/index.php');
?>
<?php } ?>