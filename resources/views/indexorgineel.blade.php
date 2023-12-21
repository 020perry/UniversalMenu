<!-- resources/views/menu/index.blade.php -->

@extends('layouts.app')

@section('title', 'Menu Index')

@section('content')
    <h1 class="text-3xl font-bold mb-4 text-center">Menu</h1>


    <div class="flex flex-wrap justify-center mb-4">
        <div class="container border bg-base-300 rounded-md p-4 mb-4 max-w-md mx-2 relative">
            <div class="mb-4">
                <label class="block mb-1">Filter by Category:</label>
                <select  class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-full ">
                    <option>All Categories</option>
                        <option>test</option>
                        <option>test</option>
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div
                         class="menu-item-container  bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col">
                        <div class="mb-4">
                            <figure>
                                <img src="" alt="" class="w-full h-32 object-cover rounded-t-md">
                            </figure>
                        </div>
                        <h2 class="card-title p-1">testname</h2>
                        <p class="p-1">34</p>
                        <p class="p-1">test</p>
                    </div>
            </div>


        </div>

        <div class="max-w-md mx-2">
            <div class="border rounded-md p-4 bg-base-300 mb-4">
                <h2 class="mb-4 ">Actions</h2>

                <!-- Add Menu Item -->
                <div class="mb-2">
                    <a href="" class="btn">Add Menu Item</a>
                </div>

                <!-- Edit Menu Item -->
                <div class="mb-2">
                    <a href="" class="btn">Edit Menu Item</a>
                </div>

                <!-- Delete Menu Item -->
                <div>
                    <form action="" method="post" onsubmit="return confirm('Are you sure you want to delete this menu item?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Delete Menu Item</button>
                    </form>
                </div>
            </div>

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
                <div class="menu-item-container  bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col">
                    <div class="mb-4">
                        <figure>
                            <img src="" alt="" class="w-full h-32 object-cover rounded-t-md">
                        </figure>
                    </div>
                    <h2 class="card-title p-1">testname name</h2>
                    <p class="p-1">34 price</p>
                    <p class="p-1">test description</p>
                </div>

                <!-- Click here to open new container to add new menu items -->
                <div class="menu-item-container  bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col justify-center items-center text-center">
                    <div class="mb-4">
                        <!-- Hier kun je een pictogram of tekst toevoegen om aan te geven dat er geklikt kan worden -->
                        <p class="text-gray-500 cursor-pointer hover:text-primary">Click here to add new item</p>
                    </div>
                </div>

                <!-- Create new menu items, show this after the create new item is clicked -->
                <div class="menu-item-container  bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col">
                    <div class="menu-item-container  bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col">
                        <div class="mb-4">
                            <figure>
                                <label for="image" class="upload-label">
                                    <img src="{{ URL::to('/assets/icons8-upload-image-80.png') }}"  class="w-full h-32 object-cover rounded-t-md cursor-pointer">
                                </label>
                                <input type="file" name="image" id="image" accept="image/*" style="display: none;">
                            </figure>

                        </div>
                        <h2 class="card-title p-1">
                            <input type="text" placeholder="name" class="w-full p-1 rounded-md">
                        </h2>
                        <p class="p-1">
                            <input type="number" placeholder="price" class="w-full p-1 rounded-md">
                        </p>
                        <p class="p-1">
                            <textarea placeholder="description" class="w-full p-1 rounded-md"></textarea>
                        </p>
                    </div>
                </div>






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
