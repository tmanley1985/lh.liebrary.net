@extends('layouts.main')
@section('content')
	
	<div id="content">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <div class="well well-form txt-lefty">
              <h3>Sign In</h3>
			  {{ Form::open( [ 'route' => 'sessions.store']) }}

		        <div class="control-group">
		          <div class="controls">
			        <div class="input-prepend">
			          <span class="add-on"><i class="icon-user"></i></span>
					  {{ Form::text('username', null, array(
			          		'name' => 'username',
			          		'placeholder' => 'Username',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}
			        </div>
				  </div>
			    </div>
			    <div class="control-group"> 
		          <div class="controls">
			        <div class="input-prepend">
			          <span class="add-on"><i class="icon-lock"></i></span>
					  {{ Form::password('password',array(
			          		'name' => 'password',
			          		'placeholder' => 'Password',
			          		'class' => "span3",
			          		'required' => 'required')
			          	)}}
			        </div>
				  </div>			
		        </div>
                <div class="form-actions">
			     <!-- <label class="checkbox">
                    <input type="checkbox" name="remember">
                    Remember Me
                  </label> -->
			       {{ Form::submit('Login', array(
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