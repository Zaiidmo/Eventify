@extends('layouts.nofooterMaster')

@section('title', 'Eventify | Register')

@section('content')
    <section class="h-screen relative">
        <img class="w-full h-screen relative" src="{{ asset('register.png') }}" alt="Cover">
        <div id="authentication-modal" aria-hidden="true"
            class="flex fixed justify-center items-center w-full md:inset-0 max-h-full">
            <div class=" p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class=" bg-component rounded-xl shadow ">
                    <!-- Modal header -->
                    <h3
                        class="p-4 md:p-5 pb-1 md:pb-1 text-3xl font-semibold font-supermercado text-center text-gray-900 dark:text-white">
                        Register !
                    </h3>
                    <p class="text-subtle font-yellowTTail text-xl text-center">Start your Journey here </p>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-subtle ">Your name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5"
                                    placeholder="User name" required />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-subtle ">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5"
                                    placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-subtle ">Your
                                    password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5"
                                    placeholder="********" required />
                            </div>
                            <div>
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-subtle ">Confirm
                                    your password</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5"
                                    placeholder="********" required />
                            </div>

                            <div class="flex justify-evenly">
                                <div class="flex items-center px-4 border border-gray-500 rounded ">
                                    <input id="spectator" type="radio" value="spectator" name="role"
                                           class="w-4 h-4 text-primary bg-component border-component focus:ring-secondary ">
                                    <label for="spectator"
                                           class="w-full py-4 ms-2 text-sm font-medium text-subtle ">Spectator</label>
                                </div>
                                <div class="flex items-center px-4 border border-gray-500 rounded   ">
                                    <input id="organizer" type="radio" value="organizer" name="role"
                                           class="w-4 h-4 text-primary bg-component border-component focus:ring-secondary ">
                                    <label for="organizer"
                                           class="w-full py-4 ms-2 text-sm font-medium text-subtle ">Organizer</label>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full text-white bg-primary font-buttons focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-xl px-5 py-2.5 text-center">Start</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
