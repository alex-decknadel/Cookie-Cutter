<?php
ob_start();
session_start(); //needed to create sessions
ini_set('display_errors', 1); //turn on errors, use for debugging.

$username = $_POST['username'];
$password = $_POST['password'];
$authorized = false;

require ('includes/dbconnection.php');

$sql = 'SELECT * from Login';

$rs = $conn->Execute($sql);

//Using a While looping structure to check each record in the database

while (!$rs->EOF) {
if ($rs->Fields["UserName"]->Value=="$username" && $rs->Fields["Password"]->Value=="$password") {
$_SESSION['auth'] = $rs->Fields['Auth']->Value;
$_SESSION['username'] = $rs->Fields['UserName']->Value;
$authorized = true;
} 
$rs->MoveNext();
}
# close the connection
$rs->Close();
$conn->Close();

$rs = null;
$conn = null;

if (!$authorized) {
header('Location: logininvalid.php');
exit();
} else {
header('Location: index.php');
exit();
}
?>