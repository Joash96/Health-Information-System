
		<form id="send-verification" method="post" action="{{ route('verification.send') }}">
			@csrf
		</form>
		<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
			@csrf
			@method('patch')

			
<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="county">Fullname</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" style="border: 1px solid purple;">
    </div>
</div>

<div class="geex-content__form__single mb-20">
    <div class="input-wrapper">
        <label for="county">Email Address</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required autofocus autocomplete="username" style="border: 1px solid purple;">
    </div>
</div>


	@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
	<div>
		<p class="text-sm mt-2 text-gray-800">
			{{ __('Your email address is unverified.') }}

			<button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				{{ __('Click here to re-send the verification email.') }}
			</button>
		</p>

		@if (session('status') === 'verification-link-sent')
			<p class="mt-2 font-medium text-sm text-green-600">
				{{ __('A new verification link has been sent to your email address.') }}
			</p>
		@endif
	</div>
@endif




			

			<button type="submit" class="btn btn-success w-100">Save Changes</button>
		</form>
	
