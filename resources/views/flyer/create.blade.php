@extends('layout')

@section('content')

<p>Sell your home</p>
<hr>
{!! Form::open([
	'method' => 'POST', 
	'route' => 'flyer.store', 
	'class' => 'form-horizontal'
]) !!}
    @include('flyer.form')   
{!! Form::close() !!}

@endsection