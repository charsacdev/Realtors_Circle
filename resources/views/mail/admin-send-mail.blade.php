<x-mail::message>

Dear <b>{{ $username }} </b><br>

<div>
    {!! $content !!}
</div>

Best regards,<br>
The {{ $company_name ? $company_name : config('app.name') }} Support Team
</x-mail::message>
