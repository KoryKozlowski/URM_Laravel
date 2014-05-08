<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/img/favicon/favicon.ico">
    <title>URM</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/css/sidebar.css" rel="stylesheet">
    <link href="/css/todo-list.css" rel="stylesheet">
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
                <li><a href="/password"><i class="fa fa-lg fa-fw fa-lock" id="icon"></i>Change Password</font></a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <br>
            <br>
            <br>
            <form class="form-horizontal" role="form" id="editform" method="post" action="/student/{{ $data[‘student’]->id }}"><input type="hidden" name="_method" value = "put"/>
                <div id="viewpro">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title">My Books:</h2>
                                </div>
                                <div class="panel-body">
                                    <div class="control-group">
                                        <label class="control-label" for="statement">Favorite Quote:</label>
                                        <div class="controls">
                                             <textarea rows="2" cols="50" id="statement" name="statement" form="editform"></textarea>
                                        </div> 
                                        <label class="control-label" for="PLAN">PLAN Score:</label>
                                        <div class="controls">
                                             <input type="number" id="PLAN" name="PLAN"/>
                                        </div>
                                        <label class="control-label" for="ACT">ACT Score:</label>
                                        <div class="controls">
                                             <input type="number" id="ACT" name="ACT"/>
                                        </div>
                                        <label class="control-label" for="SAT">SAT Score:</label>
                                        <div class="controls">
                                             <input type="number" id="SAT" name="SAT"/>
                                        </div>
                                        <label class="control-label" for="GPA">GPA:</label>
                                        <div class="controls">
                                             <input type="number" id="GPA" name="GPA"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">My Goods:</h2>
                            </div>
                                <div class="panel-body">
                                <div class="control-group" id="formSpace">
                                    <label class="control-label" for="clubs">Clubs/Leadership:</label>
                                    <div class="controls">
                                        <textarea rows="2" cols="50" name="clubs" id="clubs" form="editform"></textarea>
                                    </div>
                                    <label class="control-label" for="sports">Activities/Sports:</label>
                                    <div class="controls">
                                        <textarea rows="2" cols="50"id="sports" name="sports" form="editform"></textarea>
                                    </div>
                                    <label class="control-label" for="jobs">Jobs/Community Service:</label>
                                    <div class="controls">
                                        <textarea rows="2" cols="50" id="jobs" name="jobs" form="editform"></textarea>
                                    </div>
                                    <label class="control-label" for="aspiration">Career Aspirations:</label>
                                    <div class="controls">
                                        <textarea rows="2" cols="50" id="aspiration" name="aspiration" form="editform"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title">My Champions:</h2>
                                </div>
                                <div class="panel-body">
                                    <label class="control-label" for="champions">Champions:</label>
                                    <div class="controls">
                                        <textarea rows="10" cols="50" id="champions" name="champions" form="editform"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="left">
                        <div class="controls" id="submitButt">
                            <button class="btn btn-lg btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jqBootstrapValidation.js"></script>
    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
    <script>
        $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>
</body>

</html>
