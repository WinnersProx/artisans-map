<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>{{ $title }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Vainqueur Bihame">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css">
  <style type="text/css">
  	body{
      margin-top: 50px;
  		/*font-family: 'Open-Sans', sans-serif*/
  	}
  	footer{
  		margin: 4em 0;
  	}
  </style>
</head>
<body>

	@include('layouts.partials._nav')
	<div class="content">
		@yield('content')
	</div>
	
	@include('layouts.partials._footer')
  @include('flashy::message')
  
	<script type="text/javascript" src="/libs/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/libs/bootstrap/js/bootstrap.min.js"></script>
    @if(Session::has('flashy_notification.message'))
      <script id="flashy-template" type="text/template">
          <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
              <i class="material-icons">speaker_notes</i>
              <a href="#" class="flashy__body" target="_blank"></a>
          </div>
      </script>
      <script>
          flashy("{{ Session::get('flashy_notification.message') }}", "{{ Session::get('flashy_notification.link') }}");
      </script>
    @endif
</body>
</html>