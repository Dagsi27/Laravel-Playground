<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Authorisation>
 */
class AuthorisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->randomElement(User::pluck('id')),
            'token' => fake()->regexify('[A-Za-z0-9]{64}'),
            'expires_at' => fake()->date()
        ];
    }
}
