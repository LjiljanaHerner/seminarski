@extends('layouts.master')
@section('nas')
  Dashboard
@endsection
<div class="container">
      <div class="page-header">
        <h1>Administrator {{Sentinel::getUser()->first_name}}</h1>
      </div>
	  <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id korisnika</th>
                  <th>Ime korisnika</th>
                  <th>Prezime korisnika</th>
				  <th>e-mail korisnika</th>
                  <th>Adresa korisnika</th>
				  <th>Broj mob. korisnika</th>
                </tr>
              </thead>
              <tbody>
				@foreach ($users as $user)
					<tr>
					  <td>{{$user->id}}</td>
					  <td>{{$user->first_name}}</td>
					  <td>{{$user->last_name}}</td>
					  <td>{{$user->email}}</td>
					  <td>{{$user->adress}}</td>
					  <td>{{$user->mob_tel}}</td>
					</tr>
				@endforeach
			  </tbody>
			</table>
          </div>
 </div>