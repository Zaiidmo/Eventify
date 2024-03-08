@extends('layouts.nofooterMaster')

@section('title', 'Reset Your Password')

@section('content')
    <section class="h-screen relative">
        <img class="w-full h-screen relative" src="{{ asset('forgot.png') }}" alt="Cover">
        <div id="authentication-modal"  aria-hidden="true" class="flex fixed justify-center items-center w-full md:inset-0 max-h-full">
            <div class=" p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
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
                <div class=" bg-component rounded-xl shadow ">
                    <!-- Modal header -->
                         <h3 class="p-4 md:p-5 pb-1 md:pb-1 text-3xl font-semibold font-supermercado text-center text-gray-900 dark:text-white">
                            Reseting Password ... 
                        </h3>
                        <p class="text-subtle font-yellowTTail text-xl text-center">Please Provide  your new Password</p>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form action="{{ route('reset') }}" class="space-y-4" method="POST">
                            @csrf
                            @method('PUT')
                        
                            
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-subtle">Your Email</label>
                                <input type="email" name="email" id="email" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="user@email.com" />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-subtle">Your New Password</label>
                                <input type="password" name="password" id="password" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="*********" />
                            </div>
                        
                            {{-- <div>
                                <label for="cpassword" class="block mb-2 text-sm font-medium text-subtle">Confirm New password</label>
                                <input type="password" name="cpassword" id="cpassword" class="bg-black border border-subtle text-subtle text-sm rounded-lg block w-full p-2.5" placeholder="*********" />
                            </div> --}}
                        
                            @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        
                            <button type="submit" class="w-full text-white bg-primary font-buttons focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center">Reset Your Password</button>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endsection
