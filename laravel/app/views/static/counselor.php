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
				<li class="active"><a href="counselor">High School Counselor</a></li>
				<li><a href="university">Universities and Colleges</a></li>
				<li><a href="contact">Contact</a></li>
				<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLoginModal" id="menu-but">Login</button></li>
				<li><button type="button" class="btn btn-success" id="menu-but"><a href="register">Sign up</a></button></li>
			  </ul>	  
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron col-xs-6">
      <div class="container">
        <h1><center>Counselor</center></h1>
        <p>The high school counselor wears many hats and wears them all very well. We at UniversityRecruitMe strive to help you learn and manage your high school student’s activities in and out of the class room. By creating an innovative platform in which high school students can professionally network with college and university administrators. This will give them resources to build their brand at an early age and make the more marketable to colleges during the application process. Last but not least this will also serve as a personal data management tool for students throughout their high school career. As early as their freshman year, that can begin Enhancing their.... <h3>Future!</h3> 
</p>
      </div>
    </div>
     <!--carousel starts herre-->
<div id="imageCarousel" class="carousel slide col-xs-6"data-interval="2000" data-ride="carousel" data-pause="false"> <!--data-ride="carousel"-->
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#imageCarousel" data-slide-to="1"></li>
    <li data-target="#imageCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"><!--copy and paste this to add more images-->
      <img src="http://www.girardcollege.edu/uploaded/photos/Webpage_images/artmuseum2012-thumb.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>    <div class="item"><!--copy and paste this to add more images-->
      <img src="http://www.girardcollege.edu/uploaded/photos/Webpage_images/artmuseum2012-thumb.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item"><!--copy and paste this to add more images-->
      <img src="http://www.girardcollege.edu/uploaded/photos/Webpage_images/artmuseum2012-thumb.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
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
