<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Copy;
use App\Models\Lending;
use App\Models\LibUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        LibUser::factory(10)->create();
        Book::factory(25)->create();

        Copy::factory(25)->create();
        Lending::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
