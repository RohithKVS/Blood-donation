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
    $oldpass = $_POST['oldpass'];
	$email=$_SESSION['email'];
	$sql="select * from donor where email='$email'";
	$result=mysql_query($sql);
	$user=mysql_fetch_assoc($result);
	$hashpas=password_verify($oldpass,$user['pass']);
	if($hashpas==0)
	{
		header("location:changepassdon.php?error=invalid");
		exit();
	}
	else
	{
		$newpass=$_POST['newpass'];
		$newhashpass=password_hash($newpass, PASSWORD_DEFAULT);
		$sql1="update donor set pass='$newhashpass' where email='$email'";
		$result1=mysql_query($sql1) or die("Error:" .mysql_error());
		header("Location:success.php");
	}
}

?>