@extends('template')

@section('main')
  <div id="homepage">

	<div class="col-lg-12">
		<div class="col-lg-6" align="center">
			<h1>Jadwal Sholat</h1>
			<h4>Masjid Alumnni IPB</h4>

			<div class="your-clock"></div>

      <h2>Dzuhur</h2>
      <div class="clock"></div>

			<div align="center" id="table"></div>

		</div/>
		<div class="col-lg-6">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>-->

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="{{ asset('images/kajian.jpeg') }}" alt="Los Angeles">
				</div>

				<div class="item">
				  <img src="{{ asset('images/kajian2.jpeg') }}" alt="Chicago">
				</div>

				<div class="item">
				  <img src="{{ asset('images/cinque.jpeg') }}" alt="New York">
				</div>
			  </div>

			  <!-- Left and right controls
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a-->
			</div>

		</div>
	</div>

	<div class="col-sm-12" id="run-text">
		<marquee behavior="scroll" direction="left">LURUSKAN SHAFF ANDA KETIKA SHOLAT BERJAMAAH !</marquee>
	</div>

  </div>
@stop
