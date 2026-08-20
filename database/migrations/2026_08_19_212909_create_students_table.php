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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_system_id')->nullable();
            $table->foreign('user_system_id')
                ->references('id')
                ->on('user_systems')
                ->onDelete('set null')
                ->onUpdate('set null');
                
            $table->unsignedBigInteger('guardian_id')->nullable();
            $table->foreign('guardian_id')
                ->references('id')
                ->on('guardians')
                ->onDelete('set null')
                ->onUpdate('set null');
            
            $table->unsignedBigInteger('institution_id')->nullable();
            $table->foreign('institution_id')
                ->references('id')
                ->on('institutions')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
