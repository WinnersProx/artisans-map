@extends('layouts.main', ['title' => page_title('About')])
@section('content')
	<div class="container mt-4">
		<h3>What is {{ config('app.name') }}?</h3>
		<p>
			{{ config('app.name') }} is a clone app of 
			<a href="https://laramap.com" target="_blank">Laramap</a>
		</p>
		<div class="row">
			<div class="col-md-8">
				<p class="alert alert-warning">
					<strong>
						<i class="fa fa-exclamation-circle"></i>
						This app has been built by 
						<a href="https://twitter.com/etsmo">@etsmo</a> for learning purpose!
				</strong>
				</p>
			</div>
		</div>
		<p>Feel free to improve <a href="#">the source code</a></p>

		<hr>
		<h3>What is Laramap ? </h3>
		<p>Laramap is the website that by which {{ config('app.name') }} is inspired :).</p>
		<p>More info <a href="https://laramap.com/p/about">here</a></p>
		
		<hr>

		<h3>Which are tools and services used in {{ config('app.name') }}?</h3>
		<p>It's basically built on top of Laravel &amp; Bootstrap. However there's a bunch of additional services including email service</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>GoogleMaps</li>
			<li>Gravatar</li>
			<li>Anthony MArthin's Geolocation Package</li>
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
	</div>
@stop