@extends('layouts.static')


@section('head')

<style type="text/css">

body {
  padding-top: 100px;
}

img.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>

@stop

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-6">
      <p class="lead">UniversityRecruitMe is your innovative, cutting-edge online resource 
        for students during their high school journey.UniversityRecruitMe is the forerunner
         of online forums for the next generation of college applicants. URM allows high school 
         students the ability to promote themselves by communicating their experiences and 
         achievements with their favorite Universities. This will also allow college admissions 
         counselors access to a more complete applicant profile. </p>
    </div>

    <div class="container col-xs-6">
      <img class="center" src="img/URM_Logo.png">
      <img class="center" src="img/u3849-4.png">
    </div>
  </div>

</div>






@stop

@section('script')
  <script type="text/javascript">
    $("#nav-about").parent().addClass("active");
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
