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
              <a class="navbar-brand" href="student-dash.html"><img src="img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/student">Student</a></li>
                    <li><a href="/counselor">High School Counselor</a></li>
                    <li><a href="/university">Universities and Colleges</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li>
                        <img class="img-thumbnail" style="height:auto; width:auto; max-width:50px; max-height:50px;" src="img/q.jpg">
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
                <li class="active"><a href="/show"><i class="fa fa-lg fa-fw fa-picture-o" id="icon"></i>View Profile</font></a></li>
                <li><a href="/edit"><i class="fa fa-lg fa-fw fa-pencil-square-o" id="icon"></i>Edit Profile</font></a></li>
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

            <div class="jumbotron" id="jumbopad">
                <div class="container">
                    <table class="jumbo">
                        <tr>
                            <td align="left"><img class="img-thumbnail" style="height:auto; width:auto; max-width:200px; max-height:200px;" src="img/q.jpg"></td>
                            <td align="right">
                                <p><h3>{{ $data['student']->statement }}</p> 
                            </td>
                            <td align="right">
                                <p><h3>{{ $data['user']->first_name }} {{ $data['user']->last_name }}</h3></p>
                                <p>School: <a href="{{ $data['school']->website }}">{{ $data['school']->name }}</a></p>
                                <p>Memphis, TN</p>
                            </td>
                            
                        </tr>
                    </table>
                </div>
            </div>
            <div id="viewpro">
            <div class="btn-group" id="classbut">
                <button type="button" class="btn btn-default">Freshman</button>
                <button type="button" class="btn btn-default">Sophomore</button>
                <button type="button" class="btn btn-default">Junior</button>
                <button type="button" class="btn btn-active">Senior</button>
            </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">My Books:</h2>
                            </div>
                            <div class="panel-body">
                                <p>ACT Score: {{ $data['student']->ACT }}</p>
                                <p>SAT Score: {{ $data['student']->SAT }}</p>
                                <p>GPA: {{ $data['student']->GPA }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">My Goods:</h2>
                            </div>
                            <div class="panel-body">
                                <p>Clubs/Leadership:</p>
                                    <ul>
                                        <li>Bata Club</li>
                                        <li>Chess club</li>
                                        <li>NHS</li>
                                    </ul>
                                <p>Activities/Sports:</p>
                                    <ul>
                                        <li>Football</li>
                                        <li>Baseball</li>
                                    </ul>
                                <p>Jobs/Community Service:</p>
                                    <ul>
                                        <li>Works at Office Depot</li>
                                    </ul>
                                <p>Career Aspirations:</p>
                                    <ul>
                                        <li>Wants to be construction worker</li>
                                    </ul>
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
                                <ul>
                                    <li>Bill - Manager at Office Depot. He is a great worker! I love John <3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">My Files:</h2>
                            </div>
                            <div class="panel-body">
                                <p><a href="#">Resume</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-10">
                            <h3>Pro Status:</h3>
                            <div class="progress progress-striped active">
                              <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%">
                                <span class="sr-only">45% Complete</span>
                              </div>
                            </div>
                        </div>
                    </div>
            <div class="content-header">
                <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i>Click to view menu</a>
            </div>
        </div>
    </div>      
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
</body>

</html>
