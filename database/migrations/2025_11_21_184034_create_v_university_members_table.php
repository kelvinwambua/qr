<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Specify the university connection
    protected $connection = 'university';

    public function up(): void
    {
        Schema::connection('university')->create('v_university_members', function (Blueprint $table) {
            $table->id(); // This will be the admission number
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable(); // student, staff, etc.
            $table->string('photo_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::connection('university')->dropIfExists('v_university_members');
    }
};
