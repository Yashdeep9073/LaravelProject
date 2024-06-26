@extends('layout/AuthLayout')

@section('title','Login')

@section('content')
<div class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex flex-col">
        <div class="p-4">
            <h1 class="text-2xl font-bold">Dashboard</h1>
        </div>
        <nav class="flex-1 px-4 py-2 space-y-2">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Home</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Profile</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Settings</a>
            <a href="{{route("logout")}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Logout</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow p-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search..." class="px-4 py-2 border rounded">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main class="flex-1 p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Card 1</h3>
                    <p>
                        @auth
                        {{auth()->user()->email}}
                        @else
                        Some content here.
                        @endauth
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Card 2</h3>
                    <p>Some content here.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Card 3</h3>
                    <p>Some content here.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Card 4</h3>
                    <p>Some content here.</p>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
