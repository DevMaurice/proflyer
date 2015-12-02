 <div class="form-group @if($errors->first('street')) has-error @endif">
        {!! Form::label('street', 'Street') !!}
        {!! Form::text('street', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('street') }}</small>
    </div>

    <div class="form-group @if($errors->first('city')) has-error @endif">
        {!! Form::label('city', 'City') !!}
        {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('city') }}</small>
    </div>

    <div class="form-group @if($errors->first('zip')) has-error @endif">
        {!! Form::label('zip', 'Zip/Code') !!}
        {!! Form::text('zip', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('zip') }}</small>
    </div>

    <div class="form-group @if($errors->first('country')) has-error @endif">
        {!! Form::label('country', 'Country') !!}
        {!! Form::select('country', $options, null, ['id' => 'country', 'class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('country') }}</small>
    </div>

    <div class="form-group @if($errors->first('state')) has-error @endif">
        {!! Form::label('state', 'State:') !!}
        {!! Form::text('state', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('state') }}</small>
    </div>

    <div class="form-group @if($errors->first('price')) has-error @endif">
        {!! Form::label('price', 'Sale Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('price') }}</small>
    </div>

    <div class="form-group @if($errors->first('description')) has-error @endif">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '10', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>

    {{-- <div class="form-group @if($errors->first('photo')) has-error @endif">
        {!! Form::label('photo', 'Photos') !!}
        {!! Form::file('photo', ['required' => 'required']) !!}
        <p class="help-block">Help block text</p>
        <small class="text-danger">{{ $errors->first('photo') }}</small>
    </div> --}}

    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>