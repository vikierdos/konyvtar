<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });

        Book::create([
            'author' => 'George R.R. Martin',
            'title' => 'Game of Thrones',
            'pieces' => 30,
        ]);
        Book::create([
            'author' => 'J.R.R. Tolkien',
            'title' => 'The Lord of the Rings',
            'pieces' => 15,
        ]);
        Book::create([
            'author' => 'J.R.R. Tolkien',
            'title' => 'The Hobbit',
            'pieces' => 26,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
