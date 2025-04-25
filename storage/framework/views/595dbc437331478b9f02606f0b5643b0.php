

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3><?php echo e($client->name); ?> - <?php echo e($client->phone); ?></h3>
    <p>Gender: <?php echo e($client->gender); ?></p>

    <h4>Programs Enrolled</h4>
    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $client->programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li><?php echo e($program->name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>Not enrolled yet.</li>
        <?php endif; ?>
    </ul>

    <form action="<?php echo e(route('clients.enroll', $client->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Select programs</label><br>
        <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="checkbox" name="programs[]" value="<?php echo e($program->id); ?>"> <?php echo e($program->name); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button class="btn btn-primary mt-2">Enroll</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/pulselin/public_html/hospital/resources/views/clients/show.blade.php ENDPATH**/ ?>