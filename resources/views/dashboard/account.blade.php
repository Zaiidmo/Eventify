@extends('layouts.app')

@section('title')
    {{ $authUser->name }} | Account
@endsection

@section('content')
    <section>
        <div
            class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-screen-xl lg:mx-auto px-8 py-32 lg:h-screen  ">
            <div class="col-span-1 bg-black h-fit py-4 rounded-lg border-2 border-primary ">
                <div class="flex flex-col items-center md:mt-6 -mx-2">
                    <img class="object-cover w-32 h-32 mx-2 rounded-full border-2 border-primary"
                        src="{{ asset('storage/uploads/profiles/' . $authUser->avatar) }}" alt="avatar">
                    <h3 class="mx-2 mt-2 font-medium text-subtle ">{{ $authUser->name }}</h3>
                    <p class="mx-2 mt-2 font-medium text-component ">{{ $authUser->email }}</p>
                    <p class="mx-2 mt-2 font-medium text-component "> Roles :
                        @foreach ($authUser->roles as $role)
                            {{ $role->name }}<br>
                        @endforeach
                    </p>
                    <p class="mx-2 mt-1 font-medium text-component ">{{ $authUser->email }}</p>
                </div>
                <div class="flex flex-col items-center mt-6 -mx-2">
                    <a href="#"
                        class="px-4 py-2 rounded-lg text-base font-bold font-buttons text-subtle bg-primary hover:text-secondary">Edit
                        Profile</a>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2 p-4 lg:col-span-3 bg-black h-fit rounded-lg border-2 border-primary ">
                <h1 class="text-3xl lg:text-4xl text-center text-subtle font-supermercado mb-12">Events History</h1>
                @foreach ($authUser->events()->paginate(1) as $event)
                    <div class="flex justify-between py-4 mb-8 border-b border-components">
                        <div>
                            <h3 class="text-blue-500 capitalize">{{ $event->title }}</h3>

                            <a href="/"
                                class="block mt-2 font-medium text-gray-700 hover:underline hover:text-gray-500 dark:text-gray-400 ">
                                {{ $event->description }}
                            </a>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span
                                class="inline-flex items-center rounded-md bg- font-poppins px-2 py-1 text-xs font-medium text-subtle ring-1 ring-inset ring-gray-500/10">{{ $event->status }}</span>
                            <span
                                class="inline-flex items-center rounded-md bg- font-poppins px-2 py-1 text-xs font-medium text-subtle ring-1 ring-inset ring-gray-500/10">{{ $event->tickets->count() }}</span>
                        </div>
                    </div>
                @endforeach

                {{ $authUser->events()->paginate(1)->links() }} <!-- Pagination links -->

            </div>
    </section>
@endsection
