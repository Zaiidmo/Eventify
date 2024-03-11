@extends('layouts.dashboard')

@section('title', 'Admin | Events Management')

@section('content')
<section >
    <div class="w-full bg-center bg-cover h-[28rem] lg:h-screen"
            style="background-image: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <div class=" w-full h-full bg-gray-900/40">
            <div id="tableData" class="container px-4 pt-36 ml-auto">
                <div class="flex flex-col lg:flex-row w-full justify-center items-center gap-x-3">
                    <h1 class="text-4xl md:text-6xl font-supermercado font-medium text-subtle ">Purhsased <span class="text-primary">Tickets</span></h1>
                    <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{$countTickets}} ticket</span>
                </div>

                @if ($errors->any())
                <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul class="list-disc mt-2 ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:pr-8 lg:pr-12">
                            <div class="overflow-hidden mb-10 border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-950">
                                        <tr>
                                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                                Ticket Id
                                            </th>
            
                                            
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">Purshased By</th>
                                            
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">Event</th>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">Price</th>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                                <button class="flex items-center gap-x-2">
                                                    <span>Status</span>
            
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                                    </svg>
                                                </button>
                                            </th>
            
                                            {{-- <th scope="col" class="relative py-3.5 px-4">
                                                <span class="sr-only">Edit</span>
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="bg-black divide-y divide-gray-700  ">
                                        @foreach ($tickets as $ticket)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <h2 class="font-medium text-gray-800 dark:text-white "># {{ $ticket->id }}</h2>
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
            
                                                    <div class="flex items-center gap-x-2">
                                                        <img class="object-cover w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                                        <div>
                                                            <h2 class="font-medium text-gray-800 dark:text-white ">{{ $ticket->user->name }}</h2>
                                                            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">{{ $ticket->user->email }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                <div>
                                                    <h2 class="font-medium text-gray-800 dark:text-white ">{{ $ticket->event->title }}</h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">By : {{ $ticket->event->user->name }}</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                <div>
                                                    <h2 class="font-medium text-gray-800 dark:text-white ">{{ $ticket->price }} $</h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">purshased at : {{$ticket->created_at}} </p>
                                                </div>
                                            </td>
                                            
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{ $ticket->status }}</td>
                                        </tr>
                                        @endforeach
            
                                    </tbody>
                                </table>
                            </div>
                            {{ $tickets->links()}}
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
@auth
    <script src="{{ mix('resources/js/authNavbar.js') }}"></script>
@endauth
@endsection
