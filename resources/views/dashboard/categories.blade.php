@extends('layouts.dashboard')

@section('title', 'Admin | Categories Management')

@section('content')
    <section>
        <div class="w-full bg-center bg-cover h-[28rem] lg:h-screen"
            style="background-image: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

            <div class=" w-full h-full bg-gray-900/40">
                <div id="tableData" class="container px-4 pt-36 ml-auto">
                    <div class="flex flex-col lg:flex-row justify-between items-center gap-3">
                        <div class="flex flex-col lg:flex-row justify-center items-center gap-x-3 ">
                            <h1 class="text-5xl md:text-6xl font-supermercado font-medium text-subtle ">Cat<span
                                    class="text-primary">egories</span></h1>
                            <span
                                class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $countCategories }}
                                Category</span>
                        </div>
                        <button id="create-category-toggler"
                            class="py-1.5 px-8 m-1 text-2xl text-center bg-primary font-buttons rounded-md text-white lg:inline-block self-center border-2 border-secondary">Create
                            a New Category</button>
                    </div>

                    @if ($errors->any())
                        <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative"
                            role="alert">
                            <strong class="font-bold">Whoops!</strong>
                            <span class="block sm:inline">There were some problems with your input.</span>
                            <ul class="list-disc mt-2 ml-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="flex flex-col mt-6 mx-4">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:pr-8 lg:pr-12">
                                <div class="overflow-hidden mb-4 border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y  divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-950">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                                    <div class="flex items-center gap-x-3">
                                                        <input type="checkbox"
                                                            class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                                        <span>Name</span>
                                                    </div>
                                                </th>


                                                {{-- <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">Posted By</th> --}}

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                                    Created at</th>
                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                                    Events Count </th>
                                                <th scope="col" class="relative py-3.5 px-4">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-black divide-y divide-gray-700  ">

                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td
                                                        class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <div class="inline-flex items-center gap-x-3">
                                                            <input type="checkbox"
                                                                class="text-blue-500 border-gray-300 rounded  dark:ring-offset-gray-900 dark:border-gray-700">

                                                            <div class="flex items-center gap-x-2">
                                                                <img class="object-cover w-10 h-10 rounded-full"
                                                                    src="{{ asset('storage/uploads/categories/' . $category->image) }}"
                                                                    alt="">
                                                                <div>
                                                                    <h2 class="font-medium text-gray-800 dark:text-white ">
                                                                        {{ $category->name }}</h2>
                                                                    <p
                                                                        class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                        {{ $category->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{{ $category->user->name }}}</td> --}}

                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        {{ $category->created_at }}</td>

                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        {{ $category->events->count() }}</td>

                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <div class="flex items-center gap-x-6">
                                                            <button
                                                                class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>
                                                            </button>

                                                            <button
                                                                class="edit-category text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Modal To Create a Category --}}
    <section id="create-category-popup" class="hidden">
        <div id="create-category-popup-container"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
            <div class="bg-white shadow-md rounded-lg max-w-2xl my-16 w-full">

                <div class="relative bg-black border-2 border-primary rounded-lg shadow">
                    <button id="creation-popup-close" type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                            aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                cliprule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close popup</span>
                    </button>

                    <div class="p-5">

                        <div class="text-center">
                            <p class="mb-1 text-2xl font-semibold leading-10 text-subtle">
                                Create a new Category
                            </p>
                        </div>

                        <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide"
                            action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="w-full mt-8">
                                <label for="Category Name" class="block text-sm text-gray-500 dark:text-gray-300">Category
                                    Name:</label>
                                <input type="text" placeholder="Category X" name="name"
                                    class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    required />
                            </div>

                            <div class="mt-8">
                                <label for="category-description"
                                    class="block text-sm text-gray-500 dark:text-gray-300">Category Description: </label>
                                <textarea id="category-description" name="description" placeholder="Add a tiny description "
                                    class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    required></textarea>
                            </div>

                            <div class="mt-8 w-full">
                                <label for="poster" class="block text-sm text-gray-500 dark:text-gray-300">Upload an
                                    image</label>
                                <label for="poster"
                                    class="flex flex-col items-center w-full p-5 mt-2 text-center bg-gray-700 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                    </svg>

                                    <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload an
                                        image</h2>

                                    <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg &
                                        drop your
                                        file JPG, JPEG, PNG. </p> <input name="image" id="poster" type="file"
                                        class="hidden" required />
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit"
                                class="mt-8 py-2.5 w-full border-2 border-secondary text-lg font-poppins tracking-widest font-bold rounded-lg text-subtle">
                                C R E A T E
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Modal To Update a Category --}}
    <section id="update-category-popup" class="hidden">
        <div id="update-category-popup-container"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
            <div class="bg-white shadow-md rounded-lg max-w-2xl my-16 w-full">

                <div class="relative bg-black border-2 border-primary rounded-lg shadow">
                    <button id="creation-popup-close" type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                            aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                cliprule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close popup</span>
                    </button>

                    <div class="p-5">

                        <div class="text-center">
                            <p class="mb-1 text-2xl font-semibold leading-10 text-subtle">
                                Update Category : {{ $category->name }}
                            </p>
                        </div>

                        <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide"
                            action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="w-full mt-8">
                                <label for="Category Name" class="block text-sm text-gray-500 dark:text-gray-300">Category
                                    Name:</label>
                                <input type="text" value="{{ $category->name }}" name="name"
                                    class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    required />
                            </div>

                            <div class="mt-8">
                                <label for="category-description"
                                    class="block text-sm text-gray-500 dark:text-gray-300">Category Description: </label>
                                <textarea id="category-description" name="description" placeholder="Add a tiny description "
                                    class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    required></textarea>
                            </div>

                            <div class="mt-8 w-full">
                                <label for="poster" class="block text-sm text-gray-500 dark:text-gray-300">Upload an
                                    image</label>
                                <label for="poster"
                                    class="flex flex-col items-center w-full p-5 mt-2 text-center bg-gray-700 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                    </svg>

                                    <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload an
                                        image</h2>

                                    <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg &
                                        drop your
                                        file JPG, JPEG, PNG. </p> <input name="image" id="poster" type="file"
                                        class="hidden" required />
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit"
                                class="mt-8 py-2.5 w-full border-2 border-secondary text-lg font-poppins tracking-widest font-bold rounded-lg text-subtle">
                                U P D A T E
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
@section('scripts')
    <script src="{{ mix('resources/js/categories.js') }}"></script>

@endsection
