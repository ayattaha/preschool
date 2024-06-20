<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Child;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'childName' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'birthdate' => $this->faker->date(),
            'parentphone' => $this->faker->phoneNumber,
            'parentemail' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'active' => $this->faker->boolean(90), // 90% chance of being active
            'image' => $this->faker->imageUrl(),
         
        ];
    }
}
