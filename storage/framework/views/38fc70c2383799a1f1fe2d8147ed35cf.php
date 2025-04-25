
		<form method="post" action="<?php echo e(route('password.update')); ?>" class="mt-6 space-y-6">
			<?php echo csrf_field(); ?>
			<?php echo method_field('put'); ?>


<div class="geex-content__form__single mb-20">
<div class="input-wrapper">
<label for="county">Current Password</label>
<input type="password"   name="current_password"  class="form-control" required autofocus  style="border: 1px solid purple;">
</div>
</div>

<div class="geex-content__form__single mb-20">
	<div class="input-wrapper">
	<label for="county">New Password</label>
	<input type="password"   name="password"  class="form-control" required autofocus  style="border: 1px solid purple;">
	</div>
	</div>


	<div class="geex-content__form__single mb-20">
		<div class="input-wrapper">
		<label for="county">Confirm Password</label>
		<input type="password"  name="password_confirmation"  class="form-control" required autofocus  style="border: 1px solid purple;">
		</div>
		</div>


			<button type="submit" class="btn btn-success w-100">Update Password</button>
		</form>
	<?php /**PATH /home1/pulselin/public_html/hospital/resources/views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>