<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Create Program</title>

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
					<h2 class="geex-content__header__title">CEMA | New Program</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>
				</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
@include('includes.haction')
			</div>

			<div class="geex-content__section geex-content__form">
                <div class="geex-content__form__wrapper">
                    <div class="geex-content__form__wrapper__item geex-content__form__left">
                        <form action="{{ route('programs.store') }}" method="POST">
                            @csrf
            
                            <div class="geex-content__form__single__box mb-20">
                                <div class="input-wrapper">
                                    <label for="geex-input5" class="input-label">Program Name</label>
                                    <input placeholder="New Program Name" name="name" class="form-control" id="geex-input5" required />
                                </div>
                            </div>
            
                            <div class="geex-content__form__single mb-20">
                                <h4 class="geex-content__form__single__label">Description (Optional)</h4>
                                <div class="geex-content__form__single__box">
                                    <textarea class="form-control" name="description" id="geex-textarea1" rows="5"></textarea>
                                </div>
                            </div>
            
                            <div class="geex-content__form__single__box mb-20">
                                <label for="doctor_id" class="form-label">Assign to Doctor</label>
                                <select name="doctor_id" id="doctor_id" class="form-select" required>
                                    <option value="">-- Select Doctor --</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->email }})</option>
                                    @endforeach
                                </select>
                            </div>
            
                            <button type="submit" class="btn btn-success w-100">Create Program</button>
                        </form>
                    </div>
                </div>
            </div>
            
		</div>
	</main>

	<!-- inject:js-->
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-ui.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/main.js') }}"></script>
	<!-- endinject-->
</body>

</html>