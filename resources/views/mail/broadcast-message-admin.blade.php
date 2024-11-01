<x-mail::message>
Dear <b>{{ $username }}</b><br>

<div>
    {!! $content !!}
</div>

Best Regards,<br>
The {{ config('app.name') }} Support Team
</x-mail::message>
