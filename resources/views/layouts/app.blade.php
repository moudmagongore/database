<!DOCTYPE html>
<html>
<head>
	<title>Projet</title>
	<meta charset="utf-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style>
		.error
		{
			color: red;
			font-weight: bold;
			font-style: italic;
		}
	</style>
</head>
<body>
		@include('layouts.partials._nav_accueil')
		
		<div class="wrapper">
			@yield('container')
		</div>

			{{-- Pour flashy --}}
		<script src="//code.jquery.com/jquery.js"></script>
		@include('flashy::message')



	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
</body>
</html>