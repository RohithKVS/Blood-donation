<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if (!isset($_SESSION['logged_in']))
	{
		header("location:error.php");
		exit();
//create an error handler You must log in before viewing your profile page!

}

else 
{
    // Makes it easier to read
    $email = $_SESSION['email'];
require 'database.php';
$sql="select status from donor where email='$email'";
$result=mysql_query($sql);
$user=mysql_fetch_assoc($result);
	if($user['status']=='1')
	{
		$sql2="update donor set status='0' where email='$email'";
		$result=mysql_query($sql2) or die("Error:" .mysql_error());
	}
	if($user['status']=='0')
	{
		$sql2="update donor set status='1' where email='$email'";
		$result=mysql_query($sql2) or die("Error:" .mysql_error());
	}
	header("location: status.php");
}
?>