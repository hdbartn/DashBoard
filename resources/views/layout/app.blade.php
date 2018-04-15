<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tasklist</title>

	{{-- Fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	{{-- Stylesheets --}}
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" >
	<script href="{{ URL::asset('css/app.css') }}"></script>

</head>
<body>
	@include ('layout.header')
	<div class="container">
		@yield ('content')
	</div>
</body>
</html>