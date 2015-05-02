<?php
session_start();/*
if(isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
	$_SESSION['action'] = 'loggedIn';

}
if(!isset($_SESSION['username'])){
	$_SESSION['action'] = 'logInError';
    echo '<p> A username must be entered click<a href="login.php"> here </a> to go back to the login screen';
}
if(($_SESSION['username'] == " " || $_SESSION['username'] == null) || (!isset($_POST['username'])) && ((!isset($_SESSION['action'])) || $_SESSION != 'loggedIn')){
	$_SESSION['action'] = 'logInError';
	echo '<p> A username must be entered click<a href="login.php"> here </a> to go back to the login screen';
}
else
{
	
	
}*/
if((!isset($_SESSION['action'])) || $_SESSION['action'] != 'loggedIn'){
	$_SESSION['action'] = 'logInError';
    echo '<p> A username must be entered click<a href="login.php"> here </a> to go back to the login screen';
    
}
else {
	echo "<p>Hello ";
    echo $_SESSION['username'];
    echo " you have visited this page ";
	if(isset($_SESSION['count2']))
	{
		echo $_SESSION['count2'];
		$_SESSION['count2'] += 1;
		
	}
	else
	{
		echo "0";
		$_SESSION['count2'] = 1;
	}
	echo " times before </p><br>";
	echo '<strong> Click <a href="login.php?action=end"> here </a> to log out';
	echo '<p>Here is a link to <a href="content1.php"> content1.php </a> </p>';
}
?>