@extends('layouts.main')
@section('content')
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>All Users</h1>
				@foreach ($users as $user)
			    	<ul>
			    		<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
			    	</ul>

				@endforeach

				{{ $users->links();}}
 			</div>
		</div>
	</div>
@stop
