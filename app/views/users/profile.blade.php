@extends('layouts.main')
@section('content')
	<div class="container">
		<div class="row">
			<div class="span12">
			
			    	<ul>
			    		<li>Username: {{ $user->username }}</li>
			    		<li>First Name: {{ $user->firstname }}</li>
			    		<li>Last Name: {{ $user->lastname }} </li>
			    		<li>Email: {{ $user->email }}</li>
			    		
			    	</ul>

				
 			</div>
		</div>
	</div>
@stop