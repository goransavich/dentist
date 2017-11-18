@extends('layouts.master')

@section('navigation')
<div class="navigacija">
    <div class="nav-outer"> 
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#page_top"><img src="images/logo1@2x.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li class=""><a href="/">Home</a></li>
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                        @if(Auth::check())
                        <li class=""><a href="/logout" title="logout">{{Auth::user()->name}}</a></li>  
                        @endif  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="container">

	<div class="row buttoncenter">
		<div class="col-lg-8 col-lg-offset-2">

			<h1>Log in</h1>
			<p>You not logged in. Please insert your login data to access schedule.</p>

            <form method="POST" action="">  
            
			{{csrf_field()}}

				  <div class="form-group">
				    <label for="username">User name</label>
				    <input type="text" class="form-control" name="username" required>
				  </div>

				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name="password" required>
				  </div>
				  
				  
				  <div class="form-group">
				  	<button type="submit" class="btn btn-primary" name="submit">Login</button>
				  </div>

				  <div class="form-group">
				  	@include('layouts.errors')
				  </div>

			</form>
		</div>
	</div>

</div>
@endsection