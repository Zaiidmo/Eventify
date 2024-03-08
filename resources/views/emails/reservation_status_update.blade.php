<x-mail::message>
# Reservation Status Update

Dear {{$ticket->user->name}},

We are writing to inform you that your ticket for the event **{{$ticket->event->title}}** has been updated. <br>
Your ticket number is **{{$ticket->id}}**. <br>
The new status is **{{$ticket->status}}**. <br>

@if ($ticket->event->mode === 'manual' && $ticket->status === 'approved')
{
<x-mail::button :url="''">
Checkout and download your ticket
</x-mail::button>
}

Thank You   ,<br>
{{ config('app.name') }}
</x-mail::message>