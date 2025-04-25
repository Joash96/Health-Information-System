<!doctype html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CEMA | Programs</title>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- inject:css-->
  <link rel="stylesheet" href="{{ asset('public/assets/vendor/css/bootstrap/bootstrap.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
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
					<h2 class="geex-content__header__title">CEMA | Programs</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>
				</div>
				
@include('includes.haction')
			</div>

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__section geex-content__section--transparent geex-content__todo">
						<div class="geex-content__todo__content tab-content custom-al" id="geex-todo-task-content">
							<div class="tab-pane fade show active" id="geex-todo-task-content-important">
								<div class="geex-content__todo__header custom-al">
									<div class="geex-content__todo__header__title">
                                        <a href="{{ route('programs.create') }}">
                                            <button class="geex-btn geex-btn--primary "><i class="uil-plus"></i> New Program</button>
                                        </a>
										
									</div>
                                   
									<ul class="nav nav-tabs geex-todo-tab geex-content__todo__header__filter" id="geex-todo-tab" role="tablist">
										
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_list_tab" class="" data-bs-toggle="tab" data-bs-target="#todo_list_content" type="button" role="tab" aria-controls="todo_list_content" aria-selected="false">
												<i class="uil-bars"></i>
											</a>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_grid_tab" class="active" data-bs-toggle="tab" data-bs-target="#todo_grid_content" type="button" role="tab" aria-controls="todo_grid_contant" aria-selected="false">
												<i class="uil-apps"></i>
											</a>
										</li>
									</ul>
								</div>
								 @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
									<div class="tab-pane fade show active" id="todo_grid_content" role="tabpanel" aria-labelledby="todo_grid_tab">

										<div class="row g-40">



                                            @forelse($programs as $program)

											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														
														<div class="action-area">
															
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="{{ route('programs.show', $program->id) }}">view</a>
																
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">{{ $program->name }}</h4>
														<span class="designation">CEMA Program</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
                                                                <i class="uil uil-notes"></i>
                                                                <p>About: {{ Str::limit($program->description, 100) }}</p>
                                                            </a>
                                                            <a href="#" class="single-contact">
                                                                <i class="uil uil-user-md"></i>
                                                                <p><small class="text-muted">Created by Dr. {{ $program->doctor->name }}</small></p>
                                                            </a>
                                                            
															
																<a href="{{ route('programs.show', $program->id) }}" class="btn btn-outline-primary mt-3 w-100">View Details</a>
															
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
                                            @empty
                                            <div class="col-12">
                                                <div class="alert alert-info">No programs found. Click the button above to add a new one.</div>
                                            </div>
                                        @endforelse




											
										</div>
									</div>
								</div>
								
							</div>
							
						</div>	
					</div>
					
				</div>
			</div>

			




		</div>
	</main>

	<!-- inject:js-->
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-ui.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js"></script>
	<script src="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="{{ asset('public/assets/js/main.js') }}"></script>
	<!-- endinject-->
</body>

</html>