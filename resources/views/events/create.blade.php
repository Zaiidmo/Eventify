@extends('layouts.app')

@section('title')
    Create Event | {{ config('app.name', 'LSAPP') }}
@endsection

@section('content')
    <section>
        <div class="flex flex-col max-w-screen-xl mx-auto pt-32">
            @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Whoops!</strong>
                        <span class="block sm:inline">There were some problems with your input.</span>
                        <ul class="list-disc mt-2 ml-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  
            <h1 class="font-supermercado text-white text-4xl lg:text-6xl text-center">Create an event</h1>
            <form class="mx-8 my-8 lg:mx-0 font-poppins font-semibold tracking-wide" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="flex flex-row justify-between mt-8 gap-8">
                    <div class="w-full">
                        <label for="Event Title" class="block text-sm text-gray-500 dark:text-gray-300">Event Title</label>
                        <input type="text" placeholder="Eventify" name="title" class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" required />
                    </div>
                    <div class="w-full">
                        <label for="Event Location" class="block text-sm text-gray-500 dark:text-gray-300">Category</label>
                        <select name="category_id" class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" required>
                            <option selected disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            
                <div class="mt-8">
                    <label for="event-description" class="block text-sm text-gray-500 dark:text-gray-300">Event Description</label>
                    <textarea id="event-description" name="description" placeholder="Let's have fun..." class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" required></textarea>
                </div>


                <div class="flex flex-row justify-between mt-8 gap-8">
                    <div class="w-full">
                        <label for="Event date" class="block text-sm text-gray-500 dark:text-gray-300">Event
                            date</label>
                        <input type="date" placeholder="Eventify" name="date"
                            class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                    </div>
                    <div class="w-full">
                        <label for="Event Location" class="block text-sm text-gray-500 dark:text-gray-300">Event
                            Location</label>
                        <input type="text" placeholder="Eventify" name="location"
                            class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-8 gap-8">
                    <div class="w-full">
                        <label for="Event Capacity" class="block text-sm text-gray-500 dark:text-gray-300">Event
                            Capacity</label>
                        <input type="text" placeholder="Available Tickets ?" name="capacity"
                            class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                    </div>
                    <div class="w-full">
                        <label for="Ticket Price" class="block text-sm text-gray-500 dark:text-gray-300">Ticket
                            Price</label>
                        <input type="text" placeholder="$ " name="ticket_price"
                            class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                    </div>
                    <div class="w-full">
                        <label for="Reservation Mode" class="block text-sm text-gray-500 dark:text-gray-300">Reservation
                            Mode</label>
                        <input type="text" placeholder="Available Tickets ?" name="mode"
                            class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                    </div>
                </div>

                <div class="mt-8 w-full">
                    <label for="poster" class="block text-sm text-gray-500 dark:text-gray-300">Upload a Poster</label>
                    <label for="poster" class="flex flex-col items-center w-full p-5 mt-2 text-center bg-gray-700 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 text-gray-500 dark:text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>

                    <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload a poster</h2>

                    <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg & drop your
                        file JPG, JPEG, PNG. </p>                        <input name="poster" id="poster" type="file" class="hidden" required />
                    </label>
                </div>
            
                <!-- Submit button -->
                <button type="submit" class="mt-8 py-2.5 w-full border-2 border-secondary text-lg font-poppins tracking-widest font-bold rounded-lg text-subtle">
                    C R E A T E
                </button>
            </form>


        </div>

        </div>
    </section>
@endsection
@section('scripts')
@auth
    <script src="{{ mix('resources/js/authNavbar.js') }}"></script>
@endauth
@endsection
