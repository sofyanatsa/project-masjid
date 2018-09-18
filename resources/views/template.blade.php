<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaravelApp</title>

    {{--Memanggil Bootstrap.
      Komentar ini tidak akan ditampilkan di browser--}}
    <link href="{{ asset('bootstrap_3_3_6_dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flipclock.css') }}">

    <!--[if lt IE 9]
      <script src="{{ asset('http://localhost:8000/js/html5shiv_3_7_2.min.js') }}"></script>
      <script src="{{ asset('http://localhost:8000/js/respond_1_4_2.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      @include('navbar')
      @yield('main')
    </div>

    @yield('footer')

    <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_3_3_6_dist/js/bootstrap.min.js') }}"></script>

		<!-- <script src="{{ asset('js/libs/jquery.js') }}"></script> -->
		<script src="{{ asset('js/flipclock.min.js') }}"></script>
    <script>

    var clock;

    			$(document).ready(function() {
    				clock = $('.your-clock').FlipClock({
    					clockFace: 'TwentyFourHourClock'
    				});
    			});

    </script>
  </body>
</html>
