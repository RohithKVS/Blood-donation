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
	$userid = $_SESSION['userid'];
    $hospname = $_SESSION['hospname'];
	require "database.php";
	$district=$_POST['district'];
	$bloodgroup=$_POST['bloodgroup'];
	$sql1="select * from donor where bloodgroup='$bloodgroup' and district='$district' and status='1'";
	$result1=mysql_query($sql1);
	if(mysql_num_rows($result1) == 0)
	{
		header("location:sorry.php");
		exit();
	}
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
	<style>
table#don{
    border-collapse: collapse;
	font-family:Arial;
	font-size:15px;
	width:100%;
}

th{
    text-align: center;
    padding: 8px;
	background-color:black;
	color:white;
}
tr#don:nth-child(even)
{
	background-color: #E0E0E0
}
td#don
{
    text-align: center;
    padding: 8px;
}
.table_outer { height: 30em; overflow: auto; }
</style>
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
<br>
<h4>Here is a list of all available donors. We have displayed only the donors who are available. Those who marked their status as 'Not Available' are not displayed here.</h4>
<br>
<div class="table_outer">
<table border="1" id="don">
<tr>
<th>Name</th>
<th>Age</th>
<th>Blood Group</th>
<th>Address</th>
<th>Mobile</th>
<th>Email</th>
<th>Diabetes</th>
<th>BP</th>
<?php
	while($don=mysql_fetch_assoc($result1))
	{
	$id=$don['ID'];
	$sql2="select * from donoreli where id=$id";
	$result2=mysql_query($sql2) or die("Error:No rows");
	$doneli=mysql_fetch_assoc($result2);
	echo "<tr id='don'>";
	echo "<td id='don'>".$don['fname']." ".$don['lname']."</td>";
	echo "<td id='don'>".$doneli['age']."</td>";
	echo "<td id='don'>".$don['bloodgroup']."</td>";
	echo "<td id='don'>" .$don['hno']."<br>".$don['strname']."<br>".$don['are']."<br>".$don['district']."<br>".$don['pincode']."</td>";
	echo "<td id='don'>".$don['mob']."</td>";
	echo "<td id='don'>".$don['email']."</td>";
	echo "<td id='don'>".$doneli['diabetes']."</td>";
	echo "<td id='don'>".$doneli['bp']."</td>";
	echo "</tr>";
	}
?>
</tr>
</table>
</div>
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