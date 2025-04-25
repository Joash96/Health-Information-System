

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="mb-3"><?php echo e($program->name); ?></h2>
    
    <div class="card mb-3 p-3">
        <h5>Description</h5>
        <p><?php echo e($program->description ?? 'No description provided.'); ?></p>
    </div>

    <div class="card mb-3 p-3">
        <h5>Assigned Doctor</h5>
        <p><?php echo e($program->doctor->name ?? 'Not Assigned'); ?> (<?php echo e($program->doctor->email ?? 'N/A'); ?>)</p>
    </div>

    <div class="card mb-3 p-3">
        <h5>Enrolled Clients</h5>
        <?php if($program->clients->isEmpty()): ?>
            <p>No clients enrolled in this program.</p>
        <?php else: ?>
            <ul class="list-group">
                <?php $__currentLoopData = $program->clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <?php echo e($client->name); ?> - <?php echo e($client->phone); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </div>

    <a href="<?php echo e(route('programs.index')); ?>" class="btn btn-secondary mt-3">Back to Programs</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/programs/show.blade.php ENDPATH**/ ?>