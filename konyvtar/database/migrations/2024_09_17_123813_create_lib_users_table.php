<?php

use App\Models\LibUser;
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
        Schema::create('lib_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

        LibUser::create([
            'name' => 'Viki',
            'email' => 'szuper@gmail.com'
        ]);
        LibUser::create([
            'name' => 'Sella',
            'email' => 'extraszuper@gmail.com'
        ]);
        LibUser::create([
            'name' => 'Én2',
            'email' => 'szuper2@gmail.com'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_users');
    }
};
