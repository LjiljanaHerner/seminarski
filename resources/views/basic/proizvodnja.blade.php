@extends('layouts.master')
<div class="container">
      <div class="page-header">
        <h1>Poštovani {{Sentinel::getUser()->first_name}}, vaši proizvodi su:</h1>
      </div>
	  <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Ime proizvoda</th>
                  <th>Količina</th>
                </tr>
              </thead>
              <tbody>
				@foreach ($products as $product)
					<tr>
					  <td>{{$product->name}}</td>
					  <td>{{$product->pivot->kolicina}}</td>
					</tr>
				@endforeach
			  </tbody>
			</table>
          </div>
 </div>