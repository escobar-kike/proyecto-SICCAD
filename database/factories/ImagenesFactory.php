<?php

namespace Database\Factories;

use App\Models\imagenes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\imagenes>
 */
class ImagenesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       /* return [
            'image' => 'prueba/' . $this->faker->image('prueba', 640, 480, null, false)
        ];*/
    }
}
