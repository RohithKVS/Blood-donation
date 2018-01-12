<?php
session_start();
?>
<?php
require 'database.php';

    $email = mysql_escape_string($_POST['email']);
    $result1 = mysql_query("SELECT * FROM hospital WHERE email='$email'");

    if (mysql_num_rows($result1) == 0 ) // User doesn't exist
    { 
		// User doesn't exist
		header("Location: forgotpasshosp.php?error=doesnot");
		exit();
    }
	
    else 
	{ 
		$str="0947389hnlfdkhasdsfsdfgbnle43rlidohfklsd";
		$str=str_shuffle($str);
		$str=substr($str,0,8);
		$result2 = mysql_query("update hospital set token='$str' WHERE email='$email'");
		$user =mysql_fetch_assoc($result1);
        $hospname = $user['hospname'];
		$host=$_SERVER['HTTP_HOST'];
        // Send registration confirmation link (reset.php)
        $message = "Hello $hospname,

        Please click this link to reset your password:

        https://$host/resethosp.php?token=$str&email=$email";
		mail($email,"(noreply)",$message,"From: mp16cc7@gmail.com\r\n");
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

    <title>Welcome to Online Blood Donation</title>

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
    <link href="dist/css/carousel.css" rel="stylesheet">
    <link href="dist/css/buttons.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
        <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ONLINE BLOOD DONATION</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="donorguide.php">REGISTER AS BLOOD DONOR</a></li>
            <li><a href="hospguide.php">REGISTER AS HOSPITAL</a></li>
            <li><a href="bloodtips.php">BLOOD TIPS</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
               <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
		    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">	
<h3>A link to reset your password has been sent to your email.<br>Please check your email including spam.<br>If you didn't get the email,<br> <a href="forgotpasshosp.php" class="normal">Click here</a></h3>	 
	 </div><!-- /.col-lg-4 -->
	
	</div>
	
	  <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
              </footer>

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