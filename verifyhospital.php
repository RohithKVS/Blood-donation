<?php
session_start();
require 'database.php';


/* User login process, checks if user exists and password is correct */

//To prevent SQL Injections
$id =mysql_escape_string($_POST['id']);

$result =mysql_query("SELECT * FROM hospital WHERE userid='$id'");

if (mysql_num_rows($result) == 0)
{
// User doesn't exist
header("Location: login.php?error=doesnothosp");
exit();
}
else 
{	// User exists
    $user =mysql_fetch_assoc($result);
	$pas=$user['pass'];
	$hashpas=password_verify($_POST['pass'],$pas);	
    if ($hashpas == 0)
	{
	
		header("Location: login.php?error=invalidpasshosp");
		exit();
    }
	
    else 
	{
        $_SESSION['userid'] = $user['userid'];
        $_SESSION['hospname'] = $user['hospname'];
		
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: afterhosplogin.php");
    }
}
?>