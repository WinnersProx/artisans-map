<!DOCTYPE html>
<html>
<head>
	<title>{{ 'Laracarte - ' . $title ?? '' }}</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Vainqueur Bihame">
  <title>Eventbrote - {{ $title ? : '' }}</title>
	<meta name="theme-color" content="#563d7c">
	<link rel="stylesheet" type="text/css" href="/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css">
</head>
<body>
	@include('layouts.partials._nav')

	@yield('content')

	@include('layouts.partials._footer')

	<script type="text/javascript" src="/libs/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>