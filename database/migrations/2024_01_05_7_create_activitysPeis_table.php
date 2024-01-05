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
        Schema::create('activitysPeis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
    $table->foreignId('objetivoPei_id')
                ->constrained('objectivesPeis');
            $table->foreignId('result_id')
                ->constrained('resultsPeis');
            $table->foreignId('typePei_id')
                ->constrained('typesPeis');
    $table->foreignId('user_id')
                ->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activitysPeis');
    }
};
