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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('title');
            $table->date('startDate');
            $table->date('finalDate');
            $table->foreignId('typeProject_id')
            ->constrained('typesProjects');
            $table->foreignId('user_id')
            ->constrained('users');
            $table->foreignId('financing_id')
            ->constrained('financings');
            $table->foreignId('category_id')
            ->constrained('categorys');
            $table->foreignId('area_id')
            ->constrained('areas');
            $table->foreignId('institution_id')
            ->constrained('institutions');
            $table->foreignId('component_id')
            ->constrained('components');
            $table->foreignId('associated_location_id')
            ->constrained('associated_locations');
            $table->foreignId('subActivityPoa_id')
            ->constrained('subActivitysPoas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
