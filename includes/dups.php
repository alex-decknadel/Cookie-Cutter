<?php
session_start();
ini_set('display_errors', 1);
$authorized = false; //initialize authorized variable to false

$_SESSION['username'] = $_POST['username'];

$_SESSION['Password'] = $_POST['password']; //remember that variables in PHP are case sensitive

$_SESSION['EMail'] = $_POST['email']; //Be sure your POST'ed data has the appropriate names

$_SESSION['News'] = $_POST['newsletter'];

if ($_SESSION['News'] == "0")
{
$_SESSION['News'] = "Yes";
}
else
{
$_SESSION['News'] = "No";
}

require ('dbconnection.php');

$sql = 'SELECT * from Login';

$rs = $conn->Execute($sql);

while (!$rs->EOF) {
if ($rs->Fields['UserName']->Value==$_SESSION['username']) {
$authorized = true;
}
$rs->MoveNext();
}

if (!$authorized) {
header('Location: confirmed.php');
exit();
} else {
header('Location: /student/adecknadel/usertaken.php'); 
exit();
}
?>