@extends('layouts.main')

@section('content')
<h1>All Presentations</h1>

<ul>
	@foreach($presentations as $pres)
		<li>{{ link_to_action( 'PresentationController@show', $pres->name, [$pres->id]) }}</li>		
	@endforeach
</ul>

{{ $presentations->links() }}
@stop
