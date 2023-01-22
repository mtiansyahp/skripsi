<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="antialiased h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden sm:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                    aria-current="page">Beranda</a>

                                <a href="{{ route('beranda')}}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Analisis</a>

                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dokumentasi</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Beranda</h1>
                <h2 class="text-sm font-text-regular tracking-tight my-2">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Tempore ad eaque quaerat aliquam exercitationem, iure quae doloremque sapiente
                    amet adipisci sit, cupiditate dolor, iusto soluta laborum dicta modi quas delectus ratione
                    repellendus est repellat! Quam debitis cumque illum quidem pariatur, vitae aliquid deserunt modi
                    quod expedita iure ipsa hic odit.</h2>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div class="bg-red-500">
                    @if ($errors->any())
                    <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
                        <div class="flex flex-wrap items-center justify-between">
                            <div class="flex w-0 flex-1 items-center">
                                <span class="flex rounded-lg bg-red-500 p-2">
                                    <!-- Heroicon name: outline/megaphone -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="white" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                </span>
                                @foreach ($errors->all() as $error)
                                <p class="ml-3 truncate font-medium text-white">
                                    <span class="hidden md:inline"></span>{{ $error }}
                                </p>
                                @endforeach
                            </div>

                            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                                <button type="button"
                                    class="-mr-1 flex rounded-md p-2 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                                    <span class="sr-only">Dismiss</span>
                                    <!-- Heroicon name: outline/x-mark -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    <div class="max-h-96 rounded-lg border-4 border-dashed border-gray-200">
                        <div>
                            <div class="mx-3 my-3 md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Dokumentasi</h3>
                                        <p class="mt-1 text-sm text-gray-600">This information will be displayed
                                            publicly so be careful what you share.</p>
                                    </div>
                                </div>
                                <div class="mt-5 md:col-span-2 md:mt-0">
                                    <form action="{{ route('postcsv') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700">Masukan File
                                                        CSV</label>
                                                    <div
                                                        class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                                        <div class="space-y-1 text-center">
                                                            <svg class="mx-auto h-12 w-12 text-gray-400"
                                                                stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <div class="flex text-sm text-gray-600">
                                                                <label for="file-upload"
                                                                    class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                                    <span>Upload a file</span>
                                                                    <input id="file-upload" name="file-upload"
                                                                        type="file" class="sr-only" accept=".csv">
                                                                </label>
                                                                <p class="pl-1">or drag and drop</p>
                                                            </div>
                                                            <p class="text-xs text-gray-500">CSV file to 10MB
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 text-center sm:px-6">
                                            <button type="submit"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
