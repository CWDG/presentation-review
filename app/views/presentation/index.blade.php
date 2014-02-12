@extends('layouts.main')

@section('content')
<h1>All Presentations</h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Created</th>
			<th>Number of Reviews</th>
		</tr>
	</thead>
	<tbody>
		@foreach($presentations as $pres)
			<tr>
				<td>{{ link_to_action('PresentationController@show', $pres->name, [$pres->id]) }}</td>
				<td>{{{ $pres->created_at->diffForHumans() }}}</td>
				<td>{{{ $pres->reviews()->count() }}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

{{ $presentations->links() }}
@stop
