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
				@if (Sentinel::check())
						<a class="navbar-brand" href="{{ url('/') }}"> {{Sentinel::getUser()->first_name}}, prijavljeni ste</a>
				@else
					<a class="navbar-brand" href="{{ url('/') }}">Migalovci</a>
				@endif
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">   
					@if (Sentinel::check())
						<li>
							<a href="{{ url('about') }}">O nama</a>
						</li>
						@if (Sentinel::inRole('basic'))
							<li>
							<a href="{{ url('proizvodnja') }}">Proizvodnja</a>
							</li>
						@else
							<li>
							<a href="{{ url('admin') }}">Admin</a>
							</li>
						 @endif
						<li>
							<a href="{{ url('kontakt') }}">Kontakt</a>
						</li>
                        <li><a href="{{ url('logout') }}">Odjavi se</a></li>
                    @else
						<li>
							<a href="{{ url('about') }}">O nama</a>
						</li>
						<li>
							<a href="{{ url('ponuda') }}">Ponuda</a>
						</li>
						<li>
							<a href="{{ url('kontakt') }}">Kontakt</a>
						</li>
						<li>
							<a class="btn background-white" href="{{ url('login') }}" role="button">Prijavi se</a> @yield('a')
						</li>
                    @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>