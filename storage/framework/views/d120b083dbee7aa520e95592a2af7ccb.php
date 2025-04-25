
<form method="post" action="<?php echo e(route('profile.destroy')); ?>" class="p-6">
	<?php echo csrf_field(); ?>
	<?php echo method_field('delete'); ?>

	<h2 class="text-lg font-medium text-gray-900">
		<?php echo e(__('Are you sure you want to delete your account?')); ?>

	</h2>

	<p class="mt-1 text-sm text-gray-600">
		<?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')); ?>

	</p>

<div class="geex-content__form__single mb-20">
	<div class="input-wrapper">
	<label for="county">Password</label>
	<input type="password"   name="password"  class="form-control" placeholder="<?php echo e(__('Password')); ?>" required autofocus  style="border: 1px solid purple;">
	</div>
	</div>




			<button type="submit" class="btn btn-success w-100"> <?php echo e(__('Delete Account')); ?></button>
		</form>
	<?php /**PATH /home1/pulselin/public_html/hospital/resources/views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>