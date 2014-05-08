@extends('layouts.static')


@section('head')
<style type="text/css">

body {
  padding-top: 100px;
}

</style>
@stop

@section('content')

  <div class="container">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><center>Contact us!</center></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h2>Address:</h2>
        <p>4578 Elm Street</p>
        <p>Memphis, TN 38111</p>
      </div>
      <div class="col-md-4">
      <h2>Email:</h2>
        <p>UniversityRecruitMe@Gmail.com</p>
      </div>
      <div class="col-md-4">
        <h2>Phone Number:</h2>
        <p>(901)-123-4567</p>
      </div>
    </div>
  </div>

@stop

@section('script')
  <script type="text/javascript">
    $("#nav-contact").parent().addClass("active");
  </script>
  <script>
    $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
  </script>
  <script type="text/javascript">
    $(function(){
      $("imageCarousel").carousel();
    });
  </script>
@stop
