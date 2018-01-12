<?php
/* Displays user information and some useful messages */
session_start();

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
            <li><a href="editpro.php">Edit Profile</a></li>
            <li class="active"><a href="changepassdon.php">Change Password</a></li>
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
            <li><a href="editpro.php">Edit Profile</a></li>
            <li class="active"><a href="changepassdon.php">Change Password</a></li>
            <li><a href="status.php">Change Status</a></li>
            <li><a href="closeacc.php">Close Account</a></li>
          </ul>
        </div>
		        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" align="center">Change Password</h1>
          <div class="row placeholders">

		  <center>
<br>
<br>
<br>
<form name="donreg2" method="post" autocomplete="off" onsubmit="return Validate()" action="changepass.php">
<table id="form" border="3" style="border:2px solid;height:400px;border-collapse:collapse">
<tr>
<td>Old Password:</td>
<td width=250px><input type="password"size="25" maxlength="25"name="oldpass"><br><div id="oldpass_required" class="required"></div>
<?php
$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=invalid') !==false)
{
	echo "<div class='required'>Wrong password. Try again</div>";
}
?>
</td>
</tr>
<tr>
<td>New Password:</td>
<td><input type="password"size="25" maxlength="25"name="newpass"><br><div id="newpass_required" class="required"></div></td>
</tr>
<tr>
<td>Confirm New Password:</td>
<td><input type="password"size="25" maxlength="25"name="confnewpass"><br><div id="confnewpass_required" class="required"></div></td></tr>
</table>
<table border="0">
<tr><td colspan="2" align="center"><input type="submit"class="button"value="Submit"></td></tr>
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
	
<script src="dist/js/validpassword.js"></script>
  </body>
</html>

