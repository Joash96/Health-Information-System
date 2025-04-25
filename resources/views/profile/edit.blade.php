<!doctype html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CEMA | Account Profile</title>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- inject:css-->
  <link rel="stylesheet" href="{{ asset('public/assets/vendor/css/bootstrap/bootstrap.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
					<h2 class="geex-content__header__title">CEMA | My Profile</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>

				</div>
				
@include('includes.haction')
			</div>

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<button class="geex-btn geex-btn__toggle-task">
						<i class="uil-user"></i> Client Profile
					</button>
					<div class="geex-content__section geex-content__section--transparent geex-content__todo">
						<div class="geex-content__todo__sidebar">
							<div class="geex-content__todo__sidebar__label">
								
								
								<ul class="nav nav-tabs geex-content__todo__sidebar__tab mb-20" id="geex-todo-task-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="php-tab" data-bs-toggle="tab" href="#php-content" role="tab" aria-controls="php-content" aria-selected="true">Profile Info</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="programs-tab" data-bs-toggle="tab" href="#programs-content" role="tab" aria-controls="programs-content" aria-selected="false">
											<i class="uil-file-alt"></i> Password
										</a>
									</li>


									<li class="nav-item" role="presentation">
										<a class="nav-link" id="programs-tab2" data-bs-toggle="tab" href="#programs-content2" role="tab" aria-controls="programs-content2" aria-selected="false">
											<i class="uil-file-alt"></i> Account
										</a>
									</li>


									
									
								</ul>
							</div>
						</div>
						
						<div class="geex-content__todo__content tab-content" id="geex-todo-task-content">
							<div class="tab-pane fade show active" id="php-content" role="tabpanel" aria-labelledby="php-tab">
								<div class="geex-content__todo__header">
									<div class="geex-content__todo__header__title">
										<i class="uil-user"></i>
										<h4>Profile Information</h4>
									</div>
								</div>
								<div class="tab-content geex-transaction-content">
									<div class="tab-pane fade show active" id="todo_list_content" role="tabpanel" aria-labelledby="todo_list_tab">
										<div class="geex-content__todo__list">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__text">
													

													@include('profile.partials.update-profile-information-form')
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- Programs Tab -->
<div class="tab-pane fade" id="programs-content" role="tabpanel" aria-labelledby="programs-tab">
    <div class="geex-content__todo__header">
        <div class="geex-content__todo__header__title">
            <i class="uil-user"></i>
            <h4>Update Password</h4>
        </div>
    </div>

    <div class="tab-content geex-transaction-content">
        <div class="geex-content__todo__list">
            <div class="geex-content__todo__list__single">
                <div class="geex-content__todo__list__single__text">
                   
					@include('profile.partials.update-password-form')


                </div>
            </div>
        </div>
    </div>
</div>

						
							<!-- Programs Tab -->
<div class="tab-pane fade" id="programs-content2" role="tabpanel" aria-labelledby="programs-tab2">
    <div class="geex-content__todo__header">
        <div class="geex-content__todo__header__title">
            <i class="uil-user"></i>
            <h4>Account</h4>
        </div>
    </div>

    <div class="tab-content geex-transaction-content">
        <div class="geex-content__todo__list">
            <div class="geex-content__todo__list__single">
                <div class="geex-content__todo__list__single__text">
					@include('profile.partials.delete-user-form')
						
                </div>
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
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
	<script src="{{ asset('public/assets/js/main.js') }}"></script>
	<!-- endinject-->
</body>

</html>