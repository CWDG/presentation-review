@extends('layouts.main')

@section('content')
<h1>{{{ $presentation->name }}}</h1>

<p>{{{ $presentation->additional_info }}}</p>
@stop
