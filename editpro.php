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
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
	$sql="select * from donor where email='$email'";
	$result=mysql_query($sql);
	$user=mysql_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="dist/images/blooddrop.ico">

    <title>Welcome <?= $fname.' '.$lname ?></title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="dist/css/dashboard.css" rel="stylesheet">
    <link href="dist/css/buttons.css" rel="stylesheet">
  </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ONLINE BLOOD DONATION</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		    <li><a href="viewpro.php">View Profile</a></li>
            <li class="active"><a href="editpro.php">Edit Profile</a></li>
            <li><a href="changepassdon.php">Change Password</a></li>
            <li><a href="status.php">Change Status</a></li>
            <li><a href="closeacc.php">Close Account</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
	    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="viewpro.php">View Profile</a></li>
            <li class="active"><a href="editpro.php">Edit Profile</a></li>
            <li><a href="changepassdon.php">Change Password</a></li>
            <li><a href="status.php">Change Status</a></li>
            <li><a href="closeacc.php">Close Account</a></li>
          </ul>
        </div>
		        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" align="center">Modify Profile</h1>
          <div class="row placeholders">
<center>
<p>The following fields can be modified. You cannot change your email id</p>
<form name="donreg2" method="post" autocomplete="off" onsubmit="return Validate()"action="donmod.php">
<table id="form" border="1" style="border:2px solid;height:400px;border-collapse:collapse">
<tr>
<td>1.First Name:</td>
<td style="width:380px"><input type="text"size="25" maxlength="25"name="fname" value="<?=$user['fname'];?>"><div id="fname_required" class="required"></div></td>
</tr>
<tr>
<td>2.Last Name(Surname):</td>
<td><input type="text"size="25" maxlength="25"name="lname" value="<?=$user['lname'];?>"><div id="lname_required" class="required"></div></td>
</tr>
<tr>
<td>3.Address:</td>
<td>
	<table border="0" style="font-family:Arial;font-size:15px;height:200px">
	<tr><td>House No.</td><td><input type="text"size="20" maxlength="20"name="hno" value="<?=$user['hno'];?>"><div id="hno_required" class="required"></div></td></tr>
	<tr><td>Street Name</td><td><input type="text"size="25" maxlength="25"name="strname" value="<?=$user['strname'];?>"><div id="strname_required" class="required"></div></td></tr>
	<tr><td>Area/Locality</td><td><input type="text"size="25" maxlength="25"name="are" value="<?=$user['are'];?>"><div id="are_required" class="required"></div></td></tr>
	<tr><td>District</td><td>
	    <select name="district">
			<option value="<?=$user['district'];?>" selected><?=$user['district'];?></option>
			<option value="Select">Select</option>
			<option value="Adilabad">ADILABAD</option>
			<option value="Anantapur">ANANTAPUR</option>
			<option value="Chittoor">CHITTOOR</option>
			<option value="Kadapa">KADAPA</option>
			<option value="East Godavari">EAST GODAVARI</option>
			<option value="Guntur">GUNTUR</option>
			<option value="Hyderabad">HYDERABAD</option>
			<option value="Karimnagar">KARIMNAGAR</option>
			<option value="Khammam">KHAMMAM</option>
			<option value="Krishna">KRISHNA</option>
			<option value="Kurnool">KURNOOL</option>
			<option value="Mahbubnagar">MAHBUBNAGAR</option>
			<option value="Medak">MEDAK</option>
			<option value="Nalgonda">NALGONDA</option>
			<option value="Nellore">NELLORE</option>
			<option value="Nizamabad">NIZAMABAD</option>
			<option value="Prakasam">PRAKASAM</option>
			<option value="Rangareddy">RANGAREDDY</option>
			<option value="Srikakulam">SRIKAKULAM</option>
			<option value="Visakhapatnam">VISAKHAPATNAM</option>
			<option value="Vizianagaram">VIZIANAGARAM</option>
			<option value="Warangal">WARANGAL</option>
			<option value="West Godavari">WEST GODAVARI</option>
		</select><div id="district_required" class="required"></div>
	</td></tr>
	<tr><td>Pincode</td><td><input type="text"size="6" maxlength="6"name="pincode" value="<?=$user['pincode'];?>"><div id="pincode_required" class="required"></div></td></tr>
	</table>
</td>
</tr>

<tr>
<td>4.Mobile number:</td>
<td><input type="text"size="10" maxlength="10"name="mob" value="<?=$user['mob'];?>"><div id="mob_required" class="required"></div></td>
</tr>
</table>
<table border="0">
<tr><td colspan="2" align="center"><input type="submit"class="button"value="Submit"></td></tr><br>
</table>
</form>
</center>

	         </div>
          </div>		

</div>
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	
<script src="dist/js/validmodify.js"></script>
  </body>
</html>