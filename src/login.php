<?php
  session_start(); 
error_reporting(E_ALL);
ini_set('display_errors',1);
//header('Content_Type: text/plain');
//<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); >

if(isset($_GET['action']) && $_GET['action'] == 'end'){
	$_SESSION['username'] = null;
    $_SESSION['action'] = null;
	if(isset($_SESSION['count']))
	$_SESSION['count'] = 0;
    if(isset($_SESSION['count2']))
	$_SESSION['count2'] = 0;
	$_SESSION = array();
	session_destroy();
	//log out sequence  TODO
	echo 'You have been logged out.  Click <a href="login.php"> here </a> to return to login page';
}

if(session_status() == PHP_SESSION_ACTIVE){
	//echo "<strong> hello </strong>";
    if(isset($_SESSION['action']) && $_SESSION['action'] == 'logInError'){
		$_POST['username'] = null;
		$_SESSION['username'] = null;
        $_SESSION['action'] = null;	
	}
	if(isset($_SESSION['username'])){
	//echo "$_POST[name]";
	if(isset($_SESSION['action']) && $_SESSION['action'] == null)
		echo "<strong> new user, enter your name in the field above </strong>";
	
	}
    else{
		echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<title> Log in </title>
</head>
<body>
<section>
<form action=content1.php  method="post">
   User Name: <input type="text" name="username">
   <input type="submit" value="Log In">
   </section>
   </body>
   </html>';
		echo "<strong> Hello new user, enter your name in the field above </strong>";
	}
}

?>