@extends('layouts.main')

@section('content')
<h1>All Presentations</h1>

<ul>
	@foreach($presentations as $pres)
		<li>{{ link_to_action($pres->name, 'PresentationController@show', [$pres->id]) }}</li>		
	@endforeach
</ul>

{{ $presentations->links(); }}
@stop
