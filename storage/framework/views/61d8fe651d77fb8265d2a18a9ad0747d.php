
		<form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
			<?php echo csrf_field(); ?>
		</form>
		<form method="post" action="<?php echo e(route('profile.update')); ?>" class="mt-6 space-y-6">
			<?php echo csrf_field(); ?>
			<?php echo method_field('patch'); ?>

			
<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="county">Fullname</label>
        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $user->name)); ?>" required autofocus autocomplete="name" style="border: 1px solid purple;">
    </div>
</div>

<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="county">Email Address</label>
        <input type="email" name="email" class="form-control" value="<?php echo e(old('email', $user->email)); ?>" required autofocus autocomplete="username" style="border: 1px solid purple;">
    </div>
</div>


	<?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
	<div>
		<p class="text-sm mt-2 text-gray-800">
			<?php echo e(__('Your email address is unverified.')); ?>


			<button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				<?php echo e(__('Click here to re-send the verification email.')); ?>

			</button>
		</p>

		<?php if(session('status') === 'verification-link-sent'): ?>
			<p class="mt-2 font-medium text-sm text-green-600">
				<?php echo e(__('A new verification link has been sent to your email address.')); ?>

			</p>
		<?php endif; ?>
	</div>
<?php endif; ?>




			

			<button type="submit" class="btn btn-success w-100">Save Changes</button>
		</form>
	
<?php /**PATH /home1/pulselin/public_html/hospital/resources/views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>