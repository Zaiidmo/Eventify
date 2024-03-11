<x-mail::message>
# Dear valued customer,

Thank you for your recent purchase! Your ticket for the upcoming event has been successfully generated and is attached to this email.

Please find your ticket attached. You can print it out or display it on your mobile device for entry to the event.

If you have any questions or need further assistance, feel free to contact us.

<x-mail::button :url="route('events.index')">
Go Back To Events Discovery
</x-mail::button>

Best regards,<br>
{{ config('app.name') }}
</x-mail::message>
