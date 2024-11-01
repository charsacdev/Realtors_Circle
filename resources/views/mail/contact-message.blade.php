<x-mail::message>
#  We Have Received Your Message

Dear <b>{{$username}}</b><br>
Thank you for reaching out to us at The RealtorsCircle. We have received your message and appreciate you taking the time to contact us.
<br>
Our support team is currently reviewing your inquiry and will get back to you as soon as possible. We aim to respond to all messages within short period
<br>
In the meantime, if you have any additional information or questions, please feel free to reply to this email.
<br>
Thank you for your patience and understanding.

Best regards,<br>
The @if (!empty($company_name))
    {{ $company_name }}
    @else
    {{ config('app.name') }}
@endif  Support Team
</x-mail::message>
