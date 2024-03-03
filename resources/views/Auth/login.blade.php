@extends('layouts.nofooterMaster')

@section('title', 'Eventify | Login')

@section('content')
    <section class="h-screen relative">
        <img class="w-full h-screen relative" src="{{ asset('login.png') }}" alt="Cover">
        <div id="authentication-modal"  aria-hidden="true" class="flex fixed z-50 justify-center items-center w-full md:inset-0 max-h-full">
            <div class=" p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class=" bg-white rounded-xl shadow dark:bg-gray-700">
                    <!-- Modal header -->
                         <h3 class="p-4 md:p-5 pb-1 md:pb-1 text-2xl font-semibold font-supermercado text-center text-gray-900 dark:text-white">
                            Welcome Back ! 
                        </h3>
                        <p class="text-subtle font-yellowTTail text-center">Login and Dive into the Enchantment</p>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <a href="#" class="text-sm text-secondary hover:underline ">Lost Password?</a>
                            </div>
                            <button type="submit" class="w-full text-white bg-primary font-buttons focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-xl px-5 py-2.5 text-center">Login to your account</button>
                            <div class="text-sm text-center font-medium font-poppins text-subtle">
                                New To Eventify? <a href="#" class="text-secondary hover:underline ">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endsection
