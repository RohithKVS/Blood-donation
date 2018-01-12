<?php
session_start();

require 'database.php';


/* User login process, checks if user exists and password is correct */

//To prevent SQL Injections
$email =mysql_escape_string($_POST['email']);

$result =mysql_query("SELECT * FROM donor WHERE email='$email'");

if (mysql_num_rows($result) == 0)
{
// User doesn't exist
header("Location: login.php?error=doesnotdonor");
exit();
}
else 
{	// User exists
    $user =mysql_fetch_assoc($result);
	$pas=$user['pass'];
	$hashpas=password_verify($_POST['pass'],$pas);	
    if ($hashpas == 0)
	{

		header("Location: login.php?error=invalidpassdonor");
		exit();
    }
	
    else 
	{
        $_SESSION['email'] = $user['email'];
        $_SESSION['fname'] = $user['fname'];
        $_SESSION['lname'] = $user['lname'];
		
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: afterdonorlogin.php");
    }
}
?>