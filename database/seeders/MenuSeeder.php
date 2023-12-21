<?php

namespace Database\Seeders;
// database/seeders/MenuSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::factory()
            ->count(2) // Aantal menu's om te genereren
            ->has(MenuItem::factory()->count(5)) // Aantal menu-items per menu
            ->create();
    }
}
