@extends('layouts.app')

@section('title', 'Eventify | Discover')

@section('content')
    <section>
        <div class="w-full bg-center bg-cover h-[28rem] lg:h-[38rem]"
            style="background-image: url('https://www.l-acoustics.com/wp-content/uploads/2021/06/Tomorrowland_2.jpg');">
            <div class=" w-full h-full bg-gray-900/40">
                <div class=" flex flex-col items-center justify-center h-full text-left max-w-screen-xl mx-auto">
                    <h1 class="text-5xl lg:text-7xl font-trade font-bold text-white text-center">Don't miss out !</h1>
                    <p class="text-xl lg:text-4xl font-bold font-yellowTTail text-white text-center">Explore the <span
                            class="text-secondary">vibrant events</span> happening locally and globally.</p>
                    <div method="" id="search_bar" class="relative mb-8 w-full">
                        <label
                            class="mx-2 lg:mx-auto mt-8 relative bg-white min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300"
                            for="search-bar">
                            <input type="search" id="search" placeholder="your keyword here" name=""
                                class="px-6 py-2 w-full rounded-md flex-1 outline-none bg-white" required="">
                            <button type="submit" name="submit"
                                class="w-full md:w-auto px-6 py-3 bg-primary-300 border-primary-100 text-black fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                                <div class="flex items-center transition-all opacity-1">
                                    <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                                        Search
                                    </span>
                                </div>
                            </button>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-6 py-16 mx-auto">
            <h1 class="text-4xl font-supermercado text-white">Explore Categories </h1>
            <div class="mt-5 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 ">
                <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                    <img src="{{ asset('events.png') }}" alt="events Image" class="rounded-full w-1/2 h-1/2" />
                    <a href="#">
                        <h5 class="text-white font-poppins text-xl font-bold tracking-widest">Category Title</h5>
                    </a>
                </div>
                <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                    <img src="{{ asset('events.png') }}" alt="events Image" class="rounded-full w-1/2 h-1/2" />
                    <a href="#">
                        <h5 class="text-white font-poppins text-xl font-bold tracking-widest">Category Title</h5>
                    </a>
                </div>
                <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                    <img src="{{ asset('events.png') }}" alt="events Image" class="rounded-full w-1/2 h-1/2" />
                    <a href="#">
                        <h5 class="text-white font-poppins text-xl font-bold tracking-widest">Category Title</h5>
                    </a>
                </div>
                <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                    <img src="{{ asset('events.png') }}" alt="events Image" class="rounded-full w-1/2 h-1/2" />
                    <a href="#">
                        <h5 class="text-white font-poppins text-xl font-bold tracking-widest">Category Title</h5>
                    </a>
                </div>
                <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                    <img src="{{ asset('events.png') }}" alt="events Image" class="rounded-full w-1/2 h-1/2" />
                    <a href="#">
                        <h5 class="text-white font-poppins text-xl font-bold tracking-widest">Category Title</h5>
                    </a>
                </div>
                <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                    <img src="{{ asset('events.png') }}" alt="events Image" class="rounded-full w-1/2 h-1/2" />
                    <a href="#">
                        <h5 class="text-white font-poppins text-xl font-bold tracking-widest">Category Title</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-6 py-16 mx-auto">
            <h1 class="text-4xl font-supermercado text-white">Up Coming Events </h1>
            <div class="my-5 grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach($events as $event)
                <a class="flex flex-col group bg-component border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition "
                    href="#">
                    <div class="relative pt-[50%] sm:pt-[60%]  rounded-t-xl overflow-hidden">
                        <img class=" absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                            src="{{ asset('storage/uploads/events/' . $event->poster )}}" alt="Event Photo">
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="text-lg font-bold text-white">
                            {{ $event->title}}
                        </h3>
                        <p class="mt-1 text-subtle">
                           Category : {{ $event->category->name }}
                        </p>
                    </div>
                </a>

                @endforeach
            </div>
            {{ $events->links() }}
        </div>
    </section>
@endsection
@section('scripts')
    @auth
        <script src="{{ mix('resources/js/authNavbar.js') }}"></script>
    @endauth
@endsection
