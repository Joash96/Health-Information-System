<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Edit Client</title>

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
					<h2 class="geex-content__header__title">CEMA | Edit Client</h2>
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
                        <form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="geex-content__form__single__box mb-20">
        <div class="input-wrapper">
            <label for="name" class="input-label">Client Full Name</label>
            <input 
                name="name" 
                class="form-control" 
                id="name" 
                required 
                value="{{ old('name', $client->name) }}" 
                placeholder="Client Name"
            />
        </div>
    </div>

    <div class="geex-content__form__single__box mb-20">
        <div class="input-wrapper">
            <label for="phone" class="input-label">Client's Phone Number</label>
            <input 
                name="phone" 
                class="form-control" 
                id="phone" 
                required 
                value="{{ old('phone', $client->phone) }}" 
                placeholder="Phone Number"
            />
        </div>
    </div>

    <div class="geex-content__form__single__box mb-20">
        <label for="gender" class="form-label">Client Gender</label>
        <select name="gender" id="gender" class="form-select" required>
            <option value="">Select gender</option>
            <option value="Male" {{ $client->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $client->gender == 'Female' ? 'selected' : '' }}>Female</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary w-100">Update Client</button>
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