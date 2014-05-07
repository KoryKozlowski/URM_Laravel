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
          <a class="navbar-brand" href="/"><img src="img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
        </div>
        <div class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
				<li><a href="about">About</a></li>
				<li><a href="student">Student</a></li>
				<li><a href="counselor">High School Counselor</a></li>
				<li class="active"><a href="university">Universities and Colleges</a></li>
				<li><a href="contact">Contact</a></li>
				<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLoginModal" id="menu-but">Login</button></li>
        <li><a href="register"><button type="button" class="btn btn-success" id="menu-but2">Sign up</button></a></li>
			  </ul>	  
        </div><!--/.navbar-collapse -->
      </div>
    </div>
       
       <!--carousel starts herre-->
       
 <div class="row">
<div id="imageCarousel" class="carousel slide col-xs-6" data-interval="2000" data-ride="carousel" data-pause="false"> <!--data-ride="carousel"-->
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#imageCarousel" data-slide-to="1"></li>
    <li data-target="#imageCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"><!--copy and paste this to add more images-->
      <img src="http://dailyemerald.com/wp-content/uploads/2011/10/111007.aam_.vbc_.cal_.14951.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>    <div class="item"><!--copy and paste this to add more images-->
      <img src="http://dailyemerald.com/wp-content/uploads/2011/10/111007.aam_.vbc_.cal_.14951.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item"><!--copy and paste this to add more images-->
      <img src="http://dailyemerald.com/wp-content/uploads/2011/10/111007.aam_.vbc_.cal_.14951.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>

    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#imageCarousel" data-slide="prev">
    <span class="icon-prev"></span><!-- was--glyphicon glyphicon-chevron-left-->
  </a>
  <a class="right carousel-control" href="#imageCarousel" data-slide="next">
    <span class="icon-next"></span><!-- was--glyphicon glyphicon-chevron-right-->
  </a>
</div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron col-xs-6">
      <div class="container">
        <h1><center>University</center></h1>
        <p>The world of college admissions is more competitive than ever less time, less funds and less interaction with students. This tool will serve as resource to help you learn more knowledge of your applicants and give you another line of communication with them. The high school student has hundreds of opportunities to research and learn more about your university. Now, you have the ability to learn more about them. Student’s using UniversityRecruitMe will have the unique opportunity to professionally network with university personnel that serves a primary purpose of demonstrating why that student should be accepted to your institution. With the universities using this new resource to learn more about their potential students, retention rates should also see an improvement.  So Sign Up today to help Enhance your University’s Future..... <h3>NOW!</h3></p>
      </div>
    </div>
    

    <div class="container">

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
