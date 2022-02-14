<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$page}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

	<!-- Ekka CSS -->
	<link id="ekka-css" href="{{ asset('assets/css/ekka.css')}}" rel="stylesheet" />
	<link href='{{ asset("assets/plugins/data-tables/datatables.bootstrap5.min.css")}}' rel='stylesheet'>
	<link href='{{ asset("assets/plugins/data-tables/responsive.datatables.min.css")}}' rel='stylesheet'>

</head>
<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">
    <div id="app">
        <div class="wrapper">
            @include('layouts.sidebar')
            <div class="ec-page-wrapper">
                @include('layouts.navbar')
                <main class="py-4">
                    @yield('content')
                </main>
            </div>    
        </div>
    </div>

	<!-- Common Javascript -->
	<script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/simplebar/simplebar.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/slick/slick.min.js')}}"></script>

	<!-- Chart -->
	<script src="{{ asset('assets/plugins/charts/Chart.min.js')}}"></script>
	<script src="{{ asset('assets/js/chart.js')}}"></script>

	<!-- Google map chart -->
	<script src="{{ asset('assets/plugins/charts/google-map-loader.js')}}"></script>
	<script src="{{ asset('assets/plugins/charts/google-map.js')}}"></script>

	<!-- Date Range Picker -->
	<script src="{{ asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{ asset('assets/js/date-range.js')}}"></script>

	<script src='{{ asset("assets/plugins/data-tables/jquery.datatables.min.js")}}'></script>
	<script src='{{ asset("assets/plugins/data-tables/datatables.bootstrap5.min.js")}}'></script>
	<script src='{{ asset("assets/plugins/data-tables/datatables.responsive.min.js")}}'></script>

	<!-- Option Switcher -->
	<script src="{{ asset('assets/plugins/options-sidebar/optionswitcher.js')}}"></script>

	<!-- Ekka Custom -->

	<script>
		var input = document.getElementsByClassName("query")[0];
		input.addEventListener("keyup", function(event) {
		if (event.keyCode === 13) {
		event.preventDefault();

		let value = document.getElementsByClassName('query')[0].value
		if (value == '') {
			return window.location.href = '/'
		}
		window.location.href = '/get/user/' + value
		}
		});
	</script>
	<script src="{{ asset('assets/js/ekka.js')}}"></script>    
</body>
</html>
