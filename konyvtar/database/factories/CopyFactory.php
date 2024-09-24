<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\LibUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => LibUser::all()->random()->id,
        	'book_id' => Book::all()->random()->id,
        ];
    }
}
