<?php
session_start();
?>
<?php
require 'database.php';

    // Make sure the two passwords match
    if ( $_POST['newpass'] == $_POST['confpass'] ) 
	{ 
        // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        $email = mysql_escape_string($_POST['email']);
        $token = mysql_escape_string($_POST['token']);
		$pass= mysql_escape_string($_POST['newpass']);
        $hashpswd=password_hash($pass, PASSWORD_DEFAULT);
	
        $sql = "UPDATE donor SET pass='$hashpswd',token=' ' WHERE email='$email'";

        if (mysql_query($sql)) 
		{
        header("location:success.php");   
        }
		else{
		        echo "<h3>Query invalid</h3>";  	
		}
    }
	
    else 
	{
		echo "<h3>Passwords do not match</h3>";
    }
?>