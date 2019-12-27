<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script type="text/javascript" src="/js/app.j"></script>
   
    <title>{{config('app.name', 'LSAPP')}} </title>
</head>
<body>
	@include('inc.navbar')
	<div class="container ">
    	@yield('content')
    </div>
</body>
</html>