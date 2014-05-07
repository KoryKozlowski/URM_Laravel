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
				<li><a href="university">Universities and Colleges</a></li>
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
      <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt="" height="364" ><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>   
     <div class="item"><!--copy and paste this to add more images-->
      <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item"><!--copy and paste this to add more images-->
      <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
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
   	
      <div class="container fill">
   		<!--<div class="row-fluid">
<!--        <div class="span6">
                  <!--put carasol here-->
<!--                  </div>
                  <div class="span6">-->
        <h1><center>About us!</center></h1>
        <p>UniversityRecruitMe is your innovative, cutting-edge online resource for students during their high school journey. UniversityRecruitMe is the forerunner of online forums for the next generation of college applicants. URM allows high school students the ability to promote themselves by communicating their experiences and achievements with their favorite Universities.</p>
        
   <!--     </div><!-- this div is for span6 which covers the grid of 6-->
     <!-- </div><!--takes out of row-fluid-->
      </div>
    </div>
    </div>

   <div class="container col-md-12"> 
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Students</h2>
          <p> <p>Each year, many high school students are not given the opportunity to excel in college, because they are judged merely on grades and enrollment figures. These students are further disadvantaged, because the recruitment process has changed considerably due to many schools’....  </p>
          <p><a class="btn btn-default" href="#student.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>High School Counselors</h2>
          <p>The high school counselor wears many hats and wears them all very well. We at UniversityRecruitMe strive to help you learn and manage your high school student’s activities in and out of the class room. By creating an innovative platform in which high school students can....  </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>University Recruiters</h2>
          <p>The world of college admissions is more competitive than ever less time, less funds and less interaction with students. This tool will serve as resource to help you learn more knowledge of your applicants and give you another line of communication with them. The high school....</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

      <hr>

      <footer>
        <p>&copy; University Recruit Me, 2014</p>
      </footer>
     <!-- /container -->
	
	<div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Login</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-signin" id="login-form" role="form" action="student-dash.html">
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
