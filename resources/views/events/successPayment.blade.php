@extends('layouts.app')

@section('title', 'Successful Payment')

@section('content')

    <section class="h-screen relative">
        <img class="w-full h-screen relative" src="{{ asset('login.png') }}" alt="Cover">
        <div id="authentication-modal"  aria-hidden="true" class="flex fixed justify-center items-center w-full md:inset-0 max-h-full">
            <div class=" p-4 w-fit max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative p-4 w-full text-center  rounded-lg shadow bg-gray-800 sm:p-5">
                    <div class="flex justify-center gap-4 text-green-500 mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M21 7L9 19l-5.5-5.5l1.41-1.41L9 16.17L19.59 5.59z"/></svg>
                        <h3 class="text-3xl font-semibold font-supermercado text-center "> Success </h3>
                    </div>
                    <p class="mb-4 text-lg font-semibold text-subtle">Your Ticket has been successfully purshased.</p>
                    <p class="mb-4 text-lg font-semibold text-secondary">Please check your Email for Download</p>
                    <a href="/">
                        <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center bg-black border-2 border-primary text-white rounded-lg bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-900">
                            Go Back
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection