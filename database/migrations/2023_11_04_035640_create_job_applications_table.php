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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('website');
            $table->string('mission');
            $table->string('role');
            $table->tinyInteger('location_type');
            $table->string('location')->nullable();
            $table->timestamp('date_applied')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->text('note')->nullable();
            $table->string('found_on')->nullable();
            $table->string('projected_salary')->nullable();
            $table->boolean('offered_role')->default(false);
            $table->text('offer_note')->nullable();
            $table->boolean('accepted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
