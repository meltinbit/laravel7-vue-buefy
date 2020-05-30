	@extends('layouts.app')

	@section('content')
	<div class="container">
			<div class="columns">
					<div class="column is-half is-offset-one-quarter">
							<div class="card">
									<div class="card-header">
										<p class="card-header-title">{{ __('Login') }}</p>
									</div>

									<div class="card-content">
											<form method="POST" action="{{ route('login') }}">
													@csrf
													<div class="field">
															<label class="label">{{ __('Email') }}</label>
															<p class="control has-icons-left">
																	<input id="email" name="email" class="input @error('email') is-invalid @enderror" type="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
																	<span class="icon is-small is-left">
																		<i class="fas fa-envelope"></i>
																	</span>
															</p>
															@error('email')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
														</div>
														<div class="field">
															<label class="label">{{ __('Password') }}</label>
															<p class="control has-icons-left">
																	<input id="password" name="password" class="input @error('password') is-invalid @enderror" type="password" placeholder="Password" required autocomplete="email" autofocus>
																	<span class="icon is-small is-left">
																	<i class="fas fa-lock"></i>
																	</span>
															</p>
															@error('password')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
													
													<button type="submit" class="button is-fullwidth is-primary">
															{{ __('LOGIN') }}
													</button>
													@if (Route::has('password.request'))
															<br>
															<p class="has-text-centered is-size-7">
																<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
															</p>
													@endif
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>
	@endsection
