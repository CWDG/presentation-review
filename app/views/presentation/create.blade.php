@extends('layouts.main')

@section('content')
<h1>Add Presentation</h1>

{{ Form::model($presentation, ['action' => 'PresentationController@store', 'role' => 'form']) }}

<div class="form-group @if($errors->has('name')) has-error  @endif">
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Presentation name']) }}
  <span class="help-block">{{{ $errors->first('name') }}}</span>
</div>
<div class="form-group @if($errors->has('slug')) has-error  @endif">
  {{ Form::label('slug', 'Slug') }}
  {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug for URL']) }}
  <span class="help-block">{{{ $errors->first('slug') }}}</span>
</div>
<div class="form-group @if($errors->has('additional_info')) has-error  @endif">
  {{ Form::label('additional_info', 'Additional Info') }}
  {{ Form::textarea('additional_info', null, ['class' => 'form-control']) }}
  <span class="help-block">{{{ $errors->first('additional_info') }}}</span>
</div>
{{ Form::submit('Create Presentation', ['class' => 'btn btn-default']) }}
{{ Form::close() }}
@stop
