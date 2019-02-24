<!DOCTYPE html>
<html lang="en">

  <?php
  session_start();
  if(!$_SESSION['email'])
  {
      header("Location: signin.php");//redirect to login page to secure the welcome page without login access.
  }
  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Yoga Studio - Inspiration for Joyful Living</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Yoga Studio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Classes</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
                <div class="navbar-form navbar-right">
                    <button type="submit" class="btn btn-danger"><a href="#">My Profile</a></button>
				    <button type="submit" class="btn btn-warning"><a href="Logout.php">Logout</a></button>
			    </div>
            </div><!--/.navbar-collapse -->
    </nav><br>
    <section class="main">
        <div class="container grid-custom">
            <div class="row">

                <div class="col-sm-12 col-xs-12"><img src="images/banner-user-page3.jpg" alt="" class="img-responsive"></div>
            </div>
        </div>
    </section><br><br>
    </div>

	<!-- Example row of columns -->
    <div class="container">
        <div class="row marketing">
            <div class="col-lg-12">
              <h2>Welcome <b><?php echo $_SESSION['email']; ?></b></h2>

              <br>You may register for your class here. All class details are as below:</p>
            </div>
        </div>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>

            <tr>

                <th>Program Name</th>
                <th>Start Date</th>
                <th>Class Size</th>
                <th>Class Type</th>
                <th>Cost (USD)</th>
                <th>Interested</th>
            </tr>
            </thead>

            <tr>
            <!--here showing results in the table -->
                <td>Hatha Yoga</td>
                <td>2019-04-03</td>
                <td>25</td>
                <td>Daily</td>
                <td>100.00</td>
                <td><a href="#"><button class="btn btn-info">Register</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>
            <tr>
            <!--here showing results in the table -->
                <td>Vinyasa Flow</td>
                <td>2019-04-12</td>
                <td>20</td>
                <td>Weekends</td>
                <td>125.00</td>
                <td><a href="#"><button class="btn btn-info">Register</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>
            <tr>
            <!--here showing results in the table -->
                <td>Yin Yoga</td>
                <td>2019-04-20</td>
                <td>30</td>
                <td>Evening</td>
                <td>50.00</td>
                <td><a href="#"><button class="btn btn-info">Register</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>
            <tr>
            <!--here showing results in the table -->
                <td>Sculptworks Yoga</td>
                <td>2019-05-01</td>
                <td>50</td>
                <td>Morning</td>
                <td>60.00</td>
                <td><a href="#"><button class="btn btn-info">Register</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>
            <tr>
            <!--here showing results in the table -->
                <td>Corebootyworks Yoga</td>
                <td>2019-05-12</td>
                <td>15</td>
                <td>Daily</td>
                <td>150.00</td>
                <td><a href="#"><button class="btn btn-info">Register</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>

            </table>
          </div>
        </div>

        <hr>
        <footer class="footer">
            <div class="container">
                <a href="#"><img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter1.png" width="35" height="35" /></a>
                <a href="#"><img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin1.png" width="35" height="35" /></a>
                <a href="#"><img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook1.png" width="35" height="35" /></a>
                <a href="#"><img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest1.png" width="35" height="35" /></a>
                &copy;2019 - <strong>Yoga Studio</strong>
            </div>
        </footer>
    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


  </body>

</html>
