<!-- resources/views/menu/index.blade.php -->

@extends('layouts.app')

@section('title', 'Menu Index')

@section('content')
    <!-- Menu name -->
    <h1 class="text-3xl font-bold mb-4 text-center">Menu</h1>

    <div class="flex flex-wrap justify-center mb-4">

        <!-- Filter by category -->
        <div class="container border bg-base-300 rounded-md p-4 mb-4 max-w-md mx-2 relative">
            <div class="mb-4">
                <label class="block mb-1">Filter by Category:</label>
                <select  class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-full ">
                    <option>All Categories</option>
                        <option>test</option>
                        <option>test</option>
                </select>
            </div>

            <!-- Menu items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($menus as $menu)
                    @foreach ($menu->menuItems as $item)
                        <div class="menu-item-container bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col">
                            <div class="mb-4">
                                <figure>
                                    <!-- Plaats hier de afbeeldingsbron als je die hebt. -->
                                    <img src="{{ $item->image ?? 'default-image-path.jpg' }}" alt="{{ $item->name }}" class="w-full h-32 object-cover rounded-t-md">
                                </figure>
                            </div>
                            <h2 class="card-title p-1">{{ $item->name }}</h2>
                            <p class="p-1">{{ $item->price }}</p>
                            <p class="p-1">{{ $item->description }}</p>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>


        <div class="max-w-md mx-2">
            <!-- QR Code -->
            <div class="border rounded-md p-4 bg-base-300 mb-4">
                <h2 class=" mb-4 ">QR Code</h2>

                <!-- Generate QR Code -->
                <div class="mb-2">
                    <button class="btn">Generate QR Code</button>
                </div>

                <!-- Placeholder for displaying the QR code image -->
                <div>
                    <img src="" alt="QR Code" class="w-full h-32 object-cover rounded-md mb-2">
                </div>
            </div>
        </div>
    </div>

@endsection
