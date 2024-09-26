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
            $table->integer('admission_no');
            $table->string('photopath');
            $table->string('name');
            $table->string('gender');
            $table->string('admission_date');
            $table->string('date_of_birth');
            $table->string('mobile');
            $table->foreignId('schoolclass_id')->constrained();
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('cast');
            $table->string('religious');
            $table->string('email');
            $table->string('password');

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
