

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Add New Doctor</h2>

    <form action="<?php echo e(route('doctors.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-success">Add Doctor</button>
</form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/doctors/create.blade.php ENDPATH**/ ?>