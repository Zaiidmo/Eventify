@extends('layouts.app')

@section('title', 'Eventify')

@section('content')
<section class="top-0 mt-o h-screen relative" style="background-image: url(https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl ">
        <div class="flex flex-col items-start justify-center h-screen ">
            <h1 class="text-9xl font-trade font-bold text-white text-center">Eventify</h1>
            <p class="text-5xl font-bold font-yellowTTail text-white text-center">The best place to find events near you</p>
            <div class="flex flex-row items-center justify-center">
                {{-- <a href="{{ route('events.index') }}"
                    class="py-2 px-8 m-1 text-center bg-primary font-buttons rounded-md text-white lg:inline-block ">
                    Explore Events
                </a> --}}
                {{-- <a href="{{ route('events.create') }}" --}}
                    {{-- class="py-2 px-8 m-1 text-center bg-primary font-buttons rounded-md text-white lg:inline-block ">
                    Create Event
                </a> --}}
            </div>
        </div>
        
    </div>
</section>
@endsection