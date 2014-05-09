@extends('layouts.authenticated')

@section('head')
	<link href="/css/todo-list.css" rel="stylesheet">
@stop

@section('content')
	<div id="wrapper">
  
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
      </li>
      <br>
      <li class="active">
        <a href="/dash">
          <i class="fa fa-lg fa-fw fa-home" id="icon">
          </i>
          Home
        </a>
      </li>
      <li>
        <a href="/student-inbox.html">
          <i class="fa fa-lg fa-fw fa-inbox" id="icon">
          </i>
          Inbox
        </a>
      </li>
      <li>
        <a href="/student/show">
          <i class="fa fa-lg fa-fw fa-picture-o" id="icon">
          </i>
          View Profile
        </a>
      </li>
      <li>
        <a href="/student/edit">
          <i class="fa fa-lg fa-fw fa-pencil-square-o" id="icon">
          </i>
          Edit Profile
        </a>
      </li>
      <li>
        <a href="/student-addg.html">
          <i class="fa fa-lg fa-fw fa-check" id="icon">
          </i>
          Add Grades
        </a>
      </li>
      <li>
        <a href="/student-drop.html">
          <i class="fa fa-lg fa-fw fa-cloud-upload" id="icon">
          </i>
          Upload Documents
        </a>
      </li>
      <li>
        <a href="/student-search.html">
          <i class="fa fa-lg fa-fw fa-search" id="icon">
          </i>
          Search for Schools
        </a>
      </li>
      <li>
        <a href="/student/password">
          <i class="fa fa-lg fa-fw fa-lock" id="icon">
          </i>
          Change Password
        </a>
      </li>
    </ul>
  </div>
  
  <!-- Page content -->
  <div id="page-content-wrapper">
    <!-- Keep all page content within the page-content inset div! -->
    
    
    <!--
<div class= "jumbotron col-xs-6 col-xs-6">
-->
  <div class="container col-xs-6 col-xs-6" id="main">
    <h3>
      Your To-Do List
    </h3>
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
    <a id="menu-toggle" href="#" class="btn btn-default">
      <i class="icon-reorder">
      </i>
      Click to view menu
    </a>
  </div>
  </div>
  
</div>
<!-- end of jumbotron-->
@stop



@section('script')

<!-- Custom JavaScript for the Menu Toggle -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
});
</script>
    
    
<!--To do list JQ starts here-->
 <script>
    $(document).ready(function ()
    {
        $("form#main_input_box").submit(function (event)
        {
            event.preventDefault();
            var deleteButton = "<button class='delete btn btn-warning'>Delete</button>";
            var editButton = "<button class='edit btn btn-success'>Edit</button>";
            var twoButtons = "<div class='btn-group pull-right'>" + deleteButton + editButton + "</div>";
            var checkBox = "<div class='checkbox'><label><input type='checkbox' class='pull-right'></label></div>";
            $(".list_of_items").append("<li class='list-group-item'>" + "<div class='text_holder'>" + $("#custom_textbox").val() + twoButtons + "</div>" + checkBox + "</li>");
            $("#custom_textbox").val('');
        });

        $(".list_of_items").on("click", "button.delete", function ()
        {
            $(this).closest("li").remove();
        });

        $(".list_of_items").on("click", "button.edit", function ()
        {
            var editItemBox = "<form class='edit_input_box'><input type='text' class='itembox'></form>";
            var originalItem = $(this).parent().val();
            var deleteButton = "<button class='delete btn btn-warning'>Delete</button>";
            var editButton = "<button class='edit btn btn-success'>Edit</button>";
            var twoButtons = "<div class='btn-group pull-right'>" + deleteButton + editButton + "</div>";
            $(this).closest("div.text_holder").replaceWith(editItemBox);
            $("form.edit_input_box ").on("submit", function ()
            {
                event.preventDefault();

                var checkBox = "<label><input type='checkbox'></label>";
                $(this).replaceWith("<div>" + $(".itembox").val() + twoButtons + "</div>");
            });

        });

        $(".list_of_items").on("click", ":checkbox", function ()
        {
            $(this).closest("li").toggleClass("completed_item");
        });
    });
</script>

@stop