@extends('layouts.nofooterMaster')

@section('title', 'Reset Your Password')

@section('content')
    <section class="h-screen relative">
        <img class="w-full h-screen relative" src="{{ asset('forgot.png') }}" alt="Cover">
        <div id="authentication-modal" aria-hidden="true"
            class="flex fixed justify-center items-center w-full md:inset-0 max-h-full">
            <div class=" p-4 w-full max-w-md max-h-full">
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
                <!-- Modal content -->
                <div class=" bg-component rounded-xl shadow ">
                    <!-- Modal header -->
                    <h3
                        class="p-4 md:p-5 pb-1 md:pb-1 text-3xl font-semibold font-supermercado text-center text-gray-900 dark:text-white">
                        Forgot Password ?
                    </h3>
                    <p class="text-subtle font-yellowTTail text-xl text-center">Write down your email and we’ll send you
                        link to reset your password </p>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form action="{{ route('forgot') }}" class="space-y-4" method="POST">
                            @csrf
                            @method('POST')
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-subtle ">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5"
                                    placeholder="name@company.com" required />
                            </div>

                            <button type="submit"
                                class="w-full text-white bg-primary font-buttons focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-xl px-5 py-2.5 text-center">Send
                                Reset Link</button>
                            <div class="text-sm text-center font-medium font-poppins text-subtle">
                                Remember Your Password? <a href="/login" class="text-secondary hover:underline ">Login </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
