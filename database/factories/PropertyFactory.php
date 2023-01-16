<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => ucfirst(fake()->words(3, true)),
            'listing_type' => fake()->randomElement(['SALE', 'RENT']),
            'description' => fake()->text(),
            'location' => fake()->randomElement([
                'San Francisco',
                'New York',
                'Seattle',
                'Los Angeles',
                'Miami',
            ]),
            'address' => fake()->streetAddress(),
            'attributes' => [
                'area' => fake()->randomNumber(3, true),
                'bedrooms' => fake()->randomDigitNotNull(),
                'bathrooms' => fake()->randomDigitNotNull(),
                'yearBuilt' => fake()
                    ->dateTime()
                    ->format('Y'),
            ],
            'price' => fake()->randomNumber(6, true),
        ];
    }
}
