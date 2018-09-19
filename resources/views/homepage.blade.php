@extends('template')

@section('main')
  <div id="homepage">
	  
	<div class="col-sm-12">
		<div class="col-sm-6">
			<h2>Homepage</h2>
			<p>Aplikasi <strong>laravelapp</strong> dibuat sebagai latihan mempelajari Laravel.</p>


			<div class="your-clock"></div>
			<div align="center" id="table"></div>
			
		</div/>
		<div class="col-sm-6">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

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
	
	<div class="col-sm-12">
		<p>Teks Baris panjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaang Teks Baris panjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaang Teks Baris panjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaang Teks Baris panjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaang Teks Baris panjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaang Teks Baris panjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaang 
		</p>
	</div>
	
  </div>
@stop

@section('footer')
  <div id="footer">
      <p>&copy; 2018 localhost:8000</p>
  </div>
@stop
