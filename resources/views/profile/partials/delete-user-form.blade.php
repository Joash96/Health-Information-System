
<form method="post" action="{{ route('profile.destroy') }}" class="p-6">
	@csrf
	@method('delete')

	<h2 class="text-lg font-medium text-gray-900">
		{{ __('Are you sure you want to delete your account?') }}
	</h2>

	<p class="mt-1 text-sm text-gray-600">
		{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
	</p>

<div class="geex-content__form__single mb-20">
	<div class="input-wrapper">
	<label for="county">Password</label>
	<input type="password"   name="password"  class="form-control" placeholder="{{ __('Password') }}" required autofocus  style="border: 1px solid purple;">
	</div>
	</div>




			<button type="submit" class="btn btn-success w-100"> {{ __('Delete Account') }}</button>
		</form>
	