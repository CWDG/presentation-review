@extends('layouts.main')

@section('content')
<h1>{{{ $presentation->name }}}</h1>
<p class="lead">{{ link_to('/p/' . $presentation->slug, url('/p/' . $presentation->slug)) }}</p>
<p>{{{ $presentation->additional_info }}}</p>
@if (!$presentation->reviews->isEmpty()) 
<h2>Current rating: {{{ number_format($average_score, 2) }}}</h2>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{{ $average_score }}}" aria-valuemin="0" aria-valuemax="100" style="width: {{{ number_format($average_score) }}}%">
    <span class="sr-only">{{{ $average_score }}}% Complete (success)</span>
  </div>
</div>
<h3>Recent scores</h3>
<ul class="scores">
	@foreach($presentation->reviews()->orderBy('created_at', 'desc')->take(25)->get() as $rev)
<li>{{ $rev->score }} <em>{{{ $rev->created_at->diffForHumans() }}}</em></li>
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
