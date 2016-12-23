@extends('master')


@section('content')
<div class="panel-body">

	<!-- Postojeći taskovi -->
	@if(count($films) > 0)
		<div class="panel-body">
			<table class="table table-striped task-table">
				<tbody>
					@foreach($films as $film)
					<tr>
						<td>
							<div>{{$film->name}}</div>
						</td>
						<td>
							<div>{{$film->trajanje}}</div>
						</td>
						<td>
							<div>{{$film->year}}</div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	@endif
	
</div>
@endsection