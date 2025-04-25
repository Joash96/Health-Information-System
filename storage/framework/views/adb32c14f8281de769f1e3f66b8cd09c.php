<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CEMA | Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/vendor/css/bootstrap/bootstrap.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('public/assets/img/favicon.png')); ?>">
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
    
	
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <main class="geex-main-content">
		

<?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
 
		
<?php echo $__env->make('includes.customizer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">CEMA</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>

				</div>
				
<?php echo $__env->make('includes.haction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__feature geex-content__feature--two mb-40">
						<div class="geex-content__feature__swiper-btn">
							<div class="swiper-btn swiper-btn-prev">
								<i class="uil-arrow-left"></i>
							</div>
							<div class="swiper-btn swiper-btn-next">
								<i class="uil-arrow-right"></i>
							</div>
						</div>
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php
    use Illuminate\Support\Facades\DB;
    $clientCount = DB::table('clients')->count(); // Count the number of clients
    $programCount = DB::table('programs')->count(); // Count the number of programs
    $doctorCount = DB::table('doctors')->count(); // Count the number of doctors
?>

<div class="swiper-slide">
    <div class="geex-content__feature__card">
        <div class="geex-content__feature__card__top">
            <div class="geex-content__feature__card__top__img">
                <i class="fas fa-users" style="font-size: 24px; background-color: #f0f0f0; border-radius: 50%; padding: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></i>
            </div>
            <div class="geex-content__feature__card__top__content">
                <h4 class="geex-content__feature__card__top__title">Clients</h4>
                <p class="geex-content__feature__card__top__subtitle">CEMA</p>
            </div>
        </div>
        <div class="geex-content__feature__card__text">
            <span class="geex-content__feature__card__price"><?php echo e($clientCount); ?></span>
            <a href="<?php echo e(route('clients.index')); ?>"><span class="geex-content__feature__card__growth success-color">See More</span></a>
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="geex-content__feature__card">
        <div class="geex-content__feature__card__top">
            <div class="geex-content__feature__card__top__img">
                <i class="fas fa-th-list" style="font-size: 24px; background-color: #f0f0f0; border-radius: 50%; padding: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></i>    
            </div>
            <div class="geex-content__feature__card__top__content">
                <h4 class="geex-content__feature__card__top__title">Programs</h4>
                <p class="geex-content__feature__card__top__subtitle">CEMA</p>
            </div>
        </div>
        <div class="geex-content__feature__card__text">
            <span class="geex-content__feature__card__price"><?php echo e($programCount); ?></span>
            <a href="<?php echo e(route('programs.index')); ?>"><span class="geex-content__feature__card__growth danger-color">See More</span></a>
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="geex-content__feature__card">
        <div class="geex-content__feature__card__top">
            <div class="geex-content__feature__card__top__img">
                <i class="fas fa-user-md" style="font-size: 24px; background-color: #f0f0f0; border-radius: 50%; padding: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></i>    
            </div>
            <div class="geex-content__feature__card__top__content">
                <h4 class="geex-content__feature__card__top__title">Doctors</h4>
                <p class="geex-content__feature__card__top__subtitle">CEMA</p>
            </div>
        </div>
        <div class="geex-content__feature__card__text">
            <span class="geex-content__feature__card__price"><?php echo e($doctorCount); ?></span>
            <a href="<?php echo e(route('doctors.index')); ?>"><span class="geex-content__feature__card__growth success-color">See More</span></a>
        </div>
    </div>
</div>

								
							</div>
						</div>
					</div>

					<div class="geex-content__section geex-content__core mb-40">
						<div class="geex-content__section__header">
							<div class="geex-content__section__header__title-part">
								<h4 class="geex-content__section__header__title">Core Programs</h4>
							</div>
						</div>
						<div class="geex-content__section__content">
							<div class="geex-content__core__top">
								<ul class="nav nav-tabs geex-content__core__nav" id="crypto-asset-tab" role="tablist">
									<li class="geex-content__core__nav__item" role="presentation">
										<button class="geex-content__core__nav__link active" id="crypto-bitcoin-tab" data-bs-toggle="tab" data-bs-target="#crypto-bitcoin-content" type="button" role="tab" aria-controls="crypto-bitcoin-content" aria-selected="true">
											<i class="fas fa-th-list" style="font-size: 20px; background-color: #f0f0f0; border-radius: 50%; padding: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></i>	
											Malaria
										</button>
									</li>
									<li class="geex-content__core__nav__item" role="presentation">
										<button class="geex-content__core__nav__link" id="crypto-ethererum-tab" data-bs-toggle="tab" data-bs-target="#crypto-ethererum-content" type="button" role="tab" aria-controls="crypto-ethererum-content" aria-selected="false">
											<i class="fas fa-th-list" style="font-size: 20px; background-color: #f0f0f0; border-radius: 50%; padding: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></i>	
											TB
										</button>
									</li>
									<li class="geex-content__core__nav__item" role="presentation">
										<button class="geex-content__core__nav__link" id="crypto-litecoin-tab" data-bs-toggle="tab" data-bs-target="#crypto-litecoin-content" type="button" role="tab" aria-controls="crypto-litecoin-content" aria-selected="false">
											<i class="fas fa-th-list" style="font-size: 20px; background-color: #f0f0f0; border-radius: 50%; padding: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></i>	
											HIV
										</button>
									</li>
								</ul>
								
							</div>
							<div class="tab-content geex-content__core__content" id="geex-transaction-content">


								<div class="tab-pane geex-content__core__single fade show active" id="crypto-bitcoin-content" role="tabpanel" aria-labelledby="crypto-bitcoin-tab">
									<div class="geex-content__core__content__top">
										<div class="geex-content__core__content__info">
											
											 <h5>Community Health Enrollment and Tracking Program (CHETP)</h5>
    <ul>
        <li>⭕ Mobile-based client registration</li>
        <li>⭕ Real-time health alerts</li>
        <li>⭕ CHW follow-up dashboard</li>
    </ul>

    
											
											
										</div>
									</div>
									
								</div>
								<div class="tab-pane geex-content__core__single fade" id="crypto-ethererum-content" role="tabpanel" aria-labelledby="crypto-ethererum-tab">
									<div class="geex-content__core__content__top">
										<div class="geex-content__core__content__info">
											
											<h5>Predictive Care Enrollment for NCDs (PreCare-NCD)</h5>
    <ul>
        <li>⭕ AI-based risk analysis</li>
        <li>⭕ Auto-enrollment suggestions</li>
        <li>⭕ Custom preventive plans</li>
    </ul>

    
											
										</div>
									</div>
									
								</div>
								<div class="tab-pane geex-content__core__single fade" id="crypto-litecoin-content" role="tabpanel" aria-labelledby="crypto-litecoin-tab">
									<div class="geex-content__core__content__top">
										<div class="geex-content__core__content__info">
											
										<h5>Maternal and Child Wellness Enrollment Program (MaC-WEP)</h5>
    <ul>
        <li>⭕ Integrated MCH tracking</li>
        <li>⭕ Vaccination reminders</li>
        <li>⭕ Postnatal visit scheduling</li>
    </ul>	
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>

					
				</div>

				<div class="geex-content__widget geex-content__widget--two">
    <div class="geex-content__widget__single geex-content__widget__news">
        <h4 class="geex-content__widget__news__title">Client Program Management</h4>
        <p class="geex-content__widget__news__subtitle">
            Easily add clients to healthcare programs and monitor their treatment journey efficiently through the CEMA system.
        </p>
        <a href="<?php echo e(route('clients.create')); ?>" class="geex-btn">
            Add New Client
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                <path d="M3.5 13H19.09L13.79 18.29C13.6963 18.3829 13.6219 18.4935 13.5711 18.6154C13.5203 18.7373 13.4942 18.868 13.4942 19C13.4942 19.132 13.5203 19.2627 13.5711 19.3845C13.6219 19.5064 13.6963 19.617 13.79 19.71C13.883 19.8037 13.9936 19.8781 14.1154 19.9289C14.2373 19.9796 14.368 20.0058 14.5 20.0058C14.632 20.0058 14.7627 19.9796 14.8846 19.9289C15.0064 19.8781 15.117 19.8037 15.21 19.71L22.21 12.71C22.3037 12.617 22.3781 12.5064 22.4289 12.3845C22.4797 12.2627 22.5058 12.132 22.5058 12C22.5058 11.868 22.4797 11.7373 22.4289 11.6154C22.3781 11.4935 22.3037 11.3829 22.21 11.29L15.21 4.28997C15.1168 4.19673 15.0061 4.12277 14.8843 4.07231C14.7624 4.02185 14.6319 3.99588 14.5 3.99588C14.2337 3.99588 13.9783 4.10167 13.79 4.28997C13.6968 4.38321 13.6228 4.4939 13.5723 4.61572C13.5219 4.73755 13.4959 4.86811 13.4959 4.99997C13.4959 5.26627 13.6017 5.52167 13.79 5.70997L19.09 11H3.5C3.23478 11 2.98043 11.1053 2.79289 11.2929C2.60536 11.4804 2.5 11.7348 2.5 12C2.5 12.2652 2.60536 12.5195 2.79289 12.7071C2.98043 12.8946 3.23478 13 3.5 13V13Z" fill="white"/>
            </svg>
        </a>
    </div>
</div>

			</div>
		</div>
    </main>

    <!-- inject:js-->
    <script src="<?php echo e(asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/vendor/js/jquery/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/vendor/js/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>
    <!-- endinject-->
</body>

</html><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/dashboard.blade.php ENDPATH**/ ?>