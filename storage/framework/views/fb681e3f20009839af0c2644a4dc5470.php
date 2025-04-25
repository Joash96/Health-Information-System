<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SignIn - Geex Dashboard</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/vendor/css/bootstrap/bootstrap.css')); ?>"">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css')); ?>">

	<!-- endinject -->
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.svg">
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
		<div class="geex-content__authentication">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo">
						<a href="index.html">
							<img class="logo-lite" style="width:300px;" src="<?php echo e(asset('public/assets/img/cemapng3.png')); ?>" alt="logo">
							<img class="logo-dark" style="width:300px;" src="<?php echo e(asset('public/assets/img/cemapng3.png')); ?>" alt="logo">
						</a>
					</div>
					<form id="signInForm" method="POST" action="<?php echo e(route('doctor.login.submit')); ?>" class="geex-content__authentication__form">
					<?php echo csrf_field(); ?>

						<h2 class="geex-content__authentication__title">Sign In to Your Account 👋</h2>
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php echo e($errors->first('error')); ?>

                        </div>
                    <?php endif; ?>
						<div class="geex-content__authentication__form-group">
							<label for="emailSignIn">Email Address</label>
							<input type="email" id="emailSignIn"  name="email" placeholder="Email Address" required>
							<i class="uil-envelope"></i>
						</div>
						<div class="geex-content__authentication__form-group">
							<div class="geex-content__authentication__label-wrapper">
								<label for="loginPassword">Your Password</label>
								<a href="/forgot-password">Forgot Password?</a>
							</div>
							<input type="password" id="loginPassword" name="password" placeholder="Password" required>
							<i class="uil-eye toggle-password-type"></i>
						</div>
						
						<button type="submit" class="geex-content__authentication__form-submit">Sign In</button>
						
						<div class="geex-content__authentication__form-footer" style="display: block; text-align: center; margin-top: 20px;">
    <strong>Login Details:</strong><br>
    <span>Email: <code>admin@cema.test</code></span><br>
    <span>Password: <code>password</code></span>
</div>

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

</html><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/auth/doctor-login.blade.php ENDPATH**/ ?>