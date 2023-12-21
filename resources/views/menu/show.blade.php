{{-- resources/views/menus/show.blade.php --}}

@extends('layouts.app')

@section('title', 'Bekijk Menu')

@section('content')
    <div>
        <h1>{{ $menu->name }}</h1>
        <p>{{ $menu->description }}</p>

        <div>
            <h2>Menu Items</h2>
            @foreach ($menu->menuItems as $item)
                <div>
                    <h3>{{ $item->name }}</h3>
                    <p>Prijs: {{ $item->price }}</p>
                    <p>Beschrijving: {{ $item->description }}</p>
                    <!-- Voeg hier eventueel extra details toe -->
                </div>
            @endforeach
        </div>
    </div>
@endsection
