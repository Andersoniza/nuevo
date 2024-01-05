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
        Schema::create('subActivitysPoas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('title');
            $table->foreignId('generalActivity_id')
            ->constrained('generalActivitysPoas');
            $table->foreignId('user_id')
            ->constrained('users');
            $table->foreignId('typePoa_id')
            ->constrained('typesPoas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subActivitysPoas');
    }
};
