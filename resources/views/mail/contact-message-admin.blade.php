<x-mail::message>
#  New Message Notitification

Name <b>{{$username}}</b><br>
Email <b>{{$useremail}}</b><br>
{{$message}}

Best regards,<br>
The {{ config('app.name') }} Support Team
</x-mail::message>
