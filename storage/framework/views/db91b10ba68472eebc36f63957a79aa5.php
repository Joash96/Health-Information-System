

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Programs</h2>
        <a href="<?php echo e(route('programs.create')); ?>" class="btn btn-primary">Add New Program</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo e($program->title); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($program->description, 100)); ?></p>
                        <p class="card-text"><small class="text-muted">Created by Dr. <?php echo e($program->doctor->name); ?></small></p>
                        <a href="<?php echo e(route('programs.show', $program->id)); ?>" class="btn btn-outline-primary mt-3 w-100">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="alert alert-info">No programs found. Click the button above to add a new one.</div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/programs/index.blade.php ENDPATH**/ ?>