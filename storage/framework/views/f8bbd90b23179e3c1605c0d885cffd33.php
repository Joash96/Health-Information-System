

<?php $__env->startSection('content'); ?>
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Client List</h2>
        <a href="<?php echo e(route('clients.create')); ?>" class="btn btn-success">
            + Add New Client
        </a>
    </div>

    <form action="<?php echo e(route('clients.index')); ?>" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name or phone" value="<?php echo e(request('search')); ?>">
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </div>
    </form>

    <?php if($clients->isEmpty()): ?>
        <div class="alert alert-info">No clients found.</div>
    <?php else: ?>
        <div class="table-responsive shadow-sm">
            <table class="table table-bordered table-hover align-middle bg-white">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Registered</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($client->name); ?></td>
                            <td><?php echo e($client->phone); ?></td>
                            <td><?php echo e($client->email); ?></td>
                            <td><?php echo e(ucfirst($client->gender)); ?></td>
                            <td><?php echo e($client->age); ?></td>
                            <td><?php echo e($client->address); ?></td>
                            <td><?php echo e($client->created_at->diffForHumans()); ?></td>
                            <td>
                                <a href="<?php echo e(route('clients.show', $client->id)); ?>" class="btn btn-sm btn-info">View</a>
                                <a href="<?php echo e(route('clients.edit', $client->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="<?php echo e(route('clients.destroy', $client->id)); ?>" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this client?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
       
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\jmine\health-info-system\resources\views/clients/index.blade.php ENDPATH**/ ?>