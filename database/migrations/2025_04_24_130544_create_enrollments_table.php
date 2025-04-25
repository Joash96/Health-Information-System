<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('enrollments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('client_id')->constrained()->onDelete('cascade');
        $table->foreignId('program_id')->constrained()->onDelete('cascade');
        $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
        $table->date('enrollment_start_date');
        $table->date('enrollment_end_date');
        $table->string('reason_for_enrollment');
        $table->integer('age');
        $table->string('county')->nullable();
        $table->string('illness_history')->nullable();
        $table->string('id_number')->nullable();
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
