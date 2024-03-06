@extends('layouts.dashboard')

@section('title', '{{ auth()->user()->name }}')

@section('content')
<section >
    <div class="w-full bg-center bg-cover h-[28rem] lg:h-screen"
            style="background-image: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <div class=" w-full h-full bg-gray-900/40">
            <div id="tableData" class="container px-4 pt-36 ml-auto">
                <div class="flex flex-col lg:flex-row w-full justify-center items-center gap-x-3">
                    <h1 class="text-4xl md:text-5xl font-supermercado font-medium text-subtle ">Welcome To Your Main Account</h1>
                </div>
            
                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:pr-8 lg:pr-12">
                            <div class="overflow-hidden  md:rounded-lg">
                                
                            </div>
                        </div>
                    </div>
                </div>
            
                
            </div>
        </div>
    </div>
</section>
@endsection