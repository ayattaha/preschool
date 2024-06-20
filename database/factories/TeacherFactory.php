<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacherName' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'teacherSpeciality' => $this->faker->jobTitle,
            'active' => $this->faker->boolean,
            'image' => $this->faker->imageUrl(),
            'facebook' => $this->faker->userName,
            'tweeter' => $this->faker->userName,
            'instgrame' => $this->faker->userName,
        ];
    }
}
