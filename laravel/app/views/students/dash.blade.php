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
			  <a class="navbar-brand" href="/student-dash.html"><img src="/img/logo_2.png"><font color="#fcb040"> University Recruit Me</font></a>
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
						<font class="userfont"> {{ $data['user']->first_name }} {{ $data['user']->last_name }} </font>
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
                <li class="active"><a href="/dash"><i class="fa fa-lg fa-fw fa-home" id="icon"></i>Home</font></a></li>
				<li><a href="/student-inbox.html"><i class="fa fa-lg fa-fw fa-inbox" id="icon"></i> Inbox</font></a></li>
				<li><a href="/student-vprofile.html"><i class="fa fa-lg fa-fw fa-picture-o" id="icon"></i>View Profile</font></a></li>
				<li><a href="/student-eprofile.html"><i class="fa fa-lg fa-fw fa-pencil-square-o" id="icon"></i>Edit Profile</font></a></li>
				<li><a href="/student-addg.html"><i class="fa fa-lg fa-fw fa-check" id="icon"></i>Add Grades</font></a></li>
				<li><a href="/student-drop.html"><i class="fa fa-lg fa-fw fa-cloud-upload" id="icon"></i>Upload Documents</font></a></li>
				<li><a href="/student-search.html"><i class="fa fa-lg fa-fw fa-search" id="icon"></i>Search for Schools</font></a></li>
				<li><a href="/student-epass.html"><i class="fa fa-lg fa-fw fa-lock" id="icon"></i>Change Password</font></a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            
            
            <!--<div class= "jumbotron col-xs-6 col-xs-6">-->
            <div class="container col-xs-6 col-xs-6" id="main">
<h3>Your To-Do List</h3>
<form role ="form" id="main_input_box">
<label>
<input type="text" class ="form-control" id="custom_textbox" name="Item" placeholder="What do you need to do?">
<input type="submit" value="Add" class="btn btn-primary add_button">
</label>
</form>
<form>
<ol class="list-group list_of_items">
</ol>
</form>
</div>


			<br>
			<br>
            <div class="page-content inset">
            </div>
			<br>
			<div class="content-header">
                    <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i>Click to view menu</a>
            </div>
        </div>

    </div>
    </div><!-- end of jumbotron-->
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
    
    
    <!--To do list JQ starts here-->
    
    <script>
	
	
    $(document).ready(function(){
$("form#main_input_box").submit(function(event){
event.preventDefault();
var deleteButton = "<button class='delete btn btn-warning'>Delete</button>";
var editButton = "<button class='edit btn btn-success'>Edit</button>";
var twoButtons = "<div class='btn-group pull-right'>" + deleteButton + editButton + "</div>";
var checkBox = "<div class='checkbox'><label><input type='checkbox' class='pull-right'></label></div>";
$(".list_of_items").append("<li class='list-group-item'>" + "<div class='text_holder'>" + $("#custom_textbox").val() + twoButtons + "</div>" + checkBox + "</li>");
$("#custom_textbox").val('');
});
 
$(".list_of_items").on("click", "button.delete", function(){
$(this).closest("li").remove();
});
 
$(".list_of_items").on("click", "button.edit", function (){
var editItemBox = "<form class='edit_input_box'><input type='text' class='itembox'></form>";
var originalItem = $(this).parent().val();
var deleteButton = "<button class='delete btn btn-warning'>Delete</button>";
var editButton = "<button class='edit btn btn-success'>Edit</button>";
var twoButtons = "<div class='btn-group pull-right'>" + deleteButton + editButton + "</div>";
$(this).closest("div.text_holder").replaceWith(editItemBox);
$("form.edit_input_box ").on("submit", function(){
event.preventDefault(); 
var checkBox = "<label><input type='checkbox'></label>";
$(this).replaceWith("<div>" + $(".itembox").val() + twoButtons + "</div>");
}); 
});
 
$(".list_of_items").on("click", ":checkbox", function (){
$(this).closest("li").toggleClass("completed_item");
});
});

    </script>
</body>

</html>
