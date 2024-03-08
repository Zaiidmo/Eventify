{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
<div class="font-sans text-gray-800">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">Reservation Status Update</h1>
    <p>Your reservation status has been updated.</p>

    <div class="border-t border-gray-200 mt-4 pt-4">
        <p class="text-gray-700"><strong>Event:</strong> {{ $ticket->event->title }}</p>
        <p class="text-gray-700"><strong>New Status:</strong> {{ $ticket->status }}</p>
    </div>

    <p class="mt-4">Thank you,</p>
    <p>{{ config('app.name') }}</p>
</div>
@endcomponent
