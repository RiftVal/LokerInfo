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
            // $table->id(); 
            // $table->string('job_name'); 
            // $table->text('job_desc'); 
            // $table->string('job_companiesDesc'); 
            // $table->string('job_location'); 
            // $table->string('job_salary'); 
            // $table->string('job_require');
            // $table->enum('employment_type', ['Full-time', 'Part-time', 'Contract', 'Internship']); // Tipe pekerjaan
            // $table->timestamps();
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
