@extends('layout')

@section('content')

<p>Sell your home</p>

<hr>

<div class="row"> 

{!! Form::open(['method' => 'POST', 'route' => 'flyer.store', 'class' => 'form-horizontal col-md-6']) !!}
    @include('flyer.form')   

{!! Form::close() !!}
</div>
@endsection