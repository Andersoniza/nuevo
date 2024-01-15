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
            $table->boolean('busyGame');
            $table->string('age');
           // $table->timestamp('email_verified_at')->nullable();
            $table->date('birthDate');
            $table->date('ingressDate');
            $table->string('timeService');
            $table->bigInteger('impositionNumber');
            $table->string('senescytRegistrationNumber');
            $table->string('academicTitle');
            $table->string('institutionalPhone');
            $table->string('esigefActivity');
            $table->bigInteger('salary');
            $table->string('password');
            $table->boolean('returnedMigrant');
            $table->boolean('gender');
            $table->boolean('transportation');
            $table->string('extensionPhone');
            $table->boolean('commissionServise');
            $table->boolean('dataCommission1');
            $table->boolean('dataCommission2');
            $table->boolean('dataCommission3');
            $table->boolean('replacementCommission');
            $table->boolean('replacementCommission');
            $table->string('budgetItem1');
            $table->string('budgetItem2');

            //$table->rememberToken();

            $table->foreignId('locationWork_id')->constrained('locationWorks');
            $table->foreignId('laborProvince_id')->constrained('provinces');
            $table->foreignId('laborCanton_id')->constrained('cantons');
            $table->foreignId('fourthLevel_id')->constrained('fourthLevels');
            $table->foreignId('specialSituation_id')->constrained('specialSituations');
            $table->foreignId('nationality_id')->constrained('nationalities');
            $table->foreignId('ethnic_id')->constrained('ethnicities');
            $table->foreignId('academicFormation_id')->constrained('academic_formations');
            $table->foreignId('position_id')->constrained('positions');
            $table->foreignId('fund_id')->constrained('funds');
            $table->foreignId('regimen_id')->constrained('regimenes');
            $table->foreignId('process_id')->constrained('processes');
            $table->foreignId('associated_location_id')->constrained('associated_locations');
            $table->foreignId('priorityGroup_id')->constrained('priorityGroups');
        
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
