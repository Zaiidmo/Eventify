@extends('layouts.dashboard')

@section('title', 'Admin | Users Management')

@section('content')
    <section>
        <div class="w-full bg-center bg-cover h-[28rem] lg:h-screen"
            style="background-image: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

            <div class=" w-full h-full bg-gray-900/40">
                <div id="tableData" class="container px-4 pt-36 ml-auto">
                    <div class="flex flex-col lg:flex-row w-full justify-center items-center gap-x-3">
                        <h1 class="text-4xl md:text-6xl font-supermercado font-medium text-subtle ">Registered <span
                                class="text-primary">Users</span></h1>
                        <span
                            class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $countUsers }}
                            users</span>
                    </div>

                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:pr-8 lg:pr-12">
                                @if (session('success'))
                                    <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative "
                                        role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative "
                                        role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div
                                    class="overflow-hidden mb-10 border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class=" min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-950">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                                    <div class="flex items-center gap-x-3">
                                                        <span>Name</span>
                                                    </div>
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                                    <button class="flex items-center gap-x-2">
                                                        <span>Role</span>

                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                                        </svg>
                                                    </button>
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                                    Email address</th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                                    Registration Date</th>

                                                <th scope="col" class="relative py-3.5 px-4">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-black divide-y divide-gray-700  ">
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td
                                                        class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <div class="inline-flex items-center gap-x-3">
                                                            
                                                            <div class="flex items-center gap-x-2">
                                                                <img class="object-cover w-10 h-10 rounded-full"
                                                                    src="{{ asset('storage/uploads/profiles/' . $user->avatar) }}"
                                                                    alt="">
                                                                <div>
                                                                    <h2 class="font-medium text-gray-800 dark:text-white ">
                                                                        {{ $user->name }}</h2>
                                                                    <p
                                                                        class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                        @ {{ $user->name }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @foreach ($user->roles as $role)
                                                            <p>{{ $role->name }}</p>
                                                        @endforeach
                                                    </td>
                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        {{ $user->email }}</td>
                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        {{ $user->created_at }}</td>

                                                    <td class="px-4 py-4  text-sm whitespace-nowrap">

                                                        <div class="flex flex-row justify-center gap-8 ">
                                                            <form action="{{ route('update-access', ['user' => $user->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                @if ($user->account_status === 'allowed')
                                                                    <input type="hidden" name="account_status"
                                                                        value="restricted">
                                                                    <button type="submit"
                                                                        class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-primary rounded-lg hover:bg-red-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M5.636 5.636a9 9 0 1 0 12.728 12.728M5.636 5.636a9 9 0 1 1 12.728 12.728M5.636 5.636L12 12l6.364 6.364" />
                                                                        </svg>
                                                                        <span class="mx-1">Restrict Access</span>
                                                                    </button>
                                                                @else
                                                                    <input type="hidden" name="account_status" value="allowed">
                                                                    <button type="submit"
                                                                        class="flex items-center px-6 py-2 font-medium tracking-wide text-black capitalize transition-colors duration-300 transform bg-secondary rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24">
                                                                            <path fill="currentColor"
                                                                                d="M21.5 9h-5l1.86-1.86A7.991 7.991 0 0 0 12 4c-4.42 0-8 3.58-8 8c0 1.83.61 3.5 1.64 4.85c1.22-1.4 3.51-2.35 6.36-2.35c2.85 0 5.15.95 6.36 2.35A7.945 7.945 0 0 0 20 12h2c0 5.5-4.5 10-10 10S2 17.5 2 12S6.5 2 12 2c3.14 0 5.95 1.45 7.78 3.72L21.5 4zM12 7c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3" />
                                                                        </svg>
                                                                        <span class="mx-1">Allow Access</span>
                                                                    </button>
                                                                @endif
                                                            </form>
                                                            <form action="{{ route('make-manager', ['user' => $user->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                    <button type="submit"
                                                                        class="flex items-center px-4 py-2 font-medium tracking-wide text-white uppercase transition-colors duration-300 transform bg-black border-2 border-primary rounded-lg hover:bg-red-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36m-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                                                                        <span class="mx-1">Make Manager</span>
                                                                    </button>
                                                            </form>
                                                        </div>


                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $users->links() }}
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
