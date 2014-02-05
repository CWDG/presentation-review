@extends('layouts.main')

@section('content')
<h1>{{{ $presentation->name }}}</h1>
<p class="lead">{{ link_to('/p/' . $presentation->slug, url('/p/' . $presentation->slug)) }}</p>
<p>{{{ $presentation->additional_info }}}</p>
@stop
