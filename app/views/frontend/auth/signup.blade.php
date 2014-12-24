@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Account Sign up ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="container-fluid well" align="center">
	<div class="page-header">
		<h3>Sign up</h3>
	</div>
	<div class="row">
		<div class="col-md-5 col-md-offset-4">
			<div class="" align="left">
				<form method="post" action="{{ route('signup') }}" class="form-horizontal" autocomplete="off">
					<!-- CSRF Token -->
					<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}" />

					<!-- First Name -->
					<div class="form-group{{ $errors->first('first_name', ' error') }}">
						<label for="first_name">First Name</label>
						<div class="controls">
							<input class="form-control" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name') }}" />
							{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
						</div>
					</div>

					<!-- Last Name -->
					<div class="form-group{{ $errors->first('last_name', ' error') }}">
						<label for="last_name">Last Name</label>
						<div class="controls">
							<input class="form-control" type="text" name="last_name" id="last_name" value="{{ Input::old('last_name') }}" />
							{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
						</div>
					</div>

					<!-- Email -->
					<div class="form-group{{ $errors->first('email', ' error') }}">
						<label for="email">Email</label>
						<div class="controls">
							<input class="form-control" type="text" name="email" id="email" value="{{ Input::old('email') }}" />
							{{ $errors->first('email', '<span class="help-block">:message</span>') }}
						</div>
					</div>

					<!-- Email Confirm -->
					<div class="form-group{{ $errors->first('email_confirm', ' error') }}">
						<label for="email_confirm">Confirm Email</label>
						<div class="controls">
							<input class="form-control" type="text" name="email_confirm" id="email_confirm" value="{{ Input::old('email_confirm') }}" />
							{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
						</div>
					</div>

					<!-- Password -->
					<div class="form-group{{ $errors->first('password', ' error') }}">
						<label for="password">Password</label>
						<div class="controls">
							<input class="form-control" type="password" name="password" id="password" value="" />
							{{ $errors->first('password', '<span class="help-block">:message</span>') }}
						</div>
					</div>

					<!-- Password Confirm -->
					<div class="form-group{{ $errors->first('password_confirm', ' error') }}">
						<label for="password_confirm">Confirm Password</label>
						<div class="controls">
							<input class="form-control" type="password" name="password_confirm" id="password_confirm" value="" />
							{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
						</div>
					</div>

					<hr>

					<!-- Form actions -->
					<div class="form-group">
						<div class="controls">
							<a class="btn" href="{{ route('home') }}">Cancel</a>

							<button type="submit" class="btn btn-primary">Sign up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
