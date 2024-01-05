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
        Schema::create('objectivesPeis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('title');
            $table->foreignId('indicatorPei_id')
            ->constrained('indicatorsPeis');
            $table->foreignId('typePei_id')
            ->constrained('typesPeis');
            $table->foreignId('departament_id')
            ->constrained('departaments');
            $table->foreignId('category_id')
            ->constrained('categorys');
            $table->foreignId('area_id')
            ->constrained('areas');
            $table->foreignId('user_id')
            ->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objectivesPeis');
    }
};
