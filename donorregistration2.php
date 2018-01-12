<?php
session_start();

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

    <title>Eligibility Check</title>

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
            <li class="active"><a href="donorguide.php">REGISTER AS BLOOD DONOR</a></li>
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
		
		
		
		
	<center>
<h1>Registration Form</h1>
<img src="dist/images/Step-1.jpg" class="img-responsive">
<form name="donreg1" method="post" autocomplete="off" onsubmit="return validate()" action="donreg1.php" >
<table id="form" border="0"  class="table-responsive">
<tr><td colspan="2">If you are suffering from HIV or Hepatitis-B, you are not eligible for donating blood. Thank you for your cooperation</td></tr>
<tr>
<td style="width:275px;">1.Age:</td>
<td><input type="text"size="3" maxlength="3"name="age"><div id="age_required" class="required"></div>
<?php $loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=noage') !==false)
{
	echo "<div class='required'>You are not eligible</div>";
}?>
</td>
</tr>
<tr>
<td>2.Weight:</td>
<td><input type="text"size="2" maxlength="2"name="weight"><div id="weight_required" class="required"></div>
<?php $loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=noweig') !==false)
{
	echo "<div class='required'>You are not eligible</div>";
}?>
</td>
</tr>
<tr>
<td>3.Do you have diabetes:</td>
<td><input type="radio"name="diabetes" value="Yes">Yes
<input type="radio"name="diabetes" value="No">No
<?php $loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=nodia') !==false)
{
	echo "<div class='required'>This field is required</div>";
}?>
</td>
</tr>
<tr>
<td>4.Do you have Blood Pressure:</td>
<td><input type="radio"name="bp" value="Yes">Yes
<input type="radio"name="bp" value="No">No
<?php $loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=nobp') !==false)
{
	echo "<div class='required'>This field is required</div>";
}?>
</td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" class="button" value="Next"></td></tr>
</table>
<br>
</form>
</center>



		
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
	
<script src="dist/js/valideligibility.js"></script>
  </body>
</html>