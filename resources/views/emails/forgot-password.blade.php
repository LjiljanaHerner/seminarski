<h1>Hello</h1>
<p>
	Molim kliknite sljedeći link za ponovno postavljanje zaporke , 
	<a href="{{env('APP_URL')}}/reset/{{$user->email}}/{{$code}}">klikni ovdje!</a>
</p>