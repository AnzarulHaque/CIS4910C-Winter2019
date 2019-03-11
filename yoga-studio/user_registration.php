<!DOCTYPE html>
<html lang="en">
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
        <li><a href="faqs.html">Classes</a></li>
				<li><a href="faqs.html">FAQs</a></li>
        <li><a href="contact_us.html">Contact Us</a></li>
			</ul>
        </div><!--/.navbar-collapse -->
    </nav><br>
	<br><br>
    </div>
	<!-- Example row of columns -->
	<div class="container">
      <div class="row">
        <div class="col-lg-6">
          <form class="form-signin" method="post" action="?action=add" enctype="multipart/form-data">
			         <h2 class="form-signin-heading">User Registration</h2><hr>

			         <label for="inputName" class="sr-only">Full Name</label>
			         <input type="text" name="inputName" id="inputName" class="form-control" maxlength="100" placeholder="Full Name" required autofocus>
			         <br>
        			<label for="inputEmail" class="sr-only">Email address</label>
        			<input type="text" name="inputEmail" id="inputEmail" class="form-control" maxlength="60" placeholder="Email address" required>
        			<br>
        			<label for="inputPassword" class="sr-only">Password</label>
        			<input type="password" name="inputPassword" id="inputPassword" class="form-control" maxlength="60" placeholder="Password" required>
        			<br>
        			<label for="confirmPassword" class="sr-only">Confirm Password</label>
        			<input type="password" name="confirmPassword" id="confirmPassword" class="form-control" maxlength="60" placeholder="Confirm Password" required>
        			<br>
        			<label for="city" class="sr-only">City</label>
        			<input type="text" name="inputCity" id="inputCity" class="form-control" maxlength="25" placeholder="City" required>
        			<br>
        			<label for="zip" class="sr-only">Zip Code</label>
        			<input type="text" name="inputZipCode" id="inputZipCode" class="form-control" maxlength="5" placeholder="Zip Code" required>
        			<br>
        			<label for="phone" class="sr-only">Phone Number</label>
        			<input type="text" name="inputPhone" id="inputPhone" class="form-control" maxlength="10" placeholder="Phone Number" required>
        			<br>

			        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Register</button>
		    </form>
        <?php
        /*Connect using SQL Server authentication.*/
        $serverName = "tcp:ahsqlserver.database.windows.net,1433";
        $connectionOptions = array(
            "Database" => "ahSqlDatabase",
            "UID" => "admin1",
            "PWD" => "password1%"
        );
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        $userType = "Customer";
        $current_timestamp = date("Y-m-d H:i:s");

        if ($conn === false)  {
        	echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors() , true));
        } else {
        	echo "Connection established.<br/>";
        }

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'add')  {
                /*Insert data.*/
                $insertSql = "INSERT INTO user_info (user_name,user_email,user_pwd,user_type,user_city,user_zip_code,user_phone,create_date)
        VALUES (?,?,?,?,?,?,?,?)";
                $params = array(&$_POST['inputName'], &$_POST['inputEmail'], &$_POST['inputPassword'], $userType, &$_POST['inputCity'],&$_POST['inputZipCode'],&$_POST['inputPhone'], $current_timestamp );

                $stmt = sqlsrv_query($conn, $insertSql, $params);
                if ($stmt === false) {
                    /*Handle the case of a duplicte e-mail address.*/
                    $errors = sqlsrv_errors();
                    if ($errors[0]['code'] == 2601) {
                        echo "The e-mail address you entered has already been used.</br>";
                    }
                    /*Die if other errors occurred.*/
                    else {
                        die(print_r($errors, true));
                    }
                } else {
                    echo "Registration complete.</br>";
                }
            }
        }
        // Close the connection.
        sqlsrv_close( $conn );
        ?>
        </div>
      </div><br><br>


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
