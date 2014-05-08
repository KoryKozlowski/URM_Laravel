@extends('layouts.authenticated')

@section('head')
	<link href="/css/todo-list.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-top: 100px;
    }
  </style>
@stop

@section('content')
<div class="container">
  <legend>
    Sign up with University Recruit Me!
  </legend>
  <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8" style="float:left">
    <form id="signup" method="post" action="/student">
      <div class="row">
        <div class="control-group col-xs-6 col-sm-6 col-md-6">
          <div class="controls">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="icon-append fa fa-user">
                </i>
              </span>
              <input type="text" class="form-control input" id="first_name" name="first_name" placeholder="First Name" 
              required data-validation-required-message="First name required">
            </div>
            <p class="help-block">
            </p>
          </div>
    </div>
          <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="controls">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="icon-append fa fa-user">
                  </i>
                </span>
                <input type="text" class="form-control input" id="last_name" name="last_name" placeholder="Last Name" 
                required data-validation-required-message="Last name required">
              </div>
              <p class="help-block">
              </p>
          </div>
          </div>
          </div>
          <div class="row">
            <div class="control-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="controls">
          <div class="input-group">
                  <span class="input-group-addon">
                    <i class="icon-append fa fa-envelope">
                    </i>
                  </span>
                  <input type="email" class="form-control input" id="email" name="email" placeholder="Email" 
                  required data-validation-required-message="Email required">
              </div>
              <p class="help-block">
              </p>
  </div>
          </div>
          </div>
          <div class="row">
            <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="controls">
          <div class="input-group">
                  <span class="input-group-addon">
                    <i class="icon-append fa fa-lock">
                    </i>
                  </span>
                  <input type="Password" id="password" class="form-control input" name="password" placeholder="Password" 
                  required data-validation-required-message="Password required">
              </div>
              <p class="help-block">
              </p>
  </div>
          </div>
          <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="controls">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="icon-append fa fa-lock">
                  </i>
                </span>
                <input type="Password" id="confirm_password" class="form-control input" name="confirm_password" placeholder="Re-enter Password"
                required data-validation-required-message="You must confirm your password"
                data-validation-match-match="password"
                data-validation-match-message="Password does not match">
              </div>
              <p class="help-block">
              </p>
          </div>
          </div>
          </div>
          <div class="row">
            <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="controls">
              <label for="userType" class="control-label input-group">
                  Who are you?
              </label>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                  <input type="radio" name="student" value="student">
                  Student
                </label>
                <label class="btn btn-default">
                  <input type="radio" name="unirep" value="unirep">
                  University Rep
                </label>
                <label class="btn btn-default">
                  <input type="radio" name="counselor" value="counselor" checked="">
                  Counselor
                </label>
              </div>
          </div>
          </div>
          <br>
          <div class="control-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="controls">
              <label class="checkbox">
                <input type="checkbox" name="terms-and-conditions" required 
                data-validation-required-message="You must agree to the terms and conditions" />
                I agree to the 
                <a href="terms" id="termText" target="_blank">
                  Terms and Conditions 
                </a>
              </label>
              <p class="help-block">
              </p>
          </div>
          </div>
          </div>
          <hr>
          <div class="row">
            <div class="control-group col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div class="controls">
                <button type="submit" class="btn btn-success" >
                  Create My Account
                </button>
              </div>
            </div>
          </div>
    </form>
  </div>
  <div class="container col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="row">
      <center>
        <img src="/img/URM_Logo.png" class="img-responsive" alt="Responsive image">
      </center>
    </div>
    <div class="row">
      <center>
        <img src="/img/u3849-4.png" class="img-responsive" alt="Responsive image">
      </center>
    </div>
  </div>
</div>

@stop



@section('script')
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/tooltips.js"></script>
<script>
      $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
  </script>
    <script type="text/javascript">
$(function(){
     $("imageCarousel").carousel();
});
</script>

@stop