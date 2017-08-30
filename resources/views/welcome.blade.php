<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.headers')
       
</head>

<body>
	@include('layouts.nav')
	@include('layouts.header_carousel')
   
	
    <!-- Page Content -->
    <div class="container">
		@yield('content')
		@include('layouts.footers')
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
