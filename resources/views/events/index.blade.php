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
                    <div id='search-form'>
                        <label
                            class="mx-auto mt-8 relative bg-white min-w-sm max-w-4xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300"
                            for="search-bar">
                            <input id="search" type="search" placeholder="your keyword here" name="search"
                                class="px-6 py-2 w-2/3 max-w-2xl rounded-md flex-1 outline-none bg-white" required="">
                            <button type="submit"
                                class="w-1/3 md:w-auto px-6 py-3 bg-primary-300 border-primary-100 text-black border-component fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                                <div class="flex items-center transition-all opacity-1">
                                    <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                                        Search
                                    </span>
                                </div>
                            </button>

                            <select id="categories" name="category"
                                        class="w-1/3 md:w-auto px-6 py-2 text-primary-300 border-primary-100 fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                                        <option class="text-primary-300" value="" selected="">All</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container px-6 py-16 mx-auto">
            <h1 class="text-4xl font-supermercado text-white">Explore Categories </h1>
            <div class="mt-5 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 ">
                @foreach ($categories as $category)
                    <div class="h-auto text-center flex flex-col gap-4 justify-between items-center">
                        <img src="{{ asset('storage/uploads/categories/' . $category->image) }}" alt="category Image"
                            class="rounded-full border-secondary border w-24 h-24" />
                        <a href="#">
                            <h5 class="text-white font-poppins text-xl font-bold tracking-widest">{{ $category->name }}</h5>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section> --}}
    <section>
        <div class="container px-6 py-16 mx-auto">
            <h1 class="text-4xl font-supermercado text-white">Up Coming Events </h1>
            <div id="event_container"
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 max-md:max-w-lg mx-auto">
            @include('events.data')

            </div>
            <div class="m-4">
                {{ $events->links() }}
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ mix('resources/js/search.js') }}"></script>
    @auth
        <script src="{{ mix('resources/js/authNavbar.js') }}"></script>
    @endauth
@endsection
