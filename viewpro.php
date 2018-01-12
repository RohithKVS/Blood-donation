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
		    <li class="active"><a href="viewpro.php">View Profile</a></li>
            <li><a href="editpro.php">Edit Profile</a></li>
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
            <li class="active"><a href="viewpro.php">View Profile</a></li>
            <li><a href="editpro.php">Edit Profile</a></li>
            <li><a href="changepassdon.php">Change Password</a></li>
            <li><a href="status.php">Change Status</a></li>
            <li><a href="closeacc.php">Close Account</a></li>
          </ul>
        </div>
		        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" align="center">Profile</h1>
          <div class="row placeholders">
<center>
<form name="donreg2">
<table id="form" border="1" style="border:2px solid;height:400px;border-collapse:collapse">
<tr>
<td style="width:150px">1.First Name:</td>
<td><?=$user['fname'];?></td>
</tr>
<tr>
<td>2.Last Name(Surname):</td>
<td><?=$user['lname'];?></td>
</tr>
<tr>
<td>3.Email-ID:</td>
<td><?=$user['email'];?></td>
</tr>
<tr>
<td>4.Blood Group:
</td>
<td><?=$user['bloodgroup'];?></td>
</tr>
<tr>
<td>5.Gender:</td>
<td><?=$user['gender'];?></td>
</tr>
<tr>
<td>6.Address:</td>
<td>
	<table border="0" style="font-family:Arial;font-size:15px;height:200px;border-collapse:collapse">
	<tr><td>House No.</td><td><?=$user['hno'];?></td></tr>
	<tr><td>Street Name</td><td><?=$user['strname'];?></td></tr>
	<tr><td>Area/Locality</td><td><?=$user['are'];?></td></tr>
	<tr><td>District</td><td><?=$user['district'];?></td></tr>
	<tr><td>Pincode</td><td><?=$user['pincode'];?></td></tr>
	</table>
</td>
</tr>

<tr>
<td>7.Mobile number:</td>
<td><?=$user['mob'];?></td>
</tr>
</table>
<br>
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
  </body>
</html>