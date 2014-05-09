<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="img/favicon/favicon.ico">
    <title>URM</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sidebar.css" rel="stylesheet">
    
    
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
              <a class="navbar-brand" href="/dash"><img src="/img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/student">Student</a></li>
                    <li><a href="/counselor">High School Counselor</a></li>
                    <li><a href="/university">Universities and Colleges</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li>
                        <img class="img-thumbnail" style="height:auto; width:auto; max-width:50px; max-height:50px;" src="/img/q.jpg">
                        <font class="userfont">{{ $data['user']->first_name }} {{ $data['user']->last_name }}</font>
                    </li>
                  </ul>   
            </div><!--/.navbar-collapse -->
          </div>
        </div>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                </li>
                <br>
                <li><a href="/dash"><i class="fa fa-lg fa-fw fa-home" id="icon"></i>Home</font></a></li>
                <li><a href="student-inbox.html"><i class="fa fa-lg fa-fw fa-inbox" id="icon"></i> Inbox</font></a></li>
                <li><a href="/student/show"><i class="fa fa-lg fa-fw fa-picture-o" id="icon"></i>View Profile</font></a></li>
                <li><a class="active" href="/student/edit"><i class="fa fa-lg fa-fw fa-pencil-square-o" id="icon"></i>Edit Profile</font></a></li>
                <li><a href="student-addg.html"><i class="fa fa-lg fa-fw fa-check" id="icon"></i>Add Grades</font></a></li>
                <li><a href="student-drop.html"><i class="fa fa-lg fa-fw fa-cloud-upload" id="icon"></i>Upload Documents</font></a></li>
                <li><a href="student-search.html"><i class="fa fa-lg fa-fw fa-search" id="icon"></i>Search for Schools</font></a></li>
                <li><a href="/student/password"><i class="fa fa-lg fa-fw fa-lock" id="icon"></i>Change Password</font></a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <br>
            <br>
            <div class="page-content inset">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Password</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" onsubmit="infoModal('password')" id="change-password-form" >
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
                                         <input type="password" name="currpass" id="currpass" class="form-control input-sm" placeholder="Current Password">
                                    </div>
                                </div>
                            </div>
                            <hr>
                                <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
                                                 <input type="password" name="newpass1" id="newpass1" class="form-control input-sm" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-append fa fa-lock"></i></span>
                                                 <input type="password" name="newpass2" id="newpass2" class="form-control input-sm" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">
                                    Submit
                        </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-header">
                    <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i>Click to view menu</a>
            </div>
        </div>

    </div>

    <!-- JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/tooltips.js"></script>
    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
</body>

</html>
