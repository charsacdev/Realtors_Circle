<x-mail::message>
#  Password Reset Request

<p>Hi {{ "$first_name $last_name" }}</p>
<p>You recently requested to reset your password for your account. Click the button below to reset it:</p>
<p>
    <a style="padding:10px 20px;background:green;color:white;text-align: center;display:inline-block;border-radius:8px;text-decoration:none;" 
    href="{{ $url }}">Reset Password</a>
</p>
 <p>Please note that this link will expire in 30 minutes. If you did not request a password reset, please ignore this email or contact support if you have questions.</p>

Best regards,<br>
The {{ config('app.name') }} Support Team
</x-mail::message>
