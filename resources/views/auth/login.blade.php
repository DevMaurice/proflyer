@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<form method = "POST"
				action = "/auth/login"
			>
				{!! csrf_field() !!}

				<div class="form-group @if($errors->first('email')) has-error @endif">
				    {!! Form::label('email', 'Email address:') !!}
				    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
				    <small class="text-danger">{{ $errors->first('email') }}</small>
				</div>

				<div class="form-group @if($errors->first('password')) has-error @endif">
				    {!! Form::label('password', 'Password:') !!}
				    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('password') }}</small>
				</div>

				<div class="form-group">
				    <div class="checkbox @if($errors->first('remember')) has-error @endif">
				        <label for="remember">
				            {!! Form::checkbox('remember', null, null, ['id' => 'remember']) !!} Checkbox label
				        </label>
				    </div>
				    <small class="text-danger">{{ $errors->first('remember') }}</small>
				</div>

				{!! Form::submit('Login', ['class' => 'btn btn-info pull-right']) !!}
			</form>
		</div>
	</div>
@endsection