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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('dni')->unique();
            $table->string('name');
            $table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();
            $table->date('birthDate');
            $table->date('hiteDate');
            $table->bigInteger('contributionNumber');
            $table->string('senescytRegistrationNumber');
            $table->string('academicTitle');
            $table->string('institutionalPhone');
            $table->string('esigefActivity');
            $table->bigInteger('salary');
            $table->string('password');
            $table->boolean('returnedMigrant');
            $table->boolean('gender');
            $table->boolean('transportation');

            //$table->rememberToken();

            $table->foreignId('priority_id')->constrained('priorityGroups');
            $table->foreignId('nationality_id')->constrained('nationalities');
            $table->foreignId('ethnic_id')->constrained('ethnicities');
            $table->foreignId('academic_formation_id')->constrained('academic_formations');
            $table->foreignId('fourth_levels_id')->constrained('fourthLevels');
            $table->foreignId('position_id')->constrained('positions');
            $table->foreignId('fund_id')->constrained('funds');
            $table->foreignId('regimen_id')->constrained('regimenes');
            $table->foreignId('process_id')->constrained('processes');
            $table->foreignId('unit_id')->constrained('units');
            $table->foreignId('management_id')->constrained('managements');
            $table->foreignId('area_id')->constrained('areas');
            $table->foreignId('area_ta_id')->constrained('areas_ta');
            $table->foreignId('associated_location_id')->constrained('associated_locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
