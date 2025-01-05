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
        Schema::create('job_applicant', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('home_location'); 
            $table->string('no_telp'); 
            $table->string('resume');             
            $table->string('application_letter');             
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applicant');
    }
};
