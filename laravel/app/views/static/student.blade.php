@extends('layouts.static')


@section('head')
<style type="text/css">

body {
  padding-top: 55px;
}

</style>
@stop

@section('content')

  <!--carousel starts herre-->
  <div id="imageCarousel" class="carousel slide col-xs-6"data-interval="2000" data-ride="carousel" data-pause="false"> <!--data-ride="carousel"-->
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#imageCarousel" data-slide-to="1"></li>
      <li data-target="#imageCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active"><!--copy and paste this to add more images-->
        <img src="http://www.girardcollege.edu/uploaded/photos/Webpage_images/artmuseum2012-thumb.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption"></div>
      </div>
      <div class="item"><!--copy and paste this to add more images-->
        <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption"></div>
      </div>
      <div class="item"><!--copy and paste this to add more images-->
        <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption"></div>
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
    <div class="container">
      <h1><center>Student</center></h1>     
      <p>Each year, many high school students are not given the opportunity to excel in college, 
        because they are judged merely on grades and enrollment figures. These students are further 
        disadvantaged, because the recruitment process has changed considerably due to many 
        schools’ budgets being diminished in recent years. The landscape of recruiting students 
        to institutions of higher education has changed, and more schools are seeking to learn as 
        much as possible about the students they are recruiting. UniversityRecruitMe will allow high 
        school students to create a professional profile, in which they can present themselves to
         interested universities! So sign up today to Enhance your Future….<h2><center>NOW!</center></h2></p>
    </div>
  </div>

@stop

@section('script')
  <script type="text/javascript">
    $("#nav-student").parent().addClass("active");
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
