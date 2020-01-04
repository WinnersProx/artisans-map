@extends('layouts.app', ['title' => page_title('Reach out!')])

@section('content')
	<div class="container">
		
		<div class="row mt-4">
			<div class="col-md-8 offset-md-2 col-sm-12">
				<h3>Get in Touch!!!</h3>
				<p class="text-muted">
					If you're having trouble with this service, <a href="mailto:bihames4vainqueur@gmail.com" target="__blank">Reach out!</a>
				</p>
				<form action="{{ route('contact.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="description" class="control-label">
							Name
						</label>
						<input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name">
						{!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email">
						{!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
					</div>
					<div class="form-group">
						<label for="content control-label" class="sr-only {{ $errors->has('message') ? 'text-danger' : '' }}">Message</label>
						<textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content" rows="5"></textarea>
						{!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-sm btn-block btn-primary float-right">
							<i class="fa fa-send"></i> Submit Enquiry &raquo;
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    
@stop
