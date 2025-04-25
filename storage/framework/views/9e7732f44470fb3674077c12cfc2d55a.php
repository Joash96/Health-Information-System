<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form - Geex Dashboard</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/vendor/css/bootstrap/bootstrap.css')); ?>">
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

<body class="geex-dashboard">
	
	
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <main class="geex-main-content">
		

<?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
 
		
<?php echo $__env->make('includes.customizer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">CEMA | New Client</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>
				</div>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
<?php echo $__env->make('includes.haction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

			<div class="geex-content__section geex-content__form">
                <div class="geex-content__form__wrapper">
                    <div class="geex-content__form__wrapper__item geex-content__form__left">
                        <form action="<?php echo e(route('clients.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
            
                            <div class="geex-content__form__single__box mb-20">
                                <div class="input-wrapper">
                                    <label for="geex-input5" class="input-label">Client FullName</label>
                                    <input placeholder="Client Name" name="name" class="form-control" id="geex-input5" required />
                                </div>
                            </div>
            
                            <div class="geex-content__form__single__box mb-20">
                                <div class="input-wrapper">
                                    <label for="geex-input5" class="input-label">Client's Phone Number</label>
                                    <input placeholder="Phone Number" name="phone" class="form-control" id="geex-input5" required />
                                </div>
                            </div>
            
                            <div class="geex-content__form__single__box mb-20">
                                <label for="gender" class="form-label">Client Genderr</label>
                                <select name="gender" id="gender" class="form-select" required>
                                    <option value="">Select gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
                                </select>
                            </div>
            
                            <button type="submit" class="btn btn-success w-100">Add Client</button>
                        </form>
                    </div>
                </div>
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

</html><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/clients/create.blade.php ENDPATH**/ ?>