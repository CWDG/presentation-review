@extends('layouts.main')

@section('content')
<h1>{{{ $presentation->name }}}</h1>
<p class="lead">{{ link_to('/p/' . $presentation->slug, url('/p/' . $presentation->slug)) }}</p>
<p>{{{ $presentation->additional_info }}}</p>
@if (!$presentation->reviews->isEmpty()) 
<h2>Ratings</h2>
<ul>
	@foreach($presentation->reviews as $rev)
	<li>{{ $rev->score }}</li>
	@endforeach
</ul>
@endif
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Add Rating</h3>
	</div>
	<div class="panel-body">
		{{ Form::model($review, ['action' => ['ReviewController@store', $presentation->id], 'role' => 'form']) }}

		<div class="form-group @if($errors->has('score')) has-error  @endif">
  		{{ Form::label('score', 'Score') }}
  		{{ Form::text('score', null, [ 'class' => 'form-control', 'max' => 100, 'min' => 1, 'step' => 1, 'placeholder' => 'Score from 1 to 100']) }}
  		<span class="help-block">{{{ $errors->first('score') }}}</span>
		</div>
		{{ Form::submit('Score Presentation', ['class' => 'btn btn-default']) }}
		{{ Form::close() }}
	</div>
</div>
@stop
