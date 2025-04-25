<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Forgot Password</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/vendor/css/bootstrap/bootstrap.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
	<!-- endinject -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('public/assets/img/favicon.svg')); ?>">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
	
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>	
</head>

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication geex-content__authentication--forgot-password">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo">
						<a href="/dashbaord">
							<img class="logo-lite" style="width:300px;" src="<?php echo e(asset('public/assets/img/cemapng3.png')); ?>" alt="logo">
							<img class="logo-dark" style="width:300px;" src="<?php echo e(asset('public/assets/img/cemapng3.png')); ?>" alt="logo">
						</a>
					</div>
					<form id="signInForm" method="POST" action="<?php echo e(route('password.email')); ?>" class="geex-content__authentication__form">
                        
                            <?php echo csrf_field(); ?>
                    
						<h2 class="geex-content__authentication__title">Forgot your password? 👋</h2>


<?php if(session('status')): ?>
    <div class="alert alert-success mt-3">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

						<p class="geex-content__authentication__desc">Please enter the email address associated with your account and We will email you a link to reset your password.</p>
						<div class="geex-content__authentication__form-group">
							<label for="emailSignIn">Email Address</label>
							<input type="email" id="emailSignIn"  name="email" placeholder="Enter Your Email" required>
							<i class="uil-envelope"></i>
						</div>
						<button type="submit" class="geex-content__authentication__form-submit">Forget Password</button>
						<a href="/doctor/login" class="geex-content__authentication__form-submit return-btn">Back to Login</a>
					</form>
				</div>
			</div>	
			<div class="geex-content__authentication__img">
				<img src="<?php echo e(asset('public/assets/img/loginbg2.png')); ?>" alt="">
			</div>
		</div>
	</main>

	<!-- inject:js-->
	<script src="<?php echo e(asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/vendor/js/jquery/jquery-ui.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/vendor/js/bootstrap/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>
	<!-- endinject-->
</body>

</html><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>