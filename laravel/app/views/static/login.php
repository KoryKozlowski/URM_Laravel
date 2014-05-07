
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <title>URM Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title"><center>Please sign in</center></h2>
			</div>
			<div class="panel-body">
			<br>
			<center><img src="img/URM_Logo.png" class="img-responsive" alt="Responsive image"></center>
 			<center><img src="img/u3849-4.png" class="img-responsive" alt="Responsive image"></center>
            <br>
			<form id="login-form" role="form" action="student-dash.html">	
            	<div class="row"><div class="control-group col-sm-offset-4 col-lg-4">	
            		<div class="control">
                		<div class="input-group input-group-lg">
               				<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
							<input type="email" name="username" id="uname" class="form-control" placeholder="Email" 
                   			required data-validation-required-message="You must enter your email" autofocus>
                   		</div>
                   		<p class="help-block"></p>
               		</div>
           		</div></div>
           		<div class="row"><div class="control-group col-sm-offset-4 col-lg-4">	
               		<div class="controls">
               			<div class="input-group input-group-lg">
                   			<span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
							<input type="password" name="password" id="passw" class="form-control" placeholder="Password"                    		required data-validation-required-message="You forgot your password">
                    	</div>
                    	<p class="help-block"></p>
                	</div>
            	</div></div>
           		<div class="row"><div class="control-group col-sm-offset-4 col-lg-4">	
               		<div class="controls">
                    	<div class="input-group input-group-lg">
							<input type="checkbox" value="remember-me"> Remember me</input>
               			</div>
                    </div>
                </div></div>
           		<div class="row"><div class="control-group col-sm-offset-4 col-lg-4">	
                	<div class="controls">
                		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                	</div>
            	</div></div>
            </form>
            </div>
		</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- or use local jquery -->
	<script src="js/jqBootstrapValidation.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tooltips.js"></script>
    <script>
  		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>    
  </body>
  
 
</html>
