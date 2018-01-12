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
            <li class="active"><a href="index.php">HOME</a></li>
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



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="dist/images/B3.jpg" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="dist/images/B5.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="dist/images/B6.jpg" alt="Third slide">
        </div>
		<div class="item">
          <img class="fourth-slide" src="dist/images/B7.png" alt="Fourth slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- START THE FEATURETTES -->
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h3>About this website</h3>
<p>This website is designed to provide on demand blood donation. This is not a blood bank. It only helps to establish a direct contact with donor and the hospital.</p>
<h3>For First-time Users:</h3>
<p>If you are donating blood, Click on 'Register as Blood Donor' or <a href="donorguide.php">click here</a></p>
<p>If you are a hospital requiring blood, Click on 'Register as Hospital' or <a href="hospguide.php">click here</a></p>
<br>
<h3>For Existing Users:</h3>
<p>If you are an existing user of this website, Click on 'Login' or <a href="login.php">click here</a></p>


		  </div>
        <div class="col-md-5 col-md-pull-7">
<h3>Some facts about blood donation</h3>
<p>
<ul>
<li>Our nation requires 4 Crore Units of Blood while only 40 lakh units are available</li>
<li>Every two seconds someone needs Blood</li>
<li>More than 38,000 blood donations are needed every day.</li>
<li>The gift of blood is the gift of life. There is no substitute for human blood.</li>
<li>Blood cannot be manufactured – it can only come from generous donors.</li>
<li>A total of 30 million blood components are transfused each year.</li>
<li>Adults have around 10 pints of blood in their body. 1 pint is given during a donation.</li>
<li>Donors can give blood every 56 days.</li>
</ul>
</p>
		</div>
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
