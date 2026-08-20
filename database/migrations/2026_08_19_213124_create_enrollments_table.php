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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->date('enrollment_date');
            $table->string('status');

            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('module_id')->nullable();
            $table->foreign('module_id')
                ->references('id')
                ->on('modules')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('requirement_id')->nullable();
            $table->foreign('requirement_id')
                ->references('id')
                ->on('requirements')
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
        Schema::dropIfExists('enrollments');
    }
};
