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
        Schema::create('generalActivitysPoas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('title');
            $table->date('startDate');
            $table->date('finalDate');
            $table->foreignId('indicatorPoa_id')
            ->constrained('indicatorsPoas');
            $table->foreignId('activityPei_id')
            ->constrained('activitysPeis');
            $table->foreignId('user_id')
            ->constrained('users');
            $table->foreignId('experimentalStation_id')
            ->constrained('experimental_stations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generalActivitysPoas');
    }
};
