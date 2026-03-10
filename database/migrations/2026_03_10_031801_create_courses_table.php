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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();    
            $table->string('course_key');
            $table->string('title');
            $table->string('course_cover');
            $table->text('content');
            $table->string('didactic_material');
            $table->foreignId('group_id')->constrained();
            $table->foreignId('robotic_kit_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
