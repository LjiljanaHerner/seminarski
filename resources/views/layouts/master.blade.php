<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.headers')

  </head>

  <body>

    <div class="container">
      @include ('layouts.top-menu')
	  @yield('content')
    </div>
  </body>
</html>
