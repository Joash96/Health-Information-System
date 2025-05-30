<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CEMA | Clients</title>

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
					<h2 class="geex-content__header__title">CEMA | Clients</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>

				</div>
				
<?php echo $__env->make('includes.haction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

            <div class="geex-content__todo__header custom-al">
                <div class="geex-content__todo__header__title">
                    <a href="<?php echo e(route('clients.create')); ?>">
                        <button class="geex-btn geex-btn--primary "><i class="uil-plus"></i> New Client</button>
                    </a>
                    
                </div>
               
               
            </div>
            <form action="<?php echo e(route('clients.index')); ?>" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control " style="border: 1px solid purple;" placeholder="Search by name or phone" value="<?php echo e(request('search')); ?>">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </form>
        
            <?php if($clients->isEmpty()): ?>
                <div class="alert alert-info">No clients found.</div>
            <?php else: ?>

			<div class="geex-content__section geex-content__form table-responsive" style="overflow-x: auto;">
    <table class="table-reviews-geex-1" style="min-width: 1000px;">
        <thead>
            <tr style="width: 100%;">
                <th style="width: 20%;">#</th>
                <th style="width: 20%;">Name</th>
                <th style="width: 20%;">Phone</th>
                <th style="width: 20%;">Email</th>
                <th style="width: 20%;">Gender</th>
                <th style="width: 20%;">Age</th>
                <th style="width: 20%;">Address</th>
                <th style="width: 20%;">Registered</th>
                <th style="width: 20%;">Actions</th>
            </tr>
        </thead>
        <tbody class="">
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>

                <!-- Flex align the name -->
                <td>
                    <div style="display: flex; align-items: center;">
                        <?php echo e($client->name); ?>

                    </div>
                </td>

                <td><?php echo e($client->phone); ?></td>
                <td><?php echo e($client->email); ?></td>
                <td><?php echo e(ucfirst($client->gender)); ?></td>
                <td><?php echo e($client->age); ?></td>
                <td><?php echo e($client->address); ?></td>
                <td><?php echo e($client->created_at->diffForHumans()); ?></td>
                <td>
                    <div style="display: flex;  gap: 5px; align-items: center;">
                        <a href="<?php echo e(route('clients.show', $client->id)); ?>" class="btn btn-sm btn-info">View</a>
                        <a href="<?php echo e(route('clients.edit', $client->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('clients.destroy', $client->id)); ?>" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this client?');"
                              style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>



            <?php endif; ?>
		</div>
	</main>

	<!-- inject:js-->
	<script src="<?php echo e(asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/vendor/js/jquery/jquery-ui.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/vendor/js/bootstrap/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>
	<!-- endinject-->
</body>

</html>





















<?php /**PATH /home1/pulselin/public_html/hospital/resources/views/clients/index.blade.php ENDPATH**/ ?>