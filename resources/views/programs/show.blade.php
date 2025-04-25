<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Program Details</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="{{ asset('public/assets/vendor/css/bootstrap/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	<!-- endinject -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicon.png') }}">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
	
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>	
</head>

<body class="geex-dashboard">
	

	
    @include('includes.header')



    <main class="geex-main-content">
		

@include('includes.sidebar')
	
 
		
@include('includes.customizer')

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">CEMA | Program Details</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>
				</div>
				
@include('includes.haction')
			</div>

			<div class="geex-content__section geex-content__form">
				<div class="geex-content__form__wrapper">
					<div class="geex-content__form__wrapper__item geex-content__form__left">
						
						<div class="geex-content__form__single d-flex gap-20 justify-content-between">
							<div class="geex-content__form__single__left">
								<h4 class="geex-content__form__single-action__label">{{ $program->name }}</h4>	
								<p class="geex-content__form__single-action__text">Welcome to Geex Modern Admin Dashboard</p>
							</div>
							
						</div>

                        <div class="geex-content__form__single d-flex gap-20 justify-content-between">
							<div class="geex-content__form__single__left">
								<h4 class="geex-content__form__single-action__label">Description</h4>	
								<p class="geex-content__form__single-action__text">{{ $program->description ?? 'No description provided.' }}</p>
							</div>
							
						</div>



                        <div class="geex-content__form__single d-flex gap-20 justify-content-between">
							<div class="geex-content__form__single__left">
								<h4 class="geex-content__form__single-action__label">Assigned Doctor</h4>	
								<p class="geex-content__form__single-action__text">{{ $program->doctor->name ?? 'Not Assigned' }} ({{ $program->doctor->email ?? 'N/A' }})</p>
							</div>
							
						</div>


                        <div class="geex-content__form__single d-flex gap-20 justify-content-between">
							<div class="geex-content__form__single__left">
								<h4 class="geex-content__form__single-action__label">Enrolled Clients</h4>	
                               @if($program->enrollments->isEmpty())
    <p>No clients enrolled in this program.</p>
@else
    <ul class="list-group">
        @foreach($program->enrollments as $enrollment)
            <li class="list-group-item">
                {{ $enrollment->client->name }} - {{ $enrollment->client->phone }}
            </li>
        @endforeach
    </ul>
@endif

							</div>
							
						</div>







						<div class="geex-content__form__single d-flex gap-20 justify-content-between">
							<div class="geex-content__form__single__left">
								<p class="geex-content__form__single__text">Program Data</p>
							</div>
							<div class="geex-content__form__single__right d-flex gap-20">
                                <a href="{{ route('programs.index') }}" class="btn btn-secondary mt-3">Back to Programs</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- inject:js-->
	<script src=".{{ asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-ui.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/main.js') }}"></script>
	<!-- endinject-->
</body>

</html>