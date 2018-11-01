<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- styles -->
	<link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('./css/style.css')}}">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Mukta:500" rel="stylesheet">

</head>
<body class="bg-secondary">
	
<div class="container">
	 <!-- content -->
	<div class="content mt-5 align-middle">
		@yield('content')
	</div>
	


	
</div>

<script src="{{asset('./js/jquery-3.3.1.min.js')}}"></script>

<script>

	$(function() {
		 // $('.alert-success').delay(3000).fadeOut("slow");
		  $('.alert-success').addClass('hide-alert-message');
	});
 
</script>
</script>
</body>
</html>