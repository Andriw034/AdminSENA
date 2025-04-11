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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',45)->unique();
            $table->string('call_number', 15);
            $table->unsignedBigInteger('course_id') ->unique();
            $table->unsignedBigInteger('computer_id')->unique();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('computer_id')->references('id')->on('computers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
        Schema::dropIfExists('computers');
        Schema::dropIfExists('curse-teachers');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('training_centers');
    }
};
