@extends('layouts.dashboard')

@section('title', 'Eventify | Admin ')

@section('content')
    <section>
        <div class="w-full pt-36 bg-center bg-cover h-[28rem] lg:h-screen"
            style="background-image: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

            <div class="grid gap-6 mb-8 md:grid-cols-2 lg:max-w-screen-2xl lg:ml-auto mx-8 lg:pr-16 xl:grid-cols-3">
                <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-black bg-secondary mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 1.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5M8.75 6a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M18 3.25a.75.75 0 0 0 0 1.5c1.377 0 2.25.906 2.25 1.75S19.377 8.25 18 8.25a.75.75 0 0 0 0 1.5c1.937 0 3.75-1.333 3.75-3.25S19.937 3.25 18 3.25M6.75 4A.75.75 0 0 0 6 3.25c-1.937 0-3.75 1.333-3.75 3.25S4.063 9.75 6 9.75a.75.75 0 0 0 0-1.5c-1.376 0-2.25-.906-2.25-1.75S4.624 4.75 6 4.75A.75.75 0 0 0 6.75 4" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 12.25c-1.784 0-3.434.48-4.659 1.297c-1.22.814-2.091 2.02-2.091 3.453c0 1.433.871 2.64 2.091 3.453c1.225.816 2.875 1.297 4.659 1.297c1.784 0 3.434-.48 4.659-1.297c1.22-.814 2.091-2.02 2.091-3.453c0-1.433-.872-2.64-2.091-3.453c-1.225-.816-2.875-1.297-4.659-1.297M6.75 17c0-.776.472-1.57 1.423-2.204c.947-.631 2.298-1.046 3.827-1.046c1.53 0 2.88.415 3.827 1.046c.951.634 1.423 1.428 1.423 2.204c0 .776-.472 1.57-1.423 2.204c-.947.631-2.298 1.046-3.827 1.046c-1.53 0-2.88-.415-3.827-1.046C7.222 18.57 6.75 17.776 6.75 17"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M19.267 13.84a.75.75 0 0 1 .894-.573c.961.211 1.828.592 2.472 1.119c.643.526 1.117 1.25 1.117 2.114c0 .865-.474 1.588-1.117 2.114c-.644.527-1.51.908-2.472 1.119a.75.75 0 0 1-.322-1.466c.793-.173 1.426-.472 1.844-.814c.418-.342.567-.677.567-.953c0-.276-.149-.61-.567-.953c-.418-.342-1.051-.64-1.844-.814a.75.75 0 0 1-.572-.894M3.84 13.267a.75.75 0 1 1 .32 1.466c-.792.173-1.425.472-1.843.814c-.418.342-.567.677-.567.953c0 .276.149.61.567.953c.418.342 1.051.64 1.844.814a.75.75 0 0 1-.322 1.466c-.962-.211-1.828-.592-2.472-1.119C.724 18.088.25 17.364.25 16.5c0-.865.474-1.588 1.117-2.114c.644-.527 1.51-.908 2.472-1.119" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Total Users
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $countUsers }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-black bg-secondary mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36">
                                <path fill="currentColor"
                                    d="M17.9 17.3c2.7 0 4.8-2.2 4.8-4.9s-2.2-4.8-4.9-4.8S13 9.8 13 12.4c0 2.7 2.2 4.9 4.9 4.9m-.1-7.7c.1 0 .1 0 0 0c1.6 0 2.9 1.3 2.9 2.9s-1.3 2.8-2.9 2.8c-1.6 0-2.8-1.3-2.8-2.8c0-1.6 1.3-2.9 2.8-2.9"
                                    class="clr-i-outline clr-i-outline-path-1" />
                                <path fill="currentColor"
                                    d="M32.7 16.7c-1.9-1.7-4.4-2.6-7-2.5h-.8c-.2.8-.5 1.5-.9 2.1c.6-.1 1.1-.1 1.7-.1c1.9-.1 3.8.5 5.3 1.6V25h2v-8z"
                                    class="clr-i-outline clr-i-outline-path-2" />
                                <path fill="currentColor"
                                    d="M23.4 7.8c.5-1.2 1.9-1.8 3.2-1.3c1.2.5 1.8 1.9 1.3 3.2c-.4.9-1.3 1.5-2.2 1.5c-.2 0-.5 0-.7-.1c.1.5.1 1 .1 1.4v.6c.2 0 .4.1.6.1c2.5 0 4.5-2 4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6 0-3 .8-3.8 2.2c.5.3 1 .7 1.4 1.3"
                                    class="clr-i-outline clr-i-outline-path-3" />
                                <path fill="currentColor"
                                    d="M12 16.4c-.4-.6-.7-1.3-.9-2.1h-.8c-2.6-.1-5.1.8-7 2.4L3 17v8h2v-7.2c1.6-1.1 3.4-1.7 5.3-1.6c.6 0 1.2.1 1.7.2"
                                    class="clr-i-outline clr-i-outline-path-4" />
                                <path fill="currentColor"
                                    d="M10.3 13.1c.2 0 .4 0 .6-.1v-.6c0-.5 0-1 .1-1.4c-.2.1-.5.1-.7.1c-1.3 0-2.4-1.1-2.4-2.4c0-1.3 1.1-2.4 2.4-2.4c1 0 1.9.6 2.3 1.5c.4-.5 1-1 1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5c-2.1 1.3-2.8 4-1.5 6.1c.8 1.3 2.2 2.1 3.8 2.1"
                                    class="clr-i-outline clr-i-outline-path-5" />
                                <path fill="currentColor"
                                    d="m26.1 22.7l-.2-.3c-2-2.2-4.8-3.5-7.8-3.4c-3-.1-5.9 1.2-7.9 3.4l-.2.3v7.6c0 .9.7 1.7 1.7 1.7h12.8c.9 0 1.7-.8 1.7-1.7v-7.6zm-2 7.3H12v-6.6c1.6-1.6 3.8-2.4 6.1-2.4c2.2-.1 4.4.8 6 2.4z"
                                    class="clr-i-outline clr-i-outline-path-6" />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Total Organizers
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $countOrganizers }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-black bg-secondary mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-width="2"
                                    d="M16 12c2.374 1.183 4 3.65 4 7v4H4v-4c0-3.354 1.631-5.825 4-7m4 1a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm6-6c-1.5 0-3 .36-5-2c-2 2.36-4.5 3-7 2m1 6l5.025 5.257L17 13m-5 5v5" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Total Managers
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $countManagers }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-black bg-secondary mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M14.885 18q-.877 0-1.497-.62q-.619-.618-.619-1.495q0-.877.62-1.497q.619-.619 1.496-.619t1.496.62q.619.619.619 1.496t-.62 1.496q-.618.619-1.495.619m-9.27 3q-.69 0-1.152-.462Q4 20.075 4 19.385V6.615q0-.69.463-1.152Q4.925 5 5.615 5h1.77V2.77h1.077V5h7.153V2.77h1V5h1.77q.69 0 1.152.463q.463.462.463 1.152v12.77q0 .69-.462 1.152q-.463.463-1.153.463zm0-1h12.77q.23 0 .423-.192q.192-.193.192-.423v-8.77H5v8.77q0 .23.192.423q.193.192.423.192" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Posted Events
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $countEvents }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-black bg-secondary mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17 22q-2.075 0-3.537-1.463T12 17q0-2.075 1.463-3.537T17 12q2.075 0 3.538 1.463T22 17q0 2.075-1.463 3.538T17 22m.5-5.2v-2.3q0-.2-.15-.35T17 14q-.2 0-.35.15t-.15.35v2.275q0 .2.075.388t.225.337l1.525 1.525q.15.15.35.15t.35-.15q.15-.15.15-.35t-.15-.35zM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h4.175q.275-.875 1.075-1.437T12 1q1 0 1.788.563T14.85 3H19q.825 0 1.413.588T21 5v4q0 .425-.288.713T20 10q-.425 0-.712-.288T19 9V5h-2v2q0 .425-.288.713T16 8H8q-.425 0-.712-.288T7 7V5H5v14h4.5q.425 0 .713.288T10.5 20q0 .425-.288.713T9.5 21zm7-16q.425 0 .713-.288T13 4q0-.425-.288-.712T12 3q-.425 0-.712.288T11 4q0 .425.288.713T12 5" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Pending Events
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $countPendingEvents }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-black bg-secondary mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 56 56"><path fill="currentColor" fill-rule="evenodd" d="M7.627 16.697L23.812 5.364a4 4 0 0 1 5.57.982l2.553 3.645c.037.053.073.108.107.163zM2.147 29.84L1.04 25.708a4 4 0 0 1 2.83-4.898L44.438 9.94a4 4 0 0 1 4.899 2.828l1.151 4.298a3.2 3.2 0 0 1-1.121 3.35a5.001 5.001 0 0 0 2.433 8.903a3.077 3.077 0 0 1 2.576 2.255l1.172 4.377a4 4 0 0 1-2.828 4.899L12.15 51.72a4 4 0 0 1-4.898-2.828l-1.103-4.118a3.484 3.484 0 0 1 1.16-3.6a5.001 5.001 0 0 0-2.37-8.812a3.46 3.46 0 0 1-2.791-2.52m35.478-6.689a3 3 0 1 0-1.553-5.795a3 3 0 0 0 1.553 5.795m2.07 7.728a3 3 0 1 0-1.552-5.796a3 3 0 0 0 1.553 5.796m2.071 7.727a3 3 0 1 0-1.552-5.795a3 3 0 0 0 1.552 5.795"/></svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Purshased Tickets
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $countTickets }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 mb-8 grid-cols-1 lg:max-w-screen-2xl lg:ml-auto mx-8 lg:pr-16 xl:grid-cols-2">
                <div class="flex flex-col mt-6">
                    <h1 class="text-2xl md:text-2xl font-supermercado font-medium text-subtle ">Last Registered <span
                            class="text-primary">Users</span></h1>
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <div class="flex items-center gap-x-3">
                                                    <span>Name</span>
                                                </div>
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                            <th scope="col" class="relative py-3.5 px-4">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
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
                                                                    {{ $user->email }}</p>
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
                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
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
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <h1 class="text-2xl md:text-2xl font-supermercado font-medium text-black ">Last Posted <span
                                    class="text-primary">Events</span></h1>
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <div class="flex items-center gap-x-3">
                                                    <span>Name</span>
                                                </div>
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <button class="flex items-center gap-x-2">
                                                    <span>Status</span>

                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                                    </svg>
                                                </button>
                                            </th>
                                            <th scope="col" class="relative py-3.5 px-4">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        @foreach ($events as $event)
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div class="inline-flex items-center gap-x-3">


                                                        <div class="flex items-center gap-x-2">
                                                            <img class="object-cover w-10 h-10 rounded-full"
                                                                src="{{ asset('storage/uploads/events/' . $event->poster) }}"
                                                                alt="">
                                                            <div>
                                                                <h2 class="font-medium text-gray-800 dark:text-white ">
                                                                    {{ $event->title }}</h2>
                                                                <p
                                                                    class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                    {{ $event->email }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    <p>{{ $event->status }}</p>
                                                </td>
                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="flex items-center gap-x-6">
                                                        <form action="{{ route('events.approve', $event) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="text-gray-500 transition-colors duration-200 dark:hover:text-green-500 dark:text-gray-300 hover:text-green-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z" />
                                                                </svg>
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('events.deny', $event) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M12 2c5.5 0 10 4.5 10 10s-4.5 10-10 10S2 17.5 2 12S6.5 2 12 2m0 2c-1.9 0-3.6.6-4.9 1.7l11.2 11.2c1-1.4 1.7-3.1 1.7-4.9c0-4.4-3.6-8-8-8m4.9 14.3L5.7 7.1C4.6 8.4 4 10.1 4 12c0 4.4 3.6 8 8 8c1.9 0 3.6-.6 4.9-1.7" />
                                                                </svg>
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('events.destroy', $event) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="text-gray-500 transition-colors duration-200 dark:hover:text-red-900 dark:text-gray-300 hover:text-red-900 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>




    </section>
@endsection
@section('scripts')
    @auth
        <script src="{{ mix('resources/js/authNavbar.js') }}"></script>
    @endauth
@endsection
