<?php
session_start();
?>
<?php
require 'database.php';
$keys1=$_SESSION['keys1'];
$values1=$_SESSION['values1'];
$_POST=array_map('mysql_real_escape_string',$_POST);
unset($_POST['confpass']);
$keys2=implode(", ",(array_keys($_POST)));
$values2=implode("', '",(array_values($_POST)));
$email=$_POST['email'];
$check="select email from donor where email='$email'";
$result=mysql_query($check);
$emailcheck=mysql_num_rows($result);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mob=$_POST['mob'];
$pincode=$_POST['pincode'];
if($emailcheck > 0)
{
	header("Location:donorregistration3.php?error=user");
	exit();
}
if(empty($_POST['gender']))
{
	header("location:donorregistration3.php?error=nogen");
	exit();
}

if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
{
	header("location:donorregistration3.php?error=fname");
	exit();
}
if (!preg_match("/^[a-zA-Z ]*$/",$lname))
{
	header("location:donorregistration3.php?error=lname");
	exit();
}
if (!preg_match('/^\d{10}$/',$mob))
{
	header("location:donorregistration3.php?error=mob");
	exit();
}
if (!preg_match('/^\d{6}$/',$pincode))
{
	header("location:donorregistration3.php?error=pin");
	exit();
}
else
{
	$sql1="insert into donoreli(name,$keys1) values('$fname','$values1')";
	$sql2="insert into donor($keys2) values('$values2')";
	$pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
	$sql3="update donor set pass='$pass' where email='$email'";
	if((!mysql_query($sql1))||(!mysql_query($sql2))||(!mysql_query($sql3)))
	{
		die("Error:" . mysql_error());
	}
}
mysql_close();
echo "<script>window.open('donorregistration4.php','_self');</script>";
?>