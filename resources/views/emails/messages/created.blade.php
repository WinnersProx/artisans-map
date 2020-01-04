@component('mail::message')
# Hey ArtisansMap Admin

- {{ $name }} `` : {{ $email }}``

@component('mail::panel')
	{{ $content }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
