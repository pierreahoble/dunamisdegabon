@component('mail::message')
# Hey Admin

- {{ $nom }}
- {{ $email }}
- {{ $sujet }}
- {{ $msg }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
