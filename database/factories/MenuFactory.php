<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // database/factories/MenuFactory.php
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'email' => $this->faker->safeEmail
        ];
    }

}
