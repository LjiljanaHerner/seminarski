@extends('layouts.master')
@section('title') 
	| register
@endsection
@section('nas')
  Registracija
@endsection
@section('content')
<div class="rew">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Registracija</h3>
			</div>
			<div class="panel-body">
				<form action="/register" method="POST">
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
							<input type="email" name="email" class="form-control" placeholder="example@example.com">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="first_name" class="form-control" placeholder="Ime">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="last_name" class="form-control" placeholder="Prezime">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
							<input type="text" name="adress" class="form-control" placeholder="Adresa">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							<input type="number" name="mob_tel" class="form-control" placeholder="Broj mobitela">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" name="password" class="form-control" placeholder="Zaporka">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" name="password_confirmation" class="form-control" placeholder="Potvrdi zaporku">
						</div>
					</div>
					<div class="form-group">
							<input type="submit" name="Registracija" value="Registracija"  class="btn btn-success pull-right">
					</div>
				</form>
			</div>	
			
		</div>
	</div>

</div>
@endsection
