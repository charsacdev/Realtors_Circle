<x-mail::message>

Hello,

Thank you for signing up with Realtors Circle! To complete your registration and get started,
 please verify your email address by clicking the link below:
<br>
<br>
<a style="padding:10px 20px;background:green;color:white;text-align: center;display:inline-block;border-radius:8px;text-decoration:none;" 
    href="{{ $url }}">Verify My Email</a>
<br>
<br>
Or copy and paste this link into your browser:
<a href="{{ $url }}">{{ $url }}</a>

<br>
Verifying your email helps us ensure the security of your account and gives you full access to all the features Realtors Circle has to offer.
<br>
If you didn't sign up for an account, please ignore this email.
<br>
<br>


Best regards,<br>
The {{ config('app.name') }} Team
</x-mail::message>
