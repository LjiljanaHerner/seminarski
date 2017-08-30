@extends('layouts.master')
@section('title') 
	| login
@endsection

@section('nas')
  Migalovaca
@endsection
   
@section('content')
<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Prijava</h3>
				</div>
				<div class="panel-body">
					<form action="/login" method="POST">
						{{csrf_field()}}
						@if(session('error'))
							<div class="alert alert-danger">
								{{session('error')}}
							</div>
						@endif
						
						@if(session('success'))
							<div class="alert alert-success">
								{{session('success')}}
							</div>
						@endif
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Zaporka" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								Zapamti me
								<input type="checkbox" name="remember_me">
							</div>
						</div>
						<a href="/forgot-password">Zaboravili ste zaporku?</a>
						<div class="form-group">
								<input type="submit" name="Prijava" value="Prijava" class="btn btn-success pull-right">
						</div>
					</form>
				</div>	
				
			</div>
		</div>
</div>
@endsection


	