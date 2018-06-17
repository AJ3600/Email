@component('mail::message')
## Hello {{ $user['user_name'] }},

Your account has been successfully registered. Please click the below link to verify your email address. Your registered email-id is {{ $user['email'] }}.

@component('mail::button', ['url' => url('user/verify', $user->verifyUser->token)])
Verify Email
@endcomponent

Regards,<br>
{{ config('app.name') }}

<hr />

<small>
If you’re having trouble clicking the "Verify Email" button, copy and paste the URL below into your web browser:
[{{ url('user/verify', $user->verifyUser->token) }}]({{ url('user/verify', $user->verifyUser->token) }})
</small>
@endcomponent
