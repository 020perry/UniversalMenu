<!-- resources/views/menu/index.blade.php -->

@extends('layouts.app')

@section('title', 'Menu Index')

@section('content')
    <div x-data="menuData()" x-init="fetchMenus">

        <h1 class="text-3xl font-bold mb-4 text-center">Menu</h1>


        <div class="flex flex-wrap justify-center mb-4">
            <div class="container border bg-base-300 rounded-md p-4 mb-4 max-w-md mx-2 relative">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <template x-for="menu in menus" :key="menu.menu_id">
                        <template x-for="item in menu.menu_items" :key="item.menu_item_id">
                            <div class="menu-item-container bg-base-200 rounded-md shadow-md transition duration-300 transform hover:shadow-2xl flex flex-col">
                                <div class="mb-4">
                                    <figure>
                                        <img :src="item.image || 'default-image.jpg'" alt="" class="w-full h-32 object-cover rounded-t-md">
                                    </figure>
                                </div>
                                <h2 class="card-title p-1" x-text="item.name"></h2>
                                <p class="p-1" x-text="item.price"></p>
                                <p class="p-1" x-text="item.description"></p>
                            </div>
                        </template>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <script>
        function menuData() {
            return {
                menus: [],
                fetchMenus() {
                    fetch('/api/menus')
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            this.menus = data;
                        })
                        .catch(error => console.error(error));
                }
            }
        }
    </script>
@endsection
