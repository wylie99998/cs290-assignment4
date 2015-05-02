<?php
session_start();
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<title> Log in </title>
</head>
<body>
<section>';
//echo 'hello world';
if(isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
	$_SESSION['action'] = 'loggedIn';

}
if(!(isset($_SESSION['username'])) || $_SESSION['action'] != 'loggedIn'){
	$_SESSION['action'] = 'logInError';
	echo '<p> A username must be entered click<a href="login.php"> here </a> to go back to the login screen';
}
else if(($_SESSION['username'] == " " || $_SESSION['username'] == null)) {
	$_SESSION['action'] = 'logInError';
	echo '<p> A username must be entered click<a href="login.php"> here </a> to go back to the login screen';
}
else
{
	echo "<p>Hello ";
    echo $_SESSION['username'];
    echo " you have visited this page ";
	if(isset($_SESSION['count']))
	{
		echo $_SESSION['count'];
		$_SESSION['count'] += 1;
		
	}
	else
	{
		echo "0";
		$_SESSION['count'] = 1;
	}
	echo " times before </p><br>";
	echo '<strong> Click <a href="login.php?action=end"> here </a> to log out';
	echo '<p>Here is a link to <a href="content2.php"> content2.php </a> </p>';
}
?>