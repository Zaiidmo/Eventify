@extends('layouts.app')

@section('title', 'Successful Payment')

@section('content')
    {{-- <div class="container text-white h-screen">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Purshase Confirmation</div>
                    <div class="card-body">
                        <p>Your Ticket has been successfully purshased.</p>
                        <p>Please check your Email for Download2</p>
                        <p>Thank you for your purchase!</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div id="successModal" tabindex="-1" aria-hidden="true" class="w-screen h-screen overflow-y-auto overflow-x-hidden fixed z-50 justify-center align-middle items-center md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-fit max-w-md h-fit md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <div class="w-12 h-12  rounded-full bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                    <svg aria-hidden="true" class="w-8 h-8 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Success</span>
                </div>
                <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Your Ticket has been successfully purshased.</p>
                <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Please check your Email for Download</p>
                <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-900">
                    Go Back
                </button>
            </div>
        </div>
    </div> --}}
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