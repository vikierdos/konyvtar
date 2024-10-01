<?php

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
        Schema::create('lendings', function (Blueprint $table) {
            //$table->id();
            

            $table->primary(['user_id', 'copy_id']);
            $table->foreignId('copy_id')->references('copy_id')->on('copies');
            $table->foreignId('user_id')->references('user_id')->on('lib_users'); 
            $table->date('start')->default(now());
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lendings');
    }
};
