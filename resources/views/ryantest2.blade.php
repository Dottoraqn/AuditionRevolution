@extends('layouts.master')

@section('title', 'Welcome to Audition Revolution')

@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/transition.js"></script>

<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('#carousel-example-generic').carousel('cycle'){
      interval: 3000
    })
  });    
</script>

<style type="text/css">
  /*bg color #183145 AudRevOrange #ff7b34 white #ffffff black #000000 purpBlue #5468ff blueBlue #0035f9 */
  #pageContainer {
    /*background-color: #183145;*/
    margin: auto;
    width: 90%;
    height: 500px;
    overflow: hidden; /*before custom scrollbar, use "scroll"*/
    font-size: 2.35em;
    color: #ffffff; /*font color*/
    text-shadow: 1px 1px #000000;
  }
  /*.p {
    color: #ff7b34;
  }*/
	#about {
		background-image: url("img/land7t.png");
    background-position: center;
    margin: auto;
    height: 500px;
	}
  #features{
    background-image: url("img/land1t.png");
    margin: auto;
    height: 500px;
  }
  #profile {
    background-image: url("img/land6.jpg");
    margin: auto;
    height: 500px;
  }
  #productions {
    background-image: url("img/land2.jpg");
    margin: auto;
    height: 500px;
  }
  #join {
    background-image: url("img/land5.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: auto;
    height: 500px;
  }
	.carousel-inner {
		height: 500px;
	}
</style>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/land7t.png" alt="...">
        <!--About Slide-->
        <div class="carousel-caption">
          <p>Audition Revolution is the premiere web service for the performing arts industry. Built from the ground up to connect 
          talent to production companies and streamline the audtion process, Audition Revolution features an easily searchable database for talent
          to locate upcoming local productions and follow top companies, and for companies to attract and acquire a perfect cast.</p>
        </div>
      </div>
      <!--Features Slide-->
      <div class="item">
        <img src="img/land1t.png" alt="...">
        <div class="carousel-caption">
          <p>The heart of Audition Revolution is our database of talent profiles and production-hosted events. Locate auditions near you or secure 
          the best possible talent for your production with ease by using our integrated tagging system in your searches. Talent profiles are automatically
          associated with events to ease the logistics of managing an audition event and increasing communication among involved parties. </p>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

	<div id="pageContainer" >

		<!--Section for general info/elevator pitch for AR-->
		<div id="about">
		</div>

		<!--Section for database features-->
		<div id="features">
			
		</div>

		<!--Section for profile demonstration-->
		<div id="profile">
			<p>Audition Revolution's profile creator lets talent easily generate a professional resume-style page to elevate talent to the highest 
      potential. Pre-defined attribute fields tie into Audition Revolution's powerful tag-based search while media uploads and open-ended 
      descriptors allow performers to express unique qualities, increasing marketability and retaining individuality.</p>
		</div>

		<!--Section for production demonstration-->
		<div id="productions">
			Audition Revolution gives production companies powerful means in which to engage talent and run audition events smoothly. Applications are associated
      automatically with talent profiles, allowing managers to facilitate all traditional audition functions with newfound agility. Manage sign-ins 
      and callbacks with ease, confirm appointments, notify staff and talent of critical information, and make a final casting call all within the Audition
      Revolution app.
		</div>

		<!--For user to go ahead and create account. Have some buttons or search-->
		<div id="join">
			Be part of the Revolution. Join now.
		</div>
	</div><!--/pageContainer-->
@endsection