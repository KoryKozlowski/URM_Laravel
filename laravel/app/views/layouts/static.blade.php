<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/img/favicon/favicon.ico">
  <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="/img/favicon/favicon.ico">
  <title>University Recruit Me</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/jumbotron.css" rel="stylesheet">
  <style type="text/css">
    .navbar-inner{
        position:relative;
        padding-left:70px;
    }
    .navbar .brand {
        margin-left: 0px;
        font-size: 20px;
        font-weight: 200;
        color: #777777;
        text-shadow: 0 1px 0 #ffffff;
        position: absolute;
        width: 300px;
        left: 0px;
        top: 0px;
        padding: 10px;
        z-index: 1;
    }
    

    @media (max-width: 1020px) {
      .navbar .brand {
        z-index: -1;
      }
      .navbar-header {
          float: none;
      }
      .navbar-left,.navbar-right {
          float: none !important;
      }
      .navbar-toggle {
          display: block;
      }
      .navbar-collapse {
          border-top: 1px solid transparent;
          box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
      }
      .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
      }
      .navbar-collapse.collapsing {
        background-color: #222;
      }
      .navbar-collapse.collapse {
          display: none!important;
          background-color: #222;
      }
      .navbar-nav {
          float: none!important;
          margin-top: 7.5px;
      }
      .navbar-nav>li {
          float: none;
      }
      .navbar-nav>li>a {
          padding-top: 10px;
          padding-bottom: 10px;
      }
      .collapse.in{
        display:block !important;
    }
  }
  </style>

  @yield('head')
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-inner">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="/"><img src="/img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
      <div class="navbar-collapse collapse">

        <div style="padding-left:10px;padding-right:10px;" class="nav navbar-right">
      <a href="/login" class="btn btn-primary navbar-btn" id="menu-but">Login</a>
      <a href="/register" class="btn btn-success navbar-btn" id="menu-but2">Sign up</a>
    </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a id="nav-about" href="/about">About</a></li>
          <li><a id="nav-student" href="/student">Student</a></li>
          <li><a id="nav-counselor" href="/counselor">High School Counselor</a></li>
          <li><a id="nav-university" href="/university">Universities and Colleges</a></li>
          <li><a id="nav-contact" href="/contact">Contact</a></li>
        </ul>
        
      </div><!--/.navbar-collapse -->
      
      </div>
      
  </div>
  @yield('content')
  
  <hr>
  <div class="container">
    <footer>
      <p>&copy; University Recruit Me, 2014</p>
    </footer>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/tooltips.js"></script>
  
  @yield('script')
  
</body>
</html>
