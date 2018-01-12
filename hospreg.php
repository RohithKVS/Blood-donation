<?php
require 'database.php';
$_POST=array_map('mysql_real_escape_string',$_POST);
unset($_POST['confpass']);
$hospname=$_POST['hospname'];
$regno=$_POST['regno'];
unset($_POST['hospname']);
unset($_POST['regno']);
$pincode=$_POST['pincode'];
$tele=$_POST['tele'];
if (!preg_match("/^[a-zA-Z ]*$/",$hospname)) 
{
	header("location:hospregistration1.php?error=hosp");
	exit();
}
if (!preg_match('/^\d{8}$/',$tele))
{
	header("location:hospregistration1.php?error=tele");
	exit();
}
if (!preg_match('/^\d{6}$/',$pincode))
{
	header("location:hospregistration1.php?error=pin");
	exit();
}
$keys=implode(", ",(array_keys($_POST)));
$values=implode("', '",(array_values($_POST)));
$sql1="insert into hospital(hospname,regno,userid,$keys) values('$hospname','$regno','$regno','$values')";
$pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
$sql2="update hospital set pass='$pass' where regno='$regno'";

if(!mysql_query($sql1)||!mysql_query($sql2))
{
	die("Error:" . mysql_error());
}
mysql_close();
echo "<script>window.open('hospregistration2.php','_self');</script>";
?>