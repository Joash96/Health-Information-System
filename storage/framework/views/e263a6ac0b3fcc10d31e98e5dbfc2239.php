

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Doctors</h2>
    <a href="<?php echo e(route('doctors.create')); ?>" class="btn btn-primary mb-3">Add New Doctor</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr><th>Name</th><th>Email</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($doctor->name); ?></td>
                <td><?php echo e($doctor->email); ?></td>
                <td>
                    <a href="<?php echo e(route('doctors.edit', $doctor)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('doctors.destroy', $doctor)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this doctor?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/doctors/index.blade.php ENDPATH**/ ?>