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
          <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt="" height="364" >
          <!-- images go here alt if for other images they must be the same size as the about jumbotron-->
          <div class="carousel-caption">
            
          </div>
        </div>
        
        <div class="item">
          <!--copy and paste this to add more images-->
          <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt="">
          <!-- images go here alt if for other images they must be the same size as the about jumbotron-->
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <!--copy and paste this to add more images-->
          <img src="http://sectb.com/wp-content/uploads/2014/02/ID-Camp-Students.jpg" alt="">
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
      
        <div class="container fill">
          <!--
  <div class="row-fluid">
  <!--        
  <div class="span6">
  <!--put carasol here-->
          <!--                  
  </div>
  <div class="span6">
  -->
          <h1>
            <center>
              About us!
            </center>
          </h1>
          <p>
            UniversityRecruitMe is your innovative, cutting-edge online resource for students during their high school journey. UniversityRecruitMe is the forerunner of online forums for the next generation of college applicants. URM allows high school students the ability to promote themselves by communicating their experiences and achievements with their favorite Universities.
          </p>
          
          <!--     
  </div>
  <!-- this div is for span6 which covers the grid of 6-->
          <!-- 
  </div>
  <!--takes out of row-fluid-->
        </div>
        </div>
  </div>

  <div class="container col-md-12">
    
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>
          Students
        </h2>
        <p>
          
          <p>
            Each year, many high school students are not given the opportunity to excel in college, because they are judged merely on grades and enrollment figures. These students are further disadvantaged, because the recruitment process has changed considerably due to many schools’....  
        </p>
        <p>
          <a class="btn btn-default" href="#student.html" role="button">
            View details &raquo;
          </a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>
          High School Counselors
        </h2>
        <p>
          The high school counselor wears many hats and wears them all very well. We at UniversityRecruitMe strive to help you learn and manage your high school student’s activities in and out of the class room. By creating an innovative platform in which high school students can....  
        </p>
        <p>
          <a class="btn btn-default" href="#" role="button">
            View details &raquo;
          </a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>
          University Recruiters
        </h2>
        <p>
          The world of college admissions is more competitive than ever less time, less funds and less interaction with students. This tool will serve as resource to help you learn more knowledge of your applicants and give you another line of communication with them. The high school....
        </p>
        <p>
          <a class="btn btn-default" href="#" role="button">
            View details &raquo;
          </a>
        </p>
      </div>
    </div>
    
@stop

@section('script')
  <script>
    $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
  </script>
  <script type="text/javascript">
    $(function(){
      $("imageCarousel").carousel();
    });
  </script>
@stop
