<?php
session_start();
?>
<?php
require 'database.php';
$_POST=array_map('mysql_real_escape_string',$_POST);
$age=$_POST['age'];
$weight=$_POST['weight'];
if($age < 18 || $age > 60)
{
	header("location:donorregistration2.php?error=noage");
	exit();
}
if($weight < 50)
{
	header("location:donorregistration2.php?error=noweig");
	exit();
}
if(empty($_POST['diabetes']))
{
	header("location:donorregistration2.php?error=nodia");
	exit();
}
if(empty($_POST['bp']))
{
	header("location:donorregistration2.php?error=nobp");
	exit();
}
$keys1=implode(", ",(array_keys($_POST)));
$values1=implode("', '",(array_values($_POST)));
$_SESSION['keys1']=$keys1;
$_SESSION['values1']=$values1;

echo "<script>window.open('donorregistration3.php','_self');</script>";
?>