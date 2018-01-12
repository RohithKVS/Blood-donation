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
    $userid = $_SESSION['userid'];
    $hospname = $_SESSION['hospname'];

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

    <title>Welcome <?= $hospname ?></title>

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
		    <li class="active"><a href="donorslist1.php">Search Donor</a></li>
            <li><a href="changepasshosp.php">Change Password</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
	    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		    <li class="active"><a href="donorslist1.php">Search Donor</a></li>
            <li><a href="changepasshosp.php">Change Password</a></li>
          </ul>
        </div>
		        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" align="center">Donors List</h1>
          <div class="row placeholders">
<center>
<h2>Search for a Blood Donor</h2><br>
<form name="donlist" method="post" autocomplete="off" action="donorslist2.php">
<table id="form" border="0" width="500px" height="200px" style="border:2px;border-color:gray;border-style:solid;border-radius:10px">
<tr>
<td>Blood Group:
</td>
<td>
<select name="bloodgroup" style="width:150px;">
	<option value="Select">Select</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>
</select>
</td></tr>
<tr><td width="174px">District:</td><td>
    <select name="district" style="width:150px;">
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
</select>
</td></tr>
</table>
<br>
<input type="submit" value="Submit" class="button">
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