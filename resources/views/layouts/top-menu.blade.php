<div class="header clearfix">
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: green;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
					<a class="navbar-brand" href=""> @yield('nas')</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">   
					@if (Sentinel::check())
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
                    @else
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li role="presentation"><a href="/login">Prijava</a></li>
						<li role="presentation"><a href="/register">Registracija</a></li>
                    @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 </div>