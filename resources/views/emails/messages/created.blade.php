@component('mail::message')
# Salut Administrateur,

- L'utilisateur {{$name}} dont l'adresse mail est {{$email}} a laissé un message pour vous:
@component('mail::panel')
{{$message}}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
