@extends('layouts.nofooterMaster')

@section('title', 'Eventify | Login')

@section('content')
    <section class="h-screen relative">
        <img class="w-full h-screen relative" src="{{ asset('register.png') }}" alt="Cover">
        <div id="authentication-modal"  aria-hidden="true" class="flex fixed justify-center items-center w-full md:inset-0 max-h-full">
            <div class=" p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class=" bg-component rounded-xl shadow ">
                    <!-- Modal header -->
                        <h3 class="p-4 md:p-5 pb-1 md:pb-1 text-3xl font-semibold font-supermercado text-center text-gray-900 dark:text-white">
                            Register !    
                        </h3>
                        <p class="text-subtle font-yellowTTail text-xl text-center">Start your Journey here </p>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="#">
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-subtle ">Your UserName</label>
                                <input type="text" name="username" id="username" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="User name" required />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-subtle ">Your email</label>
                                <input type="email" name="email" id="email" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-subtle ">Your password</label>
                                <input type="password" name="password" id="password" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="********" required />
                            </div>
                            <div>
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-subtle ">Confirm your password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="********" required />
                            </div>
                            
                            <button type="submit" class="w-full text-white bg-primary font-buttons focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-xl px-5 py-2.5 text-center">Login to your account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endsection
