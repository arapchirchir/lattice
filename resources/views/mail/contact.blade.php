<x-mail::message>
# You have a message from {{ $name }}.

# Subject: {{ $subject }}

# Message:
{!! $message !!}

# You can reach out to the sender via email: {!! $email !!}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
