@extends('layouts.app', ['title' => 'Home'])

@section('content')
	<div class="container">
		
		<div class="row mt-4">
			<div class="col-md-8 offset-2 col-sm-10 col-sm-offset-1">
				<h3>Get in Touch!!!</h3>
				<p class="text-muted">
					If you're having trouble with this service, <a href="mailto:bihames4vainqueur@gmail.com">Reach out!</a>
				</p>
				<form action="{{ route('contact.store') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="description" class="{{ $errors->has('name') ? 'text-danger' : '' }}">
							Name
						</label>
						<input type="text" class="form-control" name="name" id="name">
						{!! $errors->first('name', '<span class="help-block text-danger">:message</span>') !!}
					</div>
					<div class="form-group">
						<label for="email" class="{{ $errors->has('email') ? 'text-danger' : '' }}">Email</label>
						<input type="text" class="form-control" name="email" id="email">
						{!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!}
					</div>
					<div class="form-group">
						<label for="message" class="sr-only {{ $errors->has('message') ? 'text-danger' : '' }}">Message</label>
						<textarea class="form-control" name="message" id="message" rows="5"></textarea>
						{!! $errors->first('message', '<span class="help-block text-danger">:message</span>') !!}
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
