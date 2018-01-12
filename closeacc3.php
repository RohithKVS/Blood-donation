<?php
/* Displays user information and some useful messages */
session_start();
require 'database.php';
// Check if user is logged in using the session variable
if (!isset($_SESSION['logged_in']))
	{
		header("location:error.php");
		exit();
//create an error handler You must log in before viewing your profile page!

}
else
{
	$email = $_SESSION['email'];
	$sql1="select id from donor where email='$email'";
	$result1=mysql_query($sql1);
	$user=mysql_fetch_assoc($result1);
	$id=$user['id'];
	$sql2="delete from donor where email='$email'";
	$sql3="delete from donoreli where id='$id'";
	$result2=mysql_query($sql2);
	$result3=mysql_query($sql3);
	if((!$result2)||(!result3))
	{
		die("Error:".mysql_error());
	}
	else
	{
		header("location:donordel.php");
	}
}
?>