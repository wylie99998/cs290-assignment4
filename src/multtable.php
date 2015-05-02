<?php
session_start();
if(!isset($_GET['min-multiplicand'])) 
echo "<p> ERROR: missing input must have min multiplicand </p>";
if	(!isset($_GET['max-multiplicand']))
echo "<p> ERROR: missing input must have max  multiplicand </p>";
if (!isset($_GET['max-multiplier'])) 
echo "<p> ERROR: missing input must have max multiplier </p>";
if (!isset($_GET['min-multiplier']))
echo "<p> ERROR: missing input must have min multiplier </p>";
 
if((isset($_GET['min-multiplier'])) && isset($_GET['max-multiplier']) && isset($_GET['min-multiplicand']) && isset($_GET['max-multiplicand']))
{
$_SESSION['min-multiplicand'] = intval($_GET['min-multiplicand']);
$_SESSION['max-multiplicand'] = intval($_GET['max-multiplicand']);
$_SESSION['min-multiplier'] = intval($_GET['min-multiplier']);
$_SESSION['max-multiplier'] = intval($_GET['max-multiplier']);

if($_SESSION['min-multiplicand'] > $_SESSION['max-multiplicand'])
	echo "<p> ERROR: Minimum multiplican must be less than the maximum multiplicand </p>";

if($_SESSION['min-multiplier'] > $_SESSION['max-multiplier'])
	echo "<p> ERROR: Minimum multiplier must be less than the maximum multiplier </p>";

if(!is_int($_SESSION['min-multiplicand']))
	echo "<p> ERROR: Minimum multiplicand must be an integer </p>";
if(!is_int($_SESSION['max-multiplicand']))
	echo "<p> ERROR: Maximum multiplicand must be an integer </p>";
if(!is_int($_SESSION['min-multiplier']))
	echo "<p> ERROR: Minimum multiplier must be an integer </p>";
if(!is_int($_SESSION['min-multiplier']))
	echo "<p> ERROR: Maximum multiplier must be an integer </p>";

if(is_int($_SESSION['min-multiplicand']) && is_int($_SESSION['max-multiplicand']) && is_int($_SESSION['min-multiplier']) && is_int($_SESSION['max-multiplier']))
{
	echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<title> multtable </title>
</head>
<body>
<section>
<table>';
	$_height = 2 + $_SESSION['max-multiplicand'] - $_SESSION['min-multiplicand'];
	$_width = 2 + $_SESSION['max-multiplier'] - $_SESSION['min-multiplier'];
	echo '<tr> <td> </td>';
	for($i =0; $i < $_width; $i++){
		echo '<td>';
        echo ($i + $_SESSION['min-multiplier']);
        echo '</td>';
	}
	echo '</tr>';
	for($i =0; $i < $_height; $i++){
		echo '<tr> <td>';
        echo ($i + $_SESSION['min-multiplicand']);
		echo '</td>';
		for($j =0; $j < $_width; $j++){
			echo '<td>';
            echo ($j + $_SESSION['min-multiplier']) * ($i + $_SESSION['min-multiplicand']);   
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	
}
}


?>