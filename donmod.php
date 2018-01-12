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
    // Makes it easier to read
    $email = $_SESSION['email'];
	$_POST=array_map('mysql_real_escape_string',$_POST);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$hno=$_POST['hno'];
	$strname=$_POST['strname'];
	$are=$_POST['are'];
	$district=$_POST['district'];
	$pincode=$_POST['pincode'];
	$mob=$_POST['mob'];
	$sql="update donor set fname='$fname', lname='$lname', hno='$hno',are='$are',strname='$strname',district='$district',pincode='$pincode',mob='$mob' where email='$email'";
	if(!mysql_query($sql))
	{
		die("Error:" . mysql_error());
	}
}
mysql_close();
echo "<script>window.open('afterdonorlogin.php','_self');</script>";
?>