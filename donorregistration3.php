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

    <title>Registration Form</title>

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
<h1>Registration Form
</h1>
<img src="dist/images/Step-2.jpg" class="img-responsive">
<h3>Fields marked with asterisks(*) are compulsory.</h3>
<form name="donreg2" method="post" autocomplete="off" onsubmit="return Validate()" action="donreg2.php">
<table id="form" class="table-responsive">
<tr><td><br></td></tr>
<tr>
<td style="width:200px">1.First Name*:</td>
<td><input type="text"size="25" maxlength="25"name="fname"><div id="fname_required" class="required"></div>
<?php
$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=fname') !==false)
{
	echo "<div class='required'>First name should be only in letters.</div>";
}
?>
</td>
</tr>
<tr>
<td>2.Last Name(Surname)*:</td>
<td><input type="text"size="25" maxlength="25"name="lname"><div id="lname_required" class="required"></div>
<?php
$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=lname') !==false)
{
	echo "<div class='required'>Last name should be only in letters.</div>";
}
?>
</td>
</tr>
<tr>
<td>3.Email-ID*:<br>Your email id will be your user id</td>
<td><input type="email"size="25" maxlength="25" name="email"><div id="email_required" class="required"></div>
<?php
$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=user') !==false)
{
	echo "<div class='required'>Email id already exists</div>";
}
?>
</td>
</tr>
<tr>
<td>4.Password*:</td>
<td><input type="password"size="25" maxlength="25"name="pass"><div id="pass_required" class="required"></div></td>
</tr>
<tr>
<td>5.Confirm Password*:</td>
<td><input type="password"size="25" maxlength="25"name="confpass"><div id="confpass_required" class="required"></div></td>
</tr>
<tr>
<td>6.Blood Group*:
</td>
<td><select name="bloodgroup">
<option value="select">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><div id="bloodgroup_required" class="required"></div>
</td>
</tr>
<tr>
<td>7.Gender*:</td>
<td><input type="radio"name="gender" value="Male">Male
<input type="radio"name="gender" value="Female">Female
<?php $loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=nogen') !==false)
{
	echo "<div class='required'>Gender is required</div>";
}?>
</td>
</tr>
<tr>
<td>8.Address*:</td>
<td>
	<table border="0" style="font-family:Arial;font-size:15px;">
	<tr><td>House No.</td><td><input type="text"size="20" maxlength="20"name="hno"><div id="hno_required" class="required"></div></td></tr>
	<tr><td>Street Name</td><td><input type="text"size="25" maxlength="25"name="strname"><div id="strname_required" class="required"></div></td></tr>
	<tr><td>Area/Locality</td><td><input type="text"size="25" maxlength="25"name="are"><div id="are_required" class="required"></div></td></tr>
	<tr><td>District</td><td>
    <select name="district">
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
	<tr><td>Pincode</td><td><input type="text"size="6" maxlength="6"name="pincode"><div id="pincode_required" class="required"></div>
	<?php
	$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($loc,'error=pin') !==false)
	{
		echo "<div class='required'>Pincode should be a 6-digit number.</div>";
	}
	?>
</td>
</tr>
	</table>
</td>
</tr>

<tr>
<td>9.Mobile number*:</td>
<td><input type="text"size="10" maxlength="10"name="mob"><div id="mob_required" class="required"></div>
<?php
$loc="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($loc,'error=mob') !==false)
{
	echo "<div class='required'>Mobile no should be a 10-digit number.</div>";
}
?>
</td>
</tr>
<tr><td colspan="2"><br></td></tr>
<tr><td colspan="2"><input type="checkbox"value="Yes">I have read the <a href="#" class="black" onClick="javascript:window.open('eligible.php','Windows','width=650,height=350,toolbar=no,menubar=no,scrollbars=yes,resizable=yes,location=no,directories=no,status=no');return false")>Eligibility Criteria</a> and confirm that I am eligible to donate blood.<div id="eli_required" class="required"></div></td></tr>
<tr><td colspan="2"><br></td></tr>
<tr><td colspan="2"><input type="checkbox" value="Yes">I do hereby declare that the information given by me in the above form is correct to the best of my knowledge.</td></tr>
<tr><td colspan="2"><br></td></tr>
<tr><td colspan="2" align="center"><input type="submit"class="button"value="Next"></td></tr>
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
	
<script src="dist/js/validdonor.js"></script>
  </body>
</html>