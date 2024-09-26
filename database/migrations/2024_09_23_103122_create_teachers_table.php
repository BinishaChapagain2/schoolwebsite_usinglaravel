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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('date_of_joining');
            $table->string('mobile');
            $table->string('marital_status');
            $table->string('photopath');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->text('qualification');
            $table->text('work_experience');
            $table->foreignId('schoolclass_id')->constrained();
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
        Schema::dropIfExists('teachers');
    }
};
