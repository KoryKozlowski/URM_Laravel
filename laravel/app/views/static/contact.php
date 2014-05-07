
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="img/favicon/favicon.ico">
    <title>University Recruit Me</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
          <a class="navbar-brand" href="index.html"><img src="img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
        </div>
        <div class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
				<li><a href="about.html">About</a></li>
				<li><a href="student.html">Student</a></li>
				<li><a href="counselor.html">High School Counselor</a></li>
				<li><a href="uni.html">Universities and Colleges</a></li>
				<li class="active"><a href="contact.html">Contact</a></li>
				<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLoginModal" id="menu-but">Login</button></li>
        <li><a href="Register.html"><button type="button" class="btn btn-success" id="menu-but2">Sign up</button></a></li>
			  </ul>	  
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><center>Contact us!</center></h1>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Address:</h2>
          <p>4578 Elm Street</p>
			<p>Memphis, TN 38111</p>
        </div>
        <div class="col-md-4">
          <h2>Email:</h2>
          <p>UniversityRecruitMe@Gmail.com</p>
       </div>
        <div class="col-md-4">
          <h2>Phone Number:</h2>
          <p>(901)-123-4567</p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->
	
	<div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Login</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-signin" id="login-form" role="form">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="control-group">
                        	<div class="controls">
                            	<div class="input-group">
									<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
							 		<input type="email" name="uname" id="uname" class="form-control input-sm" placeholder="Email"
                             		required data-validation-required-message="You must enter your email">
								</div>
                        		<p class="help-block"></p>
                            </div>
                        </div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="control-group">
                        	<div class="controls">
                            	<div class="input-group">
									<span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
							 		<input type="password" name="passw" id="passw" class="form-control input-sm" placeholder=			"Password" required data-validation-required-message="You forgot your password">
								</div>
                                <p class="help-block"></p>
                            </div>
                        </div>
					</div>
				</div>
				<label class="checkbox">
					<input type="checkbox" value="remember-me"> Remember me
				</label>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button class="btn btn-primary" type="submit">Login</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tooltips.js"></script>
    <script>
  		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>
    <script type="text/javascript">
$(function(){
     $("imageCarousel").carousel();
});
</script>
  </body>
</html>
