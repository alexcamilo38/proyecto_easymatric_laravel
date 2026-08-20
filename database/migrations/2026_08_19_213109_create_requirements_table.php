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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('identification_photo');
            $table->string('parent_identification_photo');
            $table->string('document_photo');
            $table->string('health_photo');
            $table->string('vaccine_copy');
            $table->string('sisben_score');
            $table->string('birth_certificate');
            $table->string('development_record');
            $table->string('behavior_certificate');
            $table->string('previous_study_certificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};
