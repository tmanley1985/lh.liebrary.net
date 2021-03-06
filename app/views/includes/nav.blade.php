<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-primary btn-dropnav" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>		
          <a class="brand" href="/">Liebrary</a>
		  <div class="nav-collapse collapse">
            <ul class="nav pull-right animated">
			  <li class="dropdown active">
			    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Home <b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="index.html" tabindex="-1">Default Home</a></li>
				  <li><a href="alt.html" tabindex="-1">Alternative Home</a></li>
				</ul>
			  </li>
              <li><a href="about.html">About</a></li>		  
			  <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Features <b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="blog.html" tabindex="-1">Blog</a></li>
				  <li><a href="single.html" tabindex="-1">Blog Single</a></li>
				  <li><a href="dividers.html" tabindex="-1">Dividers</a></li>
				</ul>
			  </li>
			  <li><a href="pricing.html">Pricing</a></li>
			  	@if(!Auth::check())
			  		<li>{{ HTML::link('users/create', 'Register') }}</li> 
             		 <li>{{ HTML::link('/login', 'Login') }}</li> 
             	@else
          			<li> {{ HTML::link('/', Auth::user()->username) }}</li>
             		<li>{{ HTML::link('/logout', 'Logout') }}</li>
             	@endif
            </ul>
		  </div>
        </div>
      </div>
    </div>	