@extends('layouts.static')


@section('head')

@stop

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron col-xs-6">
    <div class="container">
      <h1><center>Counselor</center></h1>
      <p>The high school counselor wears many hats and wears them all very well. We at UniversityRecruitMe strive to help you learn and manage your high school student’s activities in and out of the class room. By creating an innovative platform in which high school students can professionally network with college and university administrators. This will give them resources to build their brand at an early age and make the more marketable to colleges during the application process. Last but not least this will also serve as a personal data management tool for students throughout their high school career. As early as their freshman year, that can begin Enhancing their.... <h3>Future!</h3> </p>
    </div>
  </div>

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
        <img src="http://www.girardcollege.edu/uploaded/photos/Webpage_images/artmuseum2012-thumb.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption"></div>
      </div>
      <div class="item"><!--copy and paste this to add more images-->
        <img src="http://www.girardcollege.edu/uploaded/photos/Webpage_images/artmuseum2012-thumb.jpg" alt=""><!-- images go here alt if for other images they must be the same size as the about jumbotron-->
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

@stop

@section('script')
  <script type="text/javascript">
    $("#nav-counselor").parent().addClass("active");
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
