@extends('layout')

@section('content')

<div class="row">
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<h1>{{ $flyer->street }}</h1>
		<hr/>
		<h2>Price: {{ $flyer->price }}</h2>

		<h2>Description:</h2>
		<div class="well">
			{!! nl2br($flyer->description) !!}
		</div>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		@foreach ($flyer->photos->chunk(4) as $set)
			<div class="row">
				@foreach ($set as $photo)
					<div class="col-md-3">
					<form action="/photos/{{$photo->id}}" method="POST">
						{!! csrf_field() !!}

						{!! Form::hidden('_method', 'DELETE') !!}

						{!! Form::submit('Delete') !!}
					</form>
					<a href="/{{$photo->path}}" data-lity>
						<img src="/{{$photo->thumbnail_path}}">
					</a>
					</div>
				@endforeach
			</div>
			<hr />
		@endforeach	
		@if($logedIn && $user->owns($flyer))
		<form id="photoUploadForm" 
			method = "POST" 
			action="/{{$flyer->zip}}/{{$flyer->street}}/photos" 
			class="dropzone"
		>
			{{ csrf_field() }}
		</form>	
		@endif
	</div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
<script type="text/javascript">
	Dropzone.options.photoUploadForm={
		paramName: 'photo',
		maxFilesize:2,
		acceptedFiles:'.png, .jpeg, .jpg, .bpm'
	}
</script>
@stop
