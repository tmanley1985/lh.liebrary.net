@extends('layouts.main')
@section('content')
	<div id="content">
		  <div class="container">
		    <div class="row">
			  <div class="span12">
			    <div class="well well-form txt-lefty">
	              <h3>Sign Up</h3>
	              {{ Form::open(['route' => 'users.store']) }}
				 
			        <div class="control-group">
			          <div class="controls">
			          	{{ Form::text('firstname', null, array(
			          		'name' => 'firstname',
			          		'placeholder' => 'First Name',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}
			          	{{ $errors->first('firstname')}}

					  </div>
				    </div>
			        <div class="control-group">
			          <div class="controls">

						{{ Form::text('lastname', null, array(
			          		'name' => 'lastname',
			          		'placeholder' => 'Last Name',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}

			          	{{ $errors->first('lastname')}}
					  </div>
				    </div>
			        <div class="control-group">
			          <div class="controls">
			          	{{ Form::email('email', null, array(
			          		'name' => 'email',
			          		'placeholder' => 'Email',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}

			          	{{ $errors->first('email')}}
					  </div>
				    </div>
				    <div class="control-group">
			          <div class="controls">
						{{ Form::text('username', null, array(
			          		'name' => 'username',
			          		'placeholder' => 'Username',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}
			          	{{ $errors->first('username')}}
					  </div>
				    </div>
			        <div class="control-group">
			          <div class="controls">
						{{ Form::password('password',array(
			          		'name' => 'password',
			          		'placeholder' => 'Password',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}
			          	{{ $errors->first('password')}}
					  </div>
				    </div>
			        <div class="control-group">
			          <div class="controls">
			          	{{ Form::password('passagain', array(
			          		'name' => 'passagain',
			          		'placeholder' => 'Confirm Password',
			          		'class' => "span3",
			          		'required' => 'required',
			          		'data-validation-matches-match' => "pass",
			          		'data-validation-matches-message' => "Must match password entered above"
			          		)
			          	)}}
					  </div>
				    </div>
	                <!--<div class="form-actions">
				      <label class="checkbox">
	                    <input type="checkbox" name="terms" required  data-validation-required-message="You must agree to the terms and conditions">
	                    I agree to the terms and conditions
	                  </label> -->
	                  {{ Form::submit('Sign Up', array(
	                  	'class' => 'btn btn-primary',
	                  	'type' => 'submit'

	                  ))}}
	                </div>

	              {{ Form::close() }}
			     <!-- <div class="form-extra">
				    <button class="btn btn-info"><i class="glyphicons-twitter"></i> Login with Twitter</button>
				    <button class="btn btn-danger"><i class="glyphicons-google_plus"></i> Login with Google</button>
				  </div> -->			  
	            </div>
			  </div>  
			</div>  	
		  </div>
		</div>
@stop