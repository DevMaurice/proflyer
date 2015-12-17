@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<form method = "POST"
				action = "/auth/register"
			>
				{!! csrf_field() !!}

				<div class="form-group @if($errors->first('name')) has-error @endif">
				    {!! Form::label('namespace', 'Name: ') !!}
				    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'John Doe']) !!}
				    <small class="text-danger">{{ $errors->first('name') }}</small>
				</div>

				<div class="form-group @if($errors->first('email')) has-error @endif">
				    {!! Form::label('email', 'Email address:') !!}
				    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
				    <small class="text-danger">{{ $errors->first('email') }}</small>
				</div>			

				<div class="form-group @if($errors->first('password')) has-error @endif">
				    {!! Form::label('password', 'Password: ') !!}
				    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('password') }}</small>
				</div>


				<div class="form-group @if($errors->first('password_confirmation')) has-error @endif">
				    {!! Form::label('password_confirmation', 'Password Confirmation: ') !!}
				    {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
				</div>

				{!! Form::submit('Register', ['class' => 'btn btn-info pull-right']) !!}
			</form>
		</div>
	</div>
@endsection

