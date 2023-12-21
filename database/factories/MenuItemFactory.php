<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    protected $model = MenuItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'menu_id' => Menu::factory(),
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'description' => $this->faker->sentence,
            // Voeg andere benodigde velden toe
        ];
    }
}
