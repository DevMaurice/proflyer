 <div class="row">
    <div class="col-md-6"> 
        <div class="form-group @if($errors->first('street')) has-error @endif  col-xs-12">
            {!! Form::label('street', 'Street') !!}
            {!! Form::text('street', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('street') }}</small>
        </div>

        <div class="form-group @if($errors->first('city')) has-error @endif col-xs-12">
            {!! Form::label('city', 'City') !!}
            {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('city') }}</small>
        </div>

        <div class="form-group @if($errors->first('zip')) has-error @endif col-xs-12">
            {!! Form::label('zip', 'Zip/Code') !!}
            {!! Form::text('zip', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('zip') }}</small>
        </div>

        <div class="form-group @if($errors->first('country')) has-error @endif col-xs-12">
            {!! Form::label('country', 'Country') !!}
            {!! Form::select('country', $options, null, ['id' => 'country', 'class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('country') }}</small>
        </div>

        <div class="form-group @if($errors->first('state')) has-error @endif col-xs-12">
            {!! Form::label('state', 'State:') !!}
            {!! Form::text('state', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('state') }}</small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group @if($errors->first('price')) has-error @endif col-xs-12">
            {!! Form::label('price', 'Sale Price:') !!}
            {!! Form::text('price', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('price') }}</small>
        </div>

        <div class="form-group @if($errors->first('description')) has-error @endif col-xs-12">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '10', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('description') }}</small>
        </div>

        {{-- <div class="form-group @if($errors->first('photo')) has-error @endif col-xs-12">
            {!! Form::label('photo', 'Photos') !!}
            {!! Form::file('photo', ['required' => 'required']) !!}
            <p class="help-block">Help block text</p>
            <small class="text-danger">{{ $errors->first('photo') }}</small>
        </div> --}}       
    </div>
</div>

<div class="col-md-12">
    <div class="btn-group">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div> 
</div>