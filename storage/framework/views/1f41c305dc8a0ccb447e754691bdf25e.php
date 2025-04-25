

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Register New Client</h2>
    <form action="<?php echo e(route('clients.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Full Name" class="form-control mb-2" required>
        <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select name="gender" id="gender" class="form-control" required>
        <option value="">Select gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>

        <input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/clients/create.blade.php ENDPATH**/ ?>