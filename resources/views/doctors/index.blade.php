<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Doctors</title>

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
					<h2 class="geex-content__header__title">CEMA | Doctors</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>

				</div>
				
@include('includes.haction')
			</div>

            <div class="geex-content__todo__header custom-al">
                <div class="geex-content__todo__header__title">
                    <a href="{{ route('doctors.create') }}">
                        <button class="geex-btn geex-btn--primary "><i class="uil-plus"></i> New Doctor</button>
                    </a>
                    
                </div>
               
               
            </div>
            <form action="{{ route('doctors.index') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control " style="border: 1px solid purple;" placeholder="Search by name or phone" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </form>
        
            @if($doctors->isEmpty())
                <div class="alert alert-info">No doctors found.</div>
            @else

			<div class="geex-content__section geex-content__form table-responsive" style="overflow-x: auto;">
    <table class="table-reviews-geex-1" style="min-width: 1000px;">
        <thead>
            <tr style="width: 100%;">
                <th style="width: 20%;">#</th>
                <th style="width: 20%;">Name</th>
                
                <th style="width: 20%;">Email</th>
                
                <th style="width: 20%;">Actions</th>
            </tr>
        </thead>
        <tbody class="">
            


            @foreach($doctors as $index => $doctor)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>
                    <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this doctor?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



            @endif
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





















