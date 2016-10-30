@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-1-offset-1">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>#</th>
			  		<th>Name</th>
			  		<th>Email Address</th>
			  	</tr>
			  </thead>

			  <tbody>

			  @foreach($users as $user)
			  	<tr>
			  		<td>{{ $user->id }}</td>
			  		<td>{{ $user->name }}</td>
			  		<td>{{ $user->email }}</td>
			  	</tr>
			  	@endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>


@endsection