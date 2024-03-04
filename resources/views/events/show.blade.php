@extends('layouts.app')
@section('title', 'Events')
@section('content')
<section class="pt-32">
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <img class="border-2 border-subtle p-8 w-screen rounded-3xl" src="{{ asset('Logo.png')}}" alt="">
    </div>
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="flex justify-between ">
            <h1 class="text-4xl font-supermercado text-white">Events</h1>
            <div class="font-buttons w-fit bg-secondary flex justify-between items-center px-6 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="#000000" d="m426.24 127.72l-10.94 10.94a29.67 29.67 0 0 1-42-42l10.94-10.94L314.52 16l-88 88l-4 12.09l-12.09 4L16 314.52l69.76 69.76l10.94-10.94a29.67 29.67 0 0 1 42 42l-10.94 10.94L197.48 496l194.4-194.4l4-12.09l12.09-4l88-88Zm-208.56 5.43l21.87-21.87l33 33l-21.88 21.87Zm43 43l21.88-21.88l32.52 32.52l-21.88 21.88Zm42.56 42.56l21.88-21.88l32.52 32.52l-21.84 21.93Zm75.57 75.56l-33-33l21.87-21.88l33 33Z"/></svg>
                <a href="#">Buy Ticket</a>
            </div>
        </div>
    </div>
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6 grid grid-cols-1 md:grid-cols-2">
        <div class="col-span-1 flex flex-col gap-8 items-start">
            <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Date & Time</h4>
            <div class="flex flex-col gap-4 justify-between">
                <div class="flex justify-start items-center  gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ffffff" d="M22 2.25h-3.25V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25H2a2 2 0 0 0-2 1.999v17.75a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4.249a2 2 0 0 0-2-1.999M22.5 22a.5.5 0 0 1-.499.5H2a.5.5 0 0 1-.5-.5V4.25a.5.5 0 0 1 .5-.499h3.25v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751H22a.5.5 0 0 1 .499.499z"/><path fill="#ffffff" d="M5.25 9h3v2.25h-3zm0 3.75h3V15h-3zm0 3.75h3v2.25h-3zm5.25 0h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3zm5.25 7.5h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3z"/></svg>
                    <p class="text-white font-poppins text-lg">12th June 2021</p>
                </div>
                <div class="flex justify-between gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ffffff" d="M22 2.25h-3.25V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25H2a2 2 0 0 0-2 1.999v17.75a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4.249a2 2 0 0 0-2-1.999M22.5 22a.5.5 0 0 1-.499.5H2a.5.5 0 0 1-.5-.5V4.25a.5.5 0 0 1 .5-.499h3.25v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751H22a.5.5 0 0 1 .499.499z"/><path fill="#ffffff" d="M5.25 9h3v2.25h-3zm0 3.75h3V15h-3zm0 3.75h3v2.25h-3zm5.25 0h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3zm5.25 7.5h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3z"/></svg>
                    <p class="text-white font-poppins text-lg">09:00 PM</p>
                </div>
            </div>
        </div>
        <div class="col-span-1 flex flex-col gap-8 items-start">
            <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Information About the Ticket</h4>
            <div class="flex flex-col gap-4 justify-between">
                <div class="flex justify-start items-center  gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="4"><path stroke-linejoin="round" d="M34 30v-1.011A2.989 2.989 0 0 1 36.989 26v0a2.989 2.989 0 0 1 2.989 2.985l.012 8.2A6.805 6.805 0 0 1 33.185 44h-7.538a13.929 13.929 0 0 1-11.192-5.637l-4.265-5.757a2.992 2.992 0 0 1-.162-3.32v0a2.992 2.992 0 0 1 4.682-.576L16 30V16a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v11.875v-6.849A3.026 3.026 0 0 1 25.026 18v0a3.026 3.026 0 0 1 3.027 3.026V29v-1.101a2.974 2.974 0 0 1 2.973-2.974v0A2.974 2.974 0 0 1 34 27.899z"/><path d="M32 4v8"/><path stroke-linejoin="round" d="M16 20H6v-4c2 0 4-1.5 3.974-4C9.948 9.5 8 8 6 8V4h36v4c-2 0-3.948 1.5-3.974 4C38 14.5 40 16 42 16v4H28"/></g></svg>
                    <p class="text-white font-poppins text-lg">2399 Available</p>
                </div>
                <div class="flex justify-between gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48"><circle cx="29.218" cy="29.218" r="13.282" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" d="M25.115 34.294a3.958 3.958 0 0 0 3.32 1.494h1.993a3.32 3.32 0 0 0 0-6.641h-2.159a3.32 3.32 0 1 1 0-6.641h1.993A3.565 3.565 0 0 1 33.582 24m-4.317-3.32v16.602m-12.77-12.59a4.468 4.468 0 0 1-1.413-3.277v-4.317a4.464 4.464 0 0 1 4.483-4.482a4.673 4.673 0 0 1 3.487 1.66M13.09 17.43h5.645m-5.645 3.32h5.645"/><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" d="M16.02 31.774a13.282 13.282 0 1 1 15.754-15.753"/></svg>
                    <p class="text-white font-poppins text-lg">40$ / Ticket</p>
                </div>
            </div>
        </div>
        <div class="col-span-1 flex flex-col gap-8 items-start">
            <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Location</h4>
            <div class="flex gap-4 items justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#ffffff" d="M12 2a9 9 0 0 1 9 9c0 3.074-1.676 5.59-3.442 7.395a20.441 20.441 0 0 1-2.876 2.416l-.426.29l-.2.133l-.377.24l-.336.205l-.416.242a1.874 1.874 0 0 1-1.854 0l-.416-.242l-.52-.32l-.192-.125l-.41-.273a20.638 20.638 0 0 1-3.093-2.566C4.676 16.589 3 14.074 3 11a9 9 0 0 1 9-9m0 2a7 7 0 0 0-7 7c0 2.322 1.272 4.36 2.871 5.996a18.03 18.03 0 0 0 2.222 1.91l.458.326c.148.103.29.199.427.288l.39.25l.343.209l.289.169l.455-.269l.367-.23c.195-.124.405-.263.627-.417l.458-.326a18.03 18.03 0 0 0 2.222-1.91C17.728 15.361 19 13.322 19 11a7 7 0 0 0-7-7m0 3a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 2a2 2 0 1 0 0 4a2 2 0 0 0 0-4"/></g></svg>
                    <p class="text-white font-poppins w-fit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum architecto nisi possimus delectus. Voluptas distinctio, voluptate reprehenderit totam commodi a. Velit, suscipit! Fugiat enim doloremque natus magnam illo obcaecati sapiente. </p>
            </div>
        </div>
    </div>
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl">
        <div class="flex flex-col gap-8 items-start">
            <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Hosted By</h4>
            <div class="flex flex-col gap-4 justify-between">
                <div class="flex justify-start items-center  gap-4">
                    <img class="rounded-full w-24" src="{{asset('default.png')}}" alt="User photo">
                    <div class="flex flex-col justify-between">
                        <p class="text-white font-poppins text-lg">User Name</p>
                        <p class="text-white font-poppins text-lg">User Name</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 flex flex-col gap-8 items-start">
            <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Event Description</h4>
            <div class="flex flex-col gap-4 justify-between">                
                <p class="text-white font-poppins tracking-wide leading-loose">Get ready to kick off the Christmas season in Mumbai with SOUND OF CHRISTMAS - your favourite LIVE Christmas concert!

                    City Youth Movement invites you to the 4th edition of our annual Christmas festivities - by the youth and for the youth! Feat. your favourite worship leaders, carols, quizzes and some exciting surprises!
                    
                    Bring your family and friends and sing along your favourite Christmas carols on the 2nd of December, 6:30 PM onwards at the Balgandharva Rang Mandir, Bandra West. Book your tickets now!
                    
                    3 Reasons to attend the event:
                    
                    1. The FIRST Christmas concert of Mumbai!
                    2. A special Christmas Choir!
                    3. Special Dance performances and many more surprises!</p>
            </div>
        </div>
    </div>
</section>
@endsection