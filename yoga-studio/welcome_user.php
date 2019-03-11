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
                  <li><a href="about_us.html">About Us</a></li>
                  <li><a href="signin.php">Classes</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                  <li><a href="contact_us.html">Contact Us</a></li>
                </ul>
                <div class="navbar-form navbar-right">
                    <button type="submit" class="btn btn-danger"><a href="#">My Profile</a></button>
				            <button data-toggle="modal" data-target="#logoutModal" class="btn btn-warning">Logout</a></button>
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

              <br>You may register for your class here. All class details are as below:</p><br><br>

              <?php
                  /*Connect using SQL Server authentication.*/
                  include("db_conection.php");
                  $tsql= "SELECT CLASS_ID, PROGRAM_NAME, START_DATE, CLASS_SIZE, CLASS_TYPE, COST from yoga_classes";
                    $getResults= sqlsrv_query($conn, $tsql);
                    if ($getResults == FALSE) {
                        echo (sqlsrv_errors());
                    }
                    ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Program Name</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Class Size</th>
                            <th scope="col">Class Type</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Interested</th>
                          </tr>
                        </thead>

                      <tbody>
                    <?php
                        while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
                    ?>
                          <tr>
                            <th scope="row"><?php echo ($row['CLASS_ID'] . PHP_EOL); ?></th>
                            <th scope="row"><?php echo ($row['PROGRAM_NAME'] . PHP_EOL); ?></th>
                            <td><?php echo ($row['START_DATE'] . PHP_EOL); ?></td>
                            <td><?php echo ($row['CLASS_SIZE'] . PHP_EOL); ?></td>
                            <td><?php echo ($row['CLASS_TYPE'] . PHP_EOL); ?></td>
                            <td><?php echo ($row['COST'] . PHP_EOL); ?></td>
                            <td><a href="#"><button class="btn btn-info">Register</button></a></td>
                          </tr>


                    <?php
                        }
                    ?>
                  </tbody>
                  </table>
                    <?php
                    sqlsrv_free_stmt($getResults);
            ?>

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

    <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4>Log Out <i class="fa fa-lock"></i></h4>
          </div>
          <div class="modal-body">
            <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
            <div class="actionsBtns">
              <form action="/logout.php" method="post">
                  <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                  <input type="submit" class="btn btn-default btn-primary" value="Logout"/>
  	              <button class="btn btn-default" data-dismiss="modal">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


  </body>

</html>
