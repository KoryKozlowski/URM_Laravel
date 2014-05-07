<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
	<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="/img/favicon/favicon.ico">
    <title>University Recruit Me</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
          <a class="navbar-brand" href="/"><img src="/img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
        </div>
        <div class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
				<li><a href="about">About</a></li>
				<li><a href="student">Student</a></li>
				<li><a href="counselor">High School Counselor</a></li>
				<li><a href="university">Universities and Colleges</a></li>
				<li><a href="contact">Contact</a></li>
				<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLoginModal" id="menu-but">Login</button></li>
				<li><a href="register"><button type="button" class="btn btn-success" id="menu-but2">Sign up</button></a></li>
			  </ul>	  
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	<br>
    <br>
    
<!-- Register form here -->
<body>
<div class="container">
<legend>Sign up with University Recruit Me!</legend>
	<div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8" style="float:left">
		<form id="signup" method="post" action="/student">
		<div class="row"><div class="control-group col-xs-6 col-sm-6 col-md-6">
			<div class="controls">
			    <div class="input-group">
					<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
					<input type="text" class="form-control input" id="first_name" name="first_name" placeholder="First Name" 
                    required data-validation-required-message="First name required">
				</div><p class="help-block"></p>
			</div>
		</div>
		<div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="controls">
			    <div class="input-group">
					<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
					<input type="text" class="form-control input" id="last_name" name="last_name" placeholder="Last Name" 
                    required data-validation-required-message="Last name required">
				</div><p class="help-block"></p>
			</div>
		</div></div>
		<div class="row"><div class="control-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="controls">
			    <div class="input-group">
					<span class="input-group-addon"><i class="icon-append fa fa-envelope"></i></span>
					<input type="email" class="form-control input" id="email" name="email" placeholder="Email" 
                    required data-validation-required-message="Email required">
                </div><p class="help-block"></p>
			</div>
		</div></div>
		<div class="row"><div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="controls">
			    <div class="input-group">
					<span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
					<input type="Password" id="password" class="form-control input" name="password" placeholder="Password" 
                    required data-validation-required-message="Password required">
                </div><p class="help-block"></p>
			</div>
		</div>
		<div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="controls">
			    <div class="input-group">
					<span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
					<input type="Password" id="confirm_password" class="form-control input" name="confirm_password" placeholder="Re-enter Password"
                    required data-validation-required-message="You must confirm your password"
                    data-validation-match-match="password"
                    data-validation-match-message="Password does not match">
                </div><p class="help-block"></p>
			</div>
		</div></div>
		<div class="row">
        <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        	<div class="controls">
            	<label for="userType" class="control-label input-group">Who are you?</label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default active">
						<input type="radio" name="student" value="student">Student
					</label>
					<label class="btn btn-default">
						<input type="radio" name="unirep" value="unirep">University Rep
					</label>
					<label class="btn btn-default">
						<input type="radio" name="counselor" value="counselor" checked="">Counselor
					</label>
      			</div>
			</div>
        </div>
        <br>
        <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        	<div class="controls">
            	<label class="checkbox">
        			<input type="checkbox" name="terms-and-conditions" required 
                	data-validation-required-message="You must agree to the terms and conditions" /> I agree to the <a href="terms" id="termText" target="_blank"> Terms and Conditions </a>
      			</label>
                <p class="help-block"></p>
            </div>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="control-group col-xs-2 col-sm-2 col-md-2 col-lg-2">
	      <div class="controls">
	       <button type="submit" class="btn btn-success" >Create My Account</button>
	      </div>
		</div>
        </div>
	  </form>
	</div>
    <div class="container col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	<div class="row">
    		<center><img src="/img/URM_Logo.png" class="img-responsive" alt="Responsive image"></center>
        </div>
        <div class="row">
        	<center><img src="/img/u3849-4.png" class="img-responsive" alt="Responsive image"></center>
        </div>
    </div>
</div>
	
    <div class="container">
      <!-- Example row of columns -->
     
      <hr>

      <footer>
        <p>&copy; University Recruit Me 2014</p>
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
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/tooltips.js"></script>
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
