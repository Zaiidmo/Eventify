@extends('layouts.app')

@section('title', 'Eventify')

@section('content')
    <section>
        <div class="w-full bg-center bg-cover h-[28rem] lg:h-[38rem]"
            style="background-image: url('https://images.unsplash.com/photo-1501612780327-45045538702b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class=" w-full h-full bg-gray-900/40">
                <div class=" flex flex-col items-start justify-center h-full text-left max-w-screen-xl mx-auto">
                    <h1 class="text-9xl font-trade font-bold text-white text-center">Eventify</h1>
                    <p class="text-5xl font-bold font-yellowTTail text-white text-center">The best place to find events near
                        you</p>
                    @auth
                        @if (Auth::user()->role == 'spectator')
                        <div class="self-center justify-self-end">
                            <a href="{{ route('events.index')}}"><button id="login-btn"
                                    class="py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">Explore
                                    Events</button></a>
                        </div>
                        @else
                        <div class="self-center justify-self-end">
                            <a href="{{ route('events.create')}}"><button id="login-btn"
                                    class="py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">Create and Event</button></a>
                        </div>
                        @endif
                    @else
                        <div class="self-center justify-self-end">
                            <a href="{{ route('register') }}"><button id="login-btn"
                                    class="py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">Get
                                    Started Now</button></a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 mx-auto max-w-screen-xl my-10 ">
        <div class="border-b border-primary bottom-2 flex justify-between items-center my-6">
            <h2 class="text-white font-supermercado text-3xl">Popular Reached Categories</h2>
            <div class="self-center justify-self-end mb-4">
                <button id="login-btn"
                    class=" py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">
                    See More
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <div class="category">
                <div class=" inset-0 bg-center bg-black"></div>
                <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                            class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-poppins text-2xl font-bold text-white shadow-xl">Category</h1>
                        <h1 class="text-sm font-light font-poppins text-gray-200 shadow-xl">Description</h1>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class=" inset-0 bg-center bg-black"></div>
                <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                            class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-poppins text-2xl font-bold text-white shadow-xl">Category</h1>
                        <h1 class="text-sm font-light font-poppins text-gray-200 shadow-xl">Description</h1>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class=" inset-0 bg-center bg-black"></div>
                <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                            class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-poppins text-2xl font-bold text-white shadow-xl">Category</h1>
                        <h1 class="text-sm font-light font-poppins text-gray-200 shadow-xl">Description</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 mx-auto max-w-screen-xl my-10 ">
        <div class="border-b border-primary bottom-2 flex justify-between items-center my-6">
            <h2 class="text-white font-supermercado  text-3xl tracking-wider">Upcoming Events</h2>>
            <div class="self-center justify-self-end mb-4">
                <a href="/events">
                    <button
                        class=" py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">
                        See More
                    </button>
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div
                class="flex w-full items-center justify-between rounded-2xl bg-transparent border-2 border-component p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <div class="flex items-center">
                    <div class="">
                        <img class="h-[83px] w-[83px] rounded-lg" src="{{ asset('events,png') }}" alt="Event Photo" />
                    </div>
                    <div class="ml-4">
                        <p class="text-base font-medium text-navy-700 dark:text-white">
                            Technology behind the Blockchain
                        </p>
                        <p class="mt-2 text-sm text-subtle">
                            12th March 2022
                        </p>
                    </div>
                </div>
                <div class="mr-4 gap-2 flex flex-col items-center justify-center text-gray-600 dark:text-white">
                    <button class="text-md font-buttons border-2 border-primary rounded-full px-8 py-2">Buy Ticket</button>
                    <button class="text-md font-buttons border-2 border-primary bg-primary rounded-full px-8 py-2">See
                        Details</button>
                </div>
            </div>
            <div
                class="flex w-full items-center justify-between rounded-2xl bg-transparent border-2 border-component p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <div class="flex items-center">
                    <div class="">
                        <img class="h-[83px] w-[83px] rounded-lg"
                            src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image1.png?raw=true"
                            alt="" />
                    </div>
                    <div class="ml-4">
                        <p class="text-base font-medium text-navy-700 dark:text-white">
                            Technology behind the Blockchain
                        </p>
                        <p class="mt-2 text-sm text-subtle">
                            12th March 2022
                        </p>
                    </div>
                </div>
                <div class="mr-4 gap-2 flex flex-col items-center justify-center text-gray-600 dark:text-white">
                    <button class="text-md font-buttons border-2 border-primary rounded-full px-8 py-2">Buy Ticket</button>
                    <button class="text-md font-buttons border-2 border-primary bg-primary rounded-full px-8 py-2">See
                        Details</button>
                </div>
            </div>
            <div
                class="flex w-full items-center justify-between rounded-2xl bg-transparent border-2 border-component p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <div class="flex items-center">
                    <div class="">
                        <img class="h-[83px] w-[83px] rounded-lg"
                            src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image1.png?raw=true"
                            alt="" />
                    </div>
                    <div class="ml-4">
                        <p class="text-base font-medium text-navy-700 dark:text-white">
                            Technology behind the Blockchain
                        </p>
                        <p class="mt-2 text-sm text-subtle">
                            12th March 2022
                        </p>
                    </div>
                </div>
                <div class="mr-4 gap-2 flex flex-col items-center justify-center text-gray-600 dark:text-white">
                    <button class="text-md font-buttons border-2 border-primary rounded-full px-8 py-2">Buy Ticket</button>
                    <button class="text-md font-buttons border-2 border-primary bg-primary rounded-full px-8 py-2">See
                        Details</button>
                </div>
            </div>
            <div
                class="flex w-full items-center justify-between rounded-2xl bg-transparent border-2 border-component p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <div class="flex items-center">
                    <div class="">
                        <img class="h-[83px] w-[83px] rounded-lg"
                            src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image1.png?raw=true"
                            alt="" />
                    </div>
                    <div class="ml-4">
                        <p class="text-base font-medium text-navy-700 dark:text-white">
                            Technology behind the Blockchain
                        </p>
                        <p class="mt-2 text-sm text-subtle">
                            12th March 2022
                        </p>
                    </div>
                </div>
                <div class="mr-4 gap-2 flex flex-col items-center justify-center text-gray-600 dark:text-white">
                    <button class="text-md font-buttons border-2 border-primary rounded-full px-8 py-2">Buy Ticket</button>
                    <button class="text-md font-buttons border-2 border-primary bg-primary rounded-full px-8 py-2">See
                        Details</button>
                </div>
            </div>
        </div>
    </section>
@endsection
