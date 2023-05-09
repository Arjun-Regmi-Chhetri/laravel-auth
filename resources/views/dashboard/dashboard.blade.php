@extends('layout.app')
@section('content')

	<div class="container">
		<h3 class="text-white">Dashboard</h3>
		<table class="table table-dark">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</thead>
			<tbody>
				<tr>
					{{-- <td>{{$data->name}}</td>
					<td>{{$data->email}}</td>
                     --}}
					<td><a href="logout">logout</a></td>
				</tr>
			</tbody>
		</div>
	</div>

@endsection