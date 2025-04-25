

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Doctor</h2>

    <form action="<?php echo e(route('doctors.update', $doctor)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($doctor->name); ?>" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo e($doctor->email); ?>" required>
        </div>

        <button class="btn btn-primary">Update Doctor</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/doctors/edit.blade.php ENDPATH**/ ?>