@extends('layouts.app')

@section('title', 'Eventify')

@section('content')
    <section class="top-0 mt-o h-full relative"
        style="background-image: url(https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
        <div class=" px-4 mx-auto max-w-screen-xl items-start justify-evenly flex flex-col h-screen">
            <div class="justify-self-center">
                <h1 class="text-9xl font-trade font-bold text-white text-center">Eventify</h1>
                <p class="text-5xl font-bold font-yellowTTail text-white text-center">The best place to find events near you
                </p>
            </div>
            <div class="self-center justify-self-end">
                <button id="login-btn"
                    class=" py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">
                    Get Started Now
                </button>
            </div>
        </div>
    </section>
    <section class="px-4 mx-auto max-w-screen-xl ">
        <div class="border-b border-primary bottom-2 flex justify-between items-center my-6">
            <h2 class="text-white font-supermercado text-3xl">Popular Reached Categories</h2>
            <div class="self-center justify-self-end mb-4">
                <button id="login-btn"
                    class=" py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center">
                    See More
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <div class="category">
                <div class=" inset-0 bg-center bg-black"></div>
                <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                            class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-poppins text-2xl font-bold text-white shadow-xl">Category</h1>
                        <h1 class="text-sm font-light font-poppins text-gray-200 shadow-xl">Description</h1>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class=" inset-0 bg-center bg-black"></div>
                <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                            class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-poppins text-2xl font-bold text-white shadow-xl">Category</h1>
                        <h1 class="text-sm font-light font-poppins text-gray-200 shadow-xl">Description</h1>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class=" inset-0 bg-center bg-black"></div>
                <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                            class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-poppins text-2xl font-bold text-white shadow-xl">Category</h1>
                        <h1 class="text-sm font-light font-poppins text-gray-200 shadow-xl">Description</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
