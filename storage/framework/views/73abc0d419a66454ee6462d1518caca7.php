<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Create Enrollment</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/vendor/css/bootstrap/bootstrap.css')); ?>">
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
					<h2 class="geex-content__header__title">CEMA | New Enrollment</h2>
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
                        <form action="<?php echo e(route('enrollments.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
            
                            <div class="geex-content__form__single__box mb-20">
    <div class="input-wrapper">
        <label for="program_id">Program</label>
        <select name="program_id" id="program_id" class="form-control" required style="border: 1px solid purple;">
            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($program->id); ?>"><?php echo e($program->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="geex-content__form__single__box mb-20">
    <div class="input-wrapper">
        <label for="client_id">Client</label>
        <select name="client_id" id="client_id" class="form-control" required style="border: 1px solid purple;">
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($client->id); ?>"><?php echo e($client->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="geex-content__form__single__box mb-20">
    <div class="input-wrapper">
        <label for="doctor_id">Doctor</label>
        <select name="doctor_id" id="doctor_id" class="form-control" required style="border: 1px solid purple;">
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>


                            <div class="geex-content__form__single__box mb-20">
                                <div class="input-wrapper">
                                    <label for="geex-input5" class="input-label">Start Date</label>
                                    <input type="date"  name="enrollment_start_date" class="form-control" id="geex-input5" required />
                                </div>
                            </div>

                            <div class="geex-content__form__single__box mb-20">
                                <div class="input-wrapper">
                                    <label for="geex-input5" class="input-label">End Date</label>
                                    <input type="date"  name="enrollment_end_date" class="form-control" id="geex-input5" required />
                                </div>
                            </div>

                            <div class="geex-content__form__single mb-20">
                                <h4 class="geex-content__form__single__label">Reason For Enrollment</h4>
                                <div class="geex-content__form__single__box">
                                    <textarea class="form-control" name="reason_for_enrollment" id="geex-textarea1" rows="5"></textarea>
                                </div>
                            </div>



                            <div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control" required style="border: 1px solid purple;">
    </div>
</div>

<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="county">County (Optional)</label>
        <input type="text" name="county" class="form-control" style="border: 1px solid purple;">
    </div>
</div>

<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="illness_history">Illness History (Optional)</label>
        <textarea name="illness_history" class="form-control" style="border: 1px solid purple;"></textarea>
    </div>
</div>

<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="id_number">ID Number (Optional)</label>
        <input type="text" name="id_number" class="form-control" style="border: 1px solid purple;">
    </div>
</div>


            
                            
            
                            <button type="submit" class="btn btn-success w-100">Enroll Client</button>
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

</html><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/enrollments/create.blade.php ENDPATH**/ ?>