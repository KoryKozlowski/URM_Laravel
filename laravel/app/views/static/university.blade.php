@extends('layouts.static')


@section('head')

<style type="text/css">

body {
  padding-top: 55;
}

img.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>

@stop

@section('content')

<!--carousel starts herre-->

<div class="row">
  <div id="imageCarousel" class="carousel slide col-xs-6" data-interval="2000" data-ride="carousel" data-pause="false">
    
    <!--data-ride="carousel"-->
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#imageCarousel" data-slide-to="0" class="active">
      </li>
      <li data-target="#imageCarousel" data-slide-to="1">
      </li>
      <li data-target="#imageCarousel" data-slide-to="2">
      </li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <!--copy and paste this to add more images-->
        <img src="http://dailyemerald.com/wp-content/uploads/2011/10/111007.aam_.vbc_.cal_.14951.jpg" alt="">
        <!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption">
          
        </div>
      </div>
      
      <div class="item">
        <!--copy and paste this to add more images-->
        <img src="http://dailyemerald.com/wp-content/uploads/2011/10/111007.aam_.vbc_.cal_.14951.jpg" alt="">
        <!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption">
          
        </div>
      </div>
      <div class="item">
        <!--copy and paste this to add more images-->
        <img src="http://dailyemerald.com/wp-content/uploads/2011/10/111007.aam_.vbc_.cal_.14951.jpg" alt="">
        <!-- images go here alt if for other images they must be the same size as the about jumbotron-->
        <div class="carousel-caption">
          
        </div>
      </div>
      
      
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href="#imageCarousel" data-slide="prev">
      <span class="icon-prev">
      </span>
      <!-- was--glyphicon glyphicon-chevron-left-->
    </a>
    <a class="right carousel-control" href="#imageCarousel" data-slide="next">
      <span class="icon-next">
      </span>
      <!-- was--glyphicon glyphicon-chevron-right-->
    </a>
  </div>
  
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron col-xs-6">
    <div class="container">
      <h1>
        <center>
          University
        </center>
      </h1>
      <p>
        The world of college admissions is more competitive than ever less time, less funds and less interaction with students. This tool will serve as resource to help you learn more knowledge of your applicants and give you another line of communication with them. The high school student has hundreds of opportunities to research and learn more about your university. Now, you have the ability to learn more about them. Student’s using UniversityRecruitMe will have the unique opportunity to professionally network with university personnel that serves a primary purpose of demonstrating why that student should be accepted to your institution. With the universities using this new resource to learn more about their potential students, retention rates should also see an improvement.  So Sign Up today to help Enhance your University’s Future..... 
        <h3>
          NOW!
      </h3>
    </p>
  </div>
</div>





@stop

@section('script')
  <script type="text/javascript">
    $("#nav-university").parent().addClass("active");
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
