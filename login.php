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
    <link href="dist/css/login.css" rel="stylesheet">
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
               <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
<div class="container-fluid">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">DONOR LOGIN</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">HOSPITAL LOGIN</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="verifydonor.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" class="form-control" tabindex="1" placeholder="Email address" required autofocus>
										<?php
										$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
										if(strpos($loc,'error=doesnotdonor') !==false)
										{
											echo "<div class='required'>User does not exists</div>";
										}
										?>
									</div>
									<div class="form-group">
										<input type="password" name="pass" class="form-control" tabindex="2" placeholder="Password" required>
										<?php
										$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
										if(strpos($loc,'error=invalidpassdonor') !==false)
										{
											echo "<div class='required'>Invalid Password</div>";
										}
										?>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="forgotpassdon.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="verifyhospital.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="id" class="form-control" tabindex="1" placeholder="Hospital ID" required autofocus>
										<?php
										$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
										if(strpos($loc,'error=doesnothosp') !==false)
										{
											echo "<div class='required'>Hospital does not exists</div>";
										}
										?>
									</div>
									<div class="form-group">
										<input type="password" name="pass" class="form-control" tabindex="2" placeholder="Password" required>
										<?php
										$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
										if(strpos($loc,'error=invalidpasshosp') !==false)
										{
											echo "<div class='required'>Invalid Password</div>";
										}
										?>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="forgotpasshosp.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
	
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/login.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>